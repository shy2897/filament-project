<?php

namespace App\Filament\Resources\AnnualResource\Pages;

use App\Filament\Resources\AnnualResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnnuals extends ListRecords
{
    protected static string $resource = AnnualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
