<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FilghtResource\Pages;
use App\Filament\Resources\FilghtResource\RelationManagers;
use App\Models\Flight;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FilghtResource extends Resource
{
    protected static ?string $model = Flight::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';
 protected static ?string $navigationGroup = 'Air mangment';
            protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                     Forms\Components\TextInput::make('number')
                    ->required()
                     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                     ->sortable(),
                      Tables\Columns\TextColumn::make('number')
                    ->searchable()
                     ->sortable(),
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
            //   RelationManagers\AirhostessesRelationManager::class,
            // RelationManagers\PilotsRelationManager::class,
            // RelationManagers\CustomersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFilghts::route('/'),
            'create' => Pages\CreateFilght::route('/create'),
            'edit' => Pages\EditFilght::route('/{record}/edit'),
        ];
    }
}