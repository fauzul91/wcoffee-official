<?php

namespace App\Filament\Customer\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as AuthRegister;
use FIlament\Pages\Auth\Login as AuthLogin;
use App\Models\User; // atau sesuai path modelmu

class RegisterCustomer extends AuthRegister
{   
    public function form(Form $form): Form
    {
        return  $this->makeForm()
            ->schema([
                $this->getNameFormComponent()->label('Nama'),                
                $this->getPhoneFormComponent(),
                $this->getEmailFormComponent()
                ->unique(ignoreRecord: true)
                ->validationMessages([
                    'unique' => 'Email sudah terdaftar!', 
                ]),
                $this->getPasswordFormComponent()
                ->validationMessages([
                    'same' => 'Password dan konfirmasi password tidak cocok', 
                ]),
                $this->getPasswordConfirmationFormComponent(),                        
            ])
            ->statePath('data');
    }

    protected function getPhoneFormComponent(): Component
    {
        return Forms\Components\TextInput::make('phone_number')
            ->label('Phone Number')
            ->required();                   
    }

    protected function handleRegistration(array $data): User
    {
        $user = parent::handleRegistration($data);
        $user->assignRole('customer'); // 🎯 assign role setelah register
        return $user;
    }
}