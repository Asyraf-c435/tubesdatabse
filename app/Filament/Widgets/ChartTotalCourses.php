<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartTotalCourses extends ChartWidget
{
    protected static ?string $heading = 'Total Postingan';

    protected function getData(): array
    {
        return [
            'courses' => ['Total'],
            'datasets' => [
                [
                    'courses' => 'Jumlah',
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
