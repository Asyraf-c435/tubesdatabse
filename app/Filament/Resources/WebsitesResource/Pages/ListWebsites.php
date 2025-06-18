<?php

namespace App\Filament\Resources\WebsitesResource\Pages;

use App\Filament\Resources\WebsitesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebsites extends ListRecords
{
    protected static string $resource = WebsitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
