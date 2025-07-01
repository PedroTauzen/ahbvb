<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SecaoTesteResource\Pages;
use App\Filament\Resources\SecaoTesteResource\RelationManagers;
use App\Models\SecaoTeste;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;

class SecaoTesteResource extends Resource
{
    protected static ?string $model = SecaoTeste::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('titulo')->required(),
            Forms\Components\MarkdownEditor::make('descricao'),
            FileUpload::make('imagem')->image()->directory('teste'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSecaoTestes::route('/'),
            'create' => Pages\CreateSecaoTeste::route('/create'),
            'edit' => Pages\EditSecaoTeste::route('/{record}/edit'),
        ];
    }
}
