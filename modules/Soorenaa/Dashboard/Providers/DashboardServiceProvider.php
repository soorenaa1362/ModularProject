<?php

namespace Soorenaa\Dashboard\Providers;

use Soorenaa\User\Models\User;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/dashboard_routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Dashboard');
    }
}
