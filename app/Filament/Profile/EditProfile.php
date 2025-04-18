<?php

namespace App\Filament\Profile;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\FileUpload;

class EditProfile extends BaseEditProfile
{
    public function form(Form $form): Form
    {
        return $form
            ->schema([                
                $this->getNameFormComponent(),
                $this->getPhoneFormComponent(),
                $this->getEmailFormComponent()->disabled(),
                $this->getPasswordFormComponent(),
                $this->getPhotoFormComponent(),            
            ]);
    }

    protected function getPhoneFormComponent(): Component
    {
        return TextInput::make('phone')
            ->label('Phone Number')
            ->maxLength(255);
    }

    protected function getPhotoFormComponent(): Component
    {
        return FileUpload::make('photo')
            ->label('Photo')
            ->image()
            ->avatar();
    }
}