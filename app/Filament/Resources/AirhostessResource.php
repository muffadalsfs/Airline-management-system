<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirhostessResource\Pages;
use App\Filament\Resources\AirhostessResource\RelationManagers;
use App\Models\Airhostess;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirhostessResource extends Resource
{
    protected static ?string $model = Airhostess::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone-arrow-up-right';
        protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('filghtnumber')
                    ->required()
                    ->maxLength(255),
                     Forms\Components\TextInput::make('age')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('filghtnumber')
                    ->searchable(),
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
            'index' => Pages\ListAirhostesses::route('/'),
            'create' => Pages\CreateAirhostess::route('/create'),
            'edit' => Pages\EditAirhostess::route('/{record}/edit'),
        ];
    }
}