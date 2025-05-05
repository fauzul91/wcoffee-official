<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;
use App\Filament\Resources\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected static bool $canCreateAnother = true;

    // protected function getFormActions(): array
    // {
    //     return [
    //         $this->getCreateFormAction(),
    //         ...(static::canCreateAnother() ? [$this->getCreateAnotherFormAction()->label("Tambah Lainnya")] : []),
    //         $this->getCancelFormAction(),
    //     ];
    // }

    // protected function getCreateFormAction(): Action
    // {
    //     return Action::make('create')
    //         ->label('Tambahkan');        
    // }
}
