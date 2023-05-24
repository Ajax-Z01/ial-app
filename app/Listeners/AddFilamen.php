<?php

namespace App\Listeners;

use App\Events\EventFilamen;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Filamen;

class AddFilamen
{
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
    public function handle(EventFilamen $event): void
    {
        Filamen::create([
            'arus_filamen' => $event->arus_filamen,
            'tegangan_potensio' => $event->tegangan_potensio,
        ]);
    }
}
