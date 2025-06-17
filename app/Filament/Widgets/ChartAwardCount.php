<?php

namespace App\Filament\Widgets;

use App\Models\Award;
use Filament\Widgets\ChartWidget;

class ChartAwardCount extends ChartWidget
{
    protected static ?string $heading = 'Site Count per Award Type';
    protected static ?string $description = 'This chart displays how many site an award has been awarded to.';

    protected function getData(): array
    {
        $awards = Award::all();

        $data = [
            'Honorable Mention' => $awards->where('type', 1)->count(),
            'Site Of The Day' => $awards->where('type', 2)->count(),
            'Site Of The Month' => $awards->where('type', 3)->count(),
            'Site Of The Year' => $awards->where('type', 4)->count(),
            'Developer Award' => $awards->where('type', 5)->count(),
            'Honor' => $awards->where('type', 6)->count(),
        ];
        

        return [
            'labels' => array_keys($data),
            'datasets' => [
                [
                    'label' => 'Number of Site',
                    'data' => array_values($data),
                    'backgroundColor' => [
                        'gray',
                        'red',
                        'blue',
                        'black',
                        'cyan',
                        'dark-gray',
                    ],
                    'hoverOffset' => 2,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}