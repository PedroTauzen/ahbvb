<?php

namespace App\Filament\Resources\AssociacaoResource\Pages;

use App\Filament\Resources\AssociacaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssociacao extends EditRecord
{
    protected static string $resource = AssociacaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
