<?php

namespace App\Filament\Resources\ProductVarianResource\Pages;

use App\Filament\Resources\ProductVarianResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateProductVarian extends CreateRecord
{
    protected static string $resource = ProductVarianResource::class;

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
