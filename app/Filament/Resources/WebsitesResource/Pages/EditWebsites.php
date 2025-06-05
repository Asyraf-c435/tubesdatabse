<?php

namespace App\Filament\Resources\WebsitesResource\Pages;

use App\Filament\Resources\WebsitesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWebsites extends EditRecord
{
    protected static string $resource = WebsitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
