<?php

namespace App\Filament\Resources\FilghtResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\FilghtResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFilght extends CreateRecord
{
    protected static string $resource = FilghtResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('filght is created ')
        ->body('The filght has been created successfully.');
}
}