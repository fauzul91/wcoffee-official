<?php

namespace App\Filament\Resources\MitraApprovalResource\Pages;

use App\Filament\Resources\MitraApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMitraApprovals extends ListRecords
{
    protected static string $resource = MitraApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
