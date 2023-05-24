<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventOptic
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data_arus_pemayar;
    public $data_arus_pemfokus;
    public $data_tegangan_pemayar;
    public $data_tegangan_pemfokus;

    /**
     * Create a new event instance.
     */
    public function __construct($data_arus_pemayar, $data_arus_pemfokus, $data_tegangan_pemayar, $data_tegangan_pemfokus)
    {
        $this->data_arus_pemayar = $data_arus_pemayar;
        $this->data_arus_pemfokus = $data_arus_pemfokus;
        $this->data_tegangan_pemayar = $data_tegangan_pemayar;
        $this->data_tegangan_pemfokus = $data_tegangan_pemfokus;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {
        return new Channel('data-optic');
    }

    public function broadcastAs(): string
    {
        return 'optic-added';
    }
}
