<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartTotalJobs extends ChartWidget
{
    protected static ?string $heading = 'Total Postingan';

    protected function getData(): array
    {
        return [
            'jobs' => ['Total'],
            'datasets' => [
                [
                    'jobs' => 'Jumlah',
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
