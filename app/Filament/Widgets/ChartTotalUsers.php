<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartTotalUsers extends ChartWidget
{
    protected static ?string $heading = 'Total Postingan';

    protected function getData(): array
    {
        return [
            'user' => ['Total'],
            'datasets' => [
                [
                    'user' => 'Jumlah',
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
