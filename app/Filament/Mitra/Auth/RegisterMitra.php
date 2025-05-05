<?php

namespace App\Filament\Mitra\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Auth\Register as AuthRegister;
use App\Models\User; // atau sesuai path modelmu

class RegisterMitra extends AuthRegister
{   
    public function form(Form $form): Form
    {
        return  $this->makeForm()
            ->schema([
                $this->getNameFormComponent()->label('Nama Bisnis'),
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
        return Forms\Components\TextInput::make('phone')
            ->required()
            ->label('Phone Number')
            ->maxLength(15)  
            ->string();                   
    }

    protected function handleRegistration(array $data): User
    {
        $user = parent::handleRegistration($data);
        $user->assignRole('mitra'); // 🎯 assign role setelah register
        return $user;
    }
}