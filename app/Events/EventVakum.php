<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventVakum
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $tekanan_vakum_penning_mbar;
    public $tekanan_vakum_pirani_mbar;

    /**
     * Create a new event instance.
     */
    public function __construct($tekanan_vakum_penning_mbar, $tekanan_vakum_pirani_mbar)
    {
        $this->tekanan_vakum_penning_mbar = $tekanan_vakum_penning_mbar;
        $this->tekanan_vakum_pirani_mbar = $tekanan_vakum_pirani_mbar;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {
        return new Channel('data-vakum');
    }

    public function broadcastAs(): string
    {
        return 'vakum-added';
    }
}
