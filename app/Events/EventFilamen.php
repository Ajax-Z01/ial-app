<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventFilamen
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $arus_filamen;
    public $tegangan_potensio;

    /**
     * Create a new event instance.
     */
    public function __construct($arus_filamen, $tegangan_potensio)
    {
        $this->arus_filamen = $arus_filamen;
        $this->tegangan_potensio = $tegangan_potensio;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {
        return new Channel('data-filamen');
    }

    public function broadcastAs(): string
    {
        return 'filamen-added';
    }
}
