<?php

namespace App\Filament\Resources\PilotResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\PilotResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePilot extends CreateRecord
{
    protected static string $resource = PilotResource::class;
      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('pilot is created ')
        ->body('The pilot has been created successfully.');
}
}