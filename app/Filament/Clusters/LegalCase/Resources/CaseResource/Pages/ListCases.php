<?php

namespace App\Filament\Clusters\LegalCase\Resources\CaseResource\Pages;

use App\Filament\Clusters\LegalCase\Resources\CaseResource;
use Filament\Resources\Pages\ListRecords;

class ListCases extends ListRecords
{
    protected static string $resource = CaseResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
