<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings.
     */
    protected $listen = [
        // 'App\Events\ExampleEvent' => [
        //     'App\Listeners\ExampleListener',
        // ],
    ];
}