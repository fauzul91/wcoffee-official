<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

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
