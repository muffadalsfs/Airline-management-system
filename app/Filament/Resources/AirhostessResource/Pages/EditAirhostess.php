<?php

namespace App\Filament\Resources\AirhostessResource\Pages;

use App\Filament\Resources\AirhostessResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirhostess extends EditRecord
{
    protected static string $resource = AirhostessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
