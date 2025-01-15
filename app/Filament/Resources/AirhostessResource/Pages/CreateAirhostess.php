<?php

namespace App\Filament\Resources\AirhostessResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AirhostessResource;

class CreateAirhostess extends CreateRecord
{
    protected static string $resource = AirhostessResource::class;
     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Airhostese is created ')
        ->body('The airhostese has been created successfully.');
}
}