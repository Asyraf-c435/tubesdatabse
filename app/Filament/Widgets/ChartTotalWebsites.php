<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartTotalWebsites extends ChartWidget
{
    protected static ?string $heading = 'Total Postingan';

    protected function getData(): array
    {
        return [
            'websites' => ['Total'],
            'datasets' => [
                [
                    'websites' => 'Jumlah',
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
