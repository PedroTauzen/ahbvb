<?php

namespace App\Filament\Resources\AssociacaoResource\Pages;

use App\Filament\Resources\AssociacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssociacaos extends ListRecords
{
    protected static string $resource = AssociacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
