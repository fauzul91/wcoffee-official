<?php 

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Http\Responses\Auth\LoginResponse as BaseLoginResponse;
 
class LoginResponse extends BaseLoginResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        if (auth()->user()->hasRole('admin')) {
            return redirect()->to(Dashboard::getUrl(panel: 'admin'));
        }
        if (auth()->user()->hasRole('mitra')) {
            return redirect()->to(route('mitra.dashboard'));
        }
        if (auth()->user()->hasRole('customer')) {
            return redirect()->to(route('home'));
        }
 
        return parent::toResponse($request);
    }
}