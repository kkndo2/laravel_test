<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\ArticlesEvent::class => [
            \App\Listeners\ArticlesEventListener::class,
        ],
        \Illuminate\Auth\Events\Login::class => [
            \App\Listeners\UsersEventListener::class
        ],
        \Illuminate\Database\Events\QueryExecuted::class => [
            \App\Listeners\QueryEventListener::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
        \Event::listen(\App\Events\ArticleCreated::class, \App\Listeners\ArticlesEventListener::class);
        /*
        \Event::listen(\App\Events\ArticleCreated::class, function () {
            dump('두번째 이벤트 스택');
        });
        \Event::listen(\App\Events\ArticleCreated::class, function () {
            dump('네번째 이벤트 스택');
        });
        */
    }
}
