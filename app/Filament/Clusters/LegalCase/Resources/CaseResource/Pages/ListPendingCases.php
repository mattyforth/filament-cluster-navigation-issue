<?php

namespace App\Filament\Clusters\LegalCase\Resources\CaseResource\Pages;

use App\Filament\Clusters\LegalCase;
use App\Filament\Clusters\LegalCase\Resources\CaseResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Filament\Resources\Resource;

class ListPendingCases extends Resource
{
    protected static string $resource = CaseResource::class;

    protected static ?string $cluster = LegalCase::class;

    protected static ?string $navigationLabel = 'Pending cases';

    protected static ?string $slug = 'pending';

    public static function table(Table $table): Table
    {
        return CaseResource::table($table)->description('Pending cases');
    }

    public static function getPages(): array
    {
        // Note: replace these route classes with the ones for your resource
        return [
            'index' => CaseResource\Pages\ListCases::route('/'),
            'edit' => CaseResource\Pages\EditCase::route('/{record}/edit'),
            'view' => CaseResource\Pages\ViewCase::route('/{record}'),
        ];
    }
}
