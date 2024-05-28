<?php

namespace App\Filament\Clusters\LegalCase\Resources\CaseResource\Pages;

use App\Filament\Clusters\LegalCase;
use App\Filament\Clusters\LegalCase\Resources\CaseResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;

class ListPendingCases extends ListRecords
{
    protected static string $resource = CaseResource::class;

    protected static ?string $cluster = LegalCase::class;

    protected static ?string $navigationLabel = 'Pending cases';

    public function table(Table $table): Table
    {
        return CaseResource::table($table)->description('Pending cases');
    }
}
