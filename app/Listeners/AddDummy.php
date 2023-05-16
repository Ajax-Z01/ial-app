<?php

namespace App\Listeners;

use App\Events\DataDummy;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        $data_dummy = $event->data_dummy;
        $data_dummy->save();
    }

    /**
     * Determine whether the listener should be queued.
     */
    public function shouldQueue(DataDummy $event): bool
    {
        return $event->data_dummy->shouldQueue();
    }

    /**
     * Determine the time at which the listener should be queued.
     */
    public function queue(DataDummy $event): ?string
    {
        return $event->data_dummy->queueTime();
    }

    /**
     * The name of the connection the job should be sent to.
     *
     * @var string|null
     */
    public $connection = 'mysql';

    /**
     * The name of the queue the job should be sent to.
     *
     * @var string|null
     */
    public $queue = 'listeners';

    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 60;

    /**
     * Get the name of the listener's queue connection.
     */
    public function viaConnection(): string
    {
        return 'mysql';
    }

    /**
     * Get the name of the listener's queue.
     */
    public function viaQueue(): string
    {
        return 'listeners';
    }
}
