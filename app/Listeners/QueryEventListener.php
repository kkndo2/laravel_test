<?php

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class QueryEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted  $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {


        $stream = new RotatingFileHandler(storage_path('logs/querys/query.log'));
        $logger=new Logger('query');
        $logger->pushHandler($stream);
        $logger->addDebug($event->sql);
    }
}
