<?php

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Continent;

class ContinentsEnServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Repository::registerSource(Continent::class, 'en', __DIR__ . '/../resources/data.csv');
    }
}