<?php

namespace App\Filament\Resources\FilghtResource\Pages;

use App\Filament\Resources\FilghtResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFilght extends EditRecord
{
    protected static string $resource = FilghtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}