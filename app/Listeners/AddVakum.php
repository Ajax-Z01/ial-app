<?php

namespace App\Listeners;

use App\Models\Vakum;
use App\Events\EventVakum;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddVakum
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
    public function handle(EventVakum $event): void
    {
        Vakum::create([
            'tekanan_vakum_penning_mbar' => $event->tekanan_vakum_penning_mbar,
            'tekanan_vakum_pirani_mbar' => $event->tekanan_vakum_pirani_mbar,
        ]);
    }
}
