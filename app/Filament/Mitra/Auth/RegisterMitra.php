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
                $this->getNameFormComponent(),
                $this->getPhoneFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),                        
            ])
            ->statePath('data');
    }

    protected function getPhoneFormComponent(): Component
    {
        return Forms\Components\TextInput::make('phone_number')
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