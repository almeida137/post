<?php

namespace App\Filament\Resources\SolicitationResource\Pages;

use App\Filament\Resources\SolicitationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSolicitations extends ListRecords
{
    protected static string $resource = SolicitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
