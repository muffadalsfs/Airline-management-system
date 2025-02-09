<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationGroup = 'Air mangment';
            protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                     Forms\Components\TextInput::make('lastname')
                    ->required()
                    ->maxLength(255),
                     Forms\Components\TextInput::make('email')
                     ->email()
                    ->required()
                    ->maxLength(255),
                     Forms\Components\TextInput::make('age')
                    ->required()
                       ->numeric(),
                     Forms\Components\TextInput::make('fightname')
                    ->required()
                    ->maxLength(255),

                     Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(25),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('lastname')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('fightname')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                     Tables\Columns\TextColumn::make('age')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}