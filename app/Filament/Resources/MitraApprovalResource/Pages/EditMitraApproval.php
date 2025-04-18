<?php

namespace App\Filament\Resources\MitraApprovalResource\Pages;

use App\Filament\Resources\MitraApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMitraApproval extends EditRecord
{
    protected static string $resource = MitraApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
