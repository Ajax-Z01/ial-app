<?php

namespace App\Listeners;

use App\Models\Dummy;
use App\Events\DataDummy;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddDummy implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DataDummy $event): void
    {
        Dummy::create($event->data_dummy);
    }
}
