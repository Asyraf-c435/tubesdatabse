<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartTotalCollections extends ChartWidget
{
    protected static ?string $heading = 'Total Postingan';

    protected function getData(): array
    {
        return [
            'collections' => ['Total'],
            'datasets' => [
                [
                    'collections' => 'Jumlah',
                    'data' => [50],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
