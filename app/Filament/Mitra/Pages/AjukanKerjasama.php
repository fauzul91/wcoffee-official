<?php

namespace App\Filament\Mitra\Pages;

use Filament\Forms\Form;
use Filament\Pages\Page;
use App\Models\MitraApproval;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Actions\Action;
class AjukanKerjasama extends Page implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.mitra.pages.ajukan-kerjasama';

    public $user;

    public ?string $status = null;
    public ?MitraApproval $pengajuan = null;
    public ?array $data = [];

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->pengajuan = MitraApproval::where('mitra_id', Auth::id())->latest()->first();

        if ($this->pengajuan) {
            $this->status = $this->pengajuan->status;

            $this->form->fill([
                'nama_pemilik' => $this->pengajuan->nama_pemilik,
                'link_gmaps' => $this->pengajuan->link_gmaps,
                'deskripsi_mitra' => $this->pengajuan->deskripsi_mitra,
                'nib' => $this->pengajuan->nib,
                'siup' => $this->pengajuan->siup,
            ]);
        } else {
            // Kalau belum pernah mengajukan
            $this->form->fill([
                'nama_pemilik' => $this->user->nama_pemilik,
                'link_gmaps' => $this->user->link_gmaps,
                'deskripsi_mitra' => $this->user->deskripsi_mitra,
            ]);
        }
    }

    public function form(Form $form): Form
    {
        $isDisabled = $this->status === 'approved' || $this->status === 'pending';

        return $form 
        ->schema([
            Section::make()
                ->schema([
                    TextInput::make('nama_pemilik')
                        ->label('Nama Pemilik')
                        ->required()
                        ->maxLength(255)
                        ->disabled($isDisabled),

                    FileUpload::make('nib')
                        ->label('NIB')
                        ->disk('public')
                        ->directory('nib')
                        ->preserveFilenames()
                        ->required()
                        ->maxFiles(1)
                        ->disabled($isDisabled),

                    FileUpload::make('siup')
                        ->label('SIUP')
                        ->disk('public')
                        ->directory('siup')
                        ->preserveFilenames()
                        ->required()
                        ->maxFiles(1)
                        ->disabled($isDisabled),

                    TextInput::make('link_gmaps')
                        ->label('Link Google Maps')
                        ->required()
                        ->maxLength(255)
                        ->disabled($isDisabled),

                    Textarea::make('deskripsi_mitra')
                        ->label('Deskripsi Mitra')
                        ->required()
                        ->maxLength(65535)
                        ->disabled($isDisabled),
                ])
        ])
        ->statePath('data');
    }

    public function submit()
    {
        if ($this->status === 'approved' || $this->status === 'pending') {
            Notification::make()
                ->title('Pengajuan sudah diproses dan tidak bisa diubah.')
                ->warning()
                ->send();
            return;
        }
    
        $data = $this->form->getState();
    
        $data['nib'] = is_array($data['nib']) ? $data['nib'][0] ?? null : $data['nib'];
        $data['siup'] = is_array($data['siup']) ? $data['siup'][0] ?? null : $data['siup'];
    
        if ($this->pengajuan && $this->status === 'rejected') {
            // Update jika ditolak
            $this->pengajuan->update([
                'nama_pemilik' => $data['nama_pemilik'],
                'link_gmaps' => $data['link_gmaps'],
                'deskripsi_mitra' => $data['deskripsi_mitra'],
                'nib' => $data['nib'],
                'siup' => $data['siup'],
                'status' => 'pending', // update kembali ke pending
            ]);
        } else {
            // Pengajuan baru
            MitraApproval::create([
                'mitra_id' => Auth::id(),
                'nama_pemilik' => $data['nama_pemilik'],
                'link_gmaps' => $data['link_gmaps'],
                'deskripsi_mitra' => $data['deskripsi_mitra'],
                'nib' => $data['nib'],
                'siup' => $data['siup'],
            ]);
        }
    
        Notification::make()
            ->title('Pengajuan berhasil dikirim!')
            ->success()
            ->send();
    
        $this->redirect('/mitra');    
    }

    public function cancel()
    {
        if ($this->pengajuan && $this->pengajuan->status === 'pending') {
            $this->pengajuan->update(['status' => 'cancelled']);

            Notification::make()
                ->title('Pengajuan berhasil dibatalkan.')
                ->success()
                ->send();

            $this->redirect('/mitra');
        } else {
            Notification::make()
                ->title('Pengajuan tidak bisa dibatalkan.')
                ->danger()
                ->send();
        }
    }

    public function cancelCooperation(): Action
    {
        return Action::make('cancelCooperation')
            ->label('Batalkan Kerjasama')
            ->color('danger')
            ->requiresConfirmation()
            ->action(function () {
                // Gunakan $this->pengajuan untuk mendapatkan objek MitraApproval
                $approval = $this->pengajuan;
    
                // Pastikan objek MitraApproval ada sebelum melakukan update
                if ($approval) {
                    $approval->update(['status' => 'cancelled']);
    
                    // Perbarui status di dalam Livewire
                    $this->status = 'cancelled';
    
                    Notification::make()
                        ->title('Pengajuan kerjasama berhasil dibatalkan.')
                        ->success()
                        ->send();
                } else {
                    Notification::make()
                        ->title('Pengajuan kerjasama tidak ditemukan.')
                        ->danger()
                        ->send();
                }
            });
    }
}

