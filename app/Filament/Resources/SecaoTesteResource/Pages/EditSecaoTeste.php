<?php

namespace App\Filament\Resources\SecaoTesteResource\Pages;

use App\Filament\Resources\SecaoTesteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecaoTeste extends EditRecord
{
    protected static string $resource = SecaoTesteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
