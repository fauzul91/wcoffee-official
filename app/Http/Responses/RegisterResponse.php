<?php 

namespace App\Http\Responses;

use Filament\Pages\Dashboard;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Filament\Http\Responses\Auth\RegistrationResponse as BaseRegisterResponse;
 
class RegisterResponse extends BaseRegisterResponse
{
    public function toResponse($request): RedirectResponse|Redirector
    {    
        if (auth()->user()->hasRole('mitra')) {
            return redirect()->to(route('mitra.dashboard'));
        }

        if (auth()->user()->hasRole('customer')) {
            return redirect()->to(route('home'));
        }
 
        return parent::toResponse($request);
    }
}