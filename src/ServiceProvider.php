<?php

namespace Redbastie\LivewireAutoRoute;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes.php');
    }
}
