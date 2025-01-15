<?php

namespace App\Filament\Resources\FilghtResource\Pages;

use App\Filament\Resources\FilghtResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFilghts extends ListRecords
{
    protected static string $resource = FilghtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
