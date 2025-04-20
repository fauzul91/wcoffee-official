<?php

namespace App\Filament\Resources\ProductVarianResource\Pages;

use App\Filament\Resources\ProductVarianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductVarian extends EditRecord
{
    protected static string $resource = ProductVarianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
