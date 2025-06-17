<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Tag;

class ChartTagCount extends ChartWidget
{
    protected static ?string $heading = 'Site Count per Tag';
    protected static ?string $description = 'This chart displays how many site a tag has been assigned to.';

    protected function getData(): array
    {
        $tags = Tag::withCount('websites')->orderByDesc('websites_count')->get();

        $data = [];
        foreach ($tags as $tag) {
            $data[$tag->name] = $tag->websites->count();
        }

        return [
            'labels' => array_keys($data),
            'datasets' => [
                [
                    'label' => 'Number of Site',
                    'data' => array_values($data),
                    'backgroundColor' => [
                        'red',
                        'orange',
                        'yellow',
                        'green',
                        'blue',
                        'indigo',
                        'purple',
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

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
        ];
    }
}
