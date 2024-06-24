<?php

namespace App\Filament\Resources\AnnualResource\Pages;

use App\Filament\Resources\AnnualResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnnual extends EditRecord
{
    protected static string $resource = AnnualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
