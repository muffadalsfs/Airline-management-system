<?php

namespace App\Filament\Resources\AirhostessResource\Pages;

use App\Filament\Resources\AirhostessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAirhostesses extends ListRecords
{
    protected static string $resource = AirhostessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
