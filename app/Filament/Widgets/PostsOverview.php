<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Created Posts', Post::count()),
            Stat::make('Published Posts', Post::where('is_published', true)->count()),
            Stat::make('Publishes Today', Post::whereDate('created_at', today())->count()),
        ];
    }
}
