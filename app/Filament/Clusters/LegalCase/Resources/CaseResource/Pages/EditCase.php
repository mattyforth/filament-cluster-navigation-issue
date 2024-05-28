<?php

namespace App\Filament\Clusters\LegalCase\Resources\CaseResource\Pages;

use App\Filament\Clusters\LegalCase\Resources\CaseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditCase extends EditRecord
{
    protected static string $resource = CaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
