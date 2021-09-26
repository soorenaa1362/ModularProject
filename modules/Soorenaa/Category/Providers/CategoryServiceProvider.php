<?php

namespace Soorenaa\Category\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/category_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Categories');
    }
}