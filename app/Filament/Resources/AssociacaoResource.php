<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssociacaoResource\Pages;
use App\Filament\Resources\AssociacaoResource\RelationManagers;
use App\Models\Associacao;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssociacaoResource extends Resource
{
    protected static ?string $model = Associacao::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('titulo')
                ->label('Título')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('descricao')
                ->label('Descrição')
                ->rows(5)
                ->required(),

            Forms\Components\FileUpload::make('imagem')
                ->label('Imagem')
                ->image()
                ->directory('associacao'),

            Forms\Components\TextInput::make('ordem')
                ->numeric()
                ->default(1),

            Forms\Components\Toggle::make('visivel')
                ->label('Visível')
                ->default(true),
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
            'index' => Pages\ListAssociacaos::route('/'),
            'create' => Pages\CreateAssociacao::route('/create'),
            'edit' => Pages\EditAssociacao::route('/{record}/edit'),
        ];
    }
}
