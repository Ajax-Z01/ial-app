<?php

namespace App\Listeners;

use App\Models\Optic;
use App\Events\EventOptic;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddOptic
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
    public function handle(EventOptic $event): void
    {
        Optic::create([
            'data_arus_pemayar' => $event->data_arus_pemayar,
            'data_arus_pemfokus' => $event->data_arus_pemfokus,
            'data_tegangan_pemayar' => $event->data_tegangan_pemayar,
            'data_tegangan_pemfokus' => $event->data_tegangan_pemfokus,
        ]);
    }
}
