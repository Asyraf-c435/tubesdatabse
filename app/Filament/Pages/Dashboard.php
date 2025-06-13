<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\ChartTotalUsers;
use App\Filament\Widgets\ChartTotalCourses;
use App\Filament\Widgets\ChartTotalWebsites;
use App\Filament\Widgets\ChartTotalJobs;
use App\Filament\Widgets\ChartTotalCollections;


class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';
    protected function getHeaderWidgets(): array
    {
        return [
            ChartTotalUsers::class,
            ChartTotalCollections::class,
            ChartTotalCourses::class,
            ChartTotalJobs::class,
            ChartTotalWebsites::class,
        ];
    }
}
