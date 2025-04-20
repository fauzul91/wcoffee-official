<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use App\Models\MitraApproval;
use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use App\Filament\Profile\EditProfile;
use Filament\Notifications\Notification;
use App\Filament\Mitra\Auth\RegisterMitra;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Filament\Events\ServingFilament;
use Illuminate\Support\Facades\Event;
class MitraPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('mitra')
            ->path('mitra')
            ->favicon('assets/images/logos/logo-64.png')
            ->colors([
                'primary' => Color::hex('#2F6A62'),                
            ])
            ->profile(EditProfile::class, false)
            ->registration(RegisterMitra::class)
            ->brandLogo(asset('assets/images/logos/logo.svg'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('assets/images/logos/logo-64.png'))
            ->discoverResources(in: app_path('Filament/Mitra/Resources'), for: 'App\\Filament\\Mitra\\Resources')
            ->discoverPages(in: app_path('Filament/Mitra/Pages'), for: 'App\\Filament\\Mitra\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Mitra/Widgets'), for: 'App\\Filament\\Mitra\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function boot(): void
    {
        Event::listen(ServingFilament::class, function () {
            if (auth()->check() && auth()->user()->hasRole('mitra')) {
                $mitra = auth()->user();
                $approval = $mitra->mitraApproval;
        
                if ($approval && !$approval->is_notified) {
                    // Kirim notifikasi pertama kali
                    if ($approval->status === 'approved') {
                        Notification::make()
                            ->title('Selamat! Pengajuan Anda Diterima')
                            ->body('Selamat bergabung sebagai mitra kami. Anda sudah dapat menggunakan dashboard sepenuhnya.')
                            ->success()
                            ->duration(1000000)
                            ->send();
                    } elseif ($approval->status === 'rejected') {
                        Notification::make()
                            ->title('Mohon Maaf! Pengajuan Anda Ditolak')
                            ->body('Kami mohon maaf, pengajuan kerja sama Anda belum bisa kami terima. Silakan periksa dokumen anda dan konfirmasi kembali.')
                            ->danger()
                            ->duration(1000000)
                            ->send();
                    }
        
                    // Update flag is_notified biar nggak spam
                    $approval->update(['is_notified' => true]);
                }
            }
        });        
    }
}
