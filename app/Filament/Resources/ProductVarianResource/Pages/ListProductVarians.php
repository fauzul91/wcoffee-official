<?php

namespace App\Filament\Resources\ProductVarianResource\Pages;

use App\Filament\Resources\ProductVarianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductVarians extends ListRecords
{
    protected static string $resource = ProductVarianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
