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
                $this->getNameFormComponent()->label('Nama')
                ->validationMessages([
                    'required' => 'Silakan isi alamat nama kamu.',
                ]),
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
            ->label('Phone Number')
            ->maxLength(15)  
            ->string()
            ->rule('required|min:10|max:15') // Validasi Laravel jalan di backend
            ->validationMessages([
                'required' => 'Silakan isi nomor HP Anda.',
                'min' => 'Nomor terlalu pendek (min. 10 digit).',
                'max' => 'Nomor terlalu panjang (maks. 15 digit).',
            ]);                   
    }

    protected function handleRegistration(array $data): User
    {
        $user = parent::handleRegistration($data);
        $user->assignRole('customer'); // 🎯 assign role setelah register
        return $user;
    }
}