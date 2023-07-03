<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification;

class Notifications extends Component
{
    public function render()
    {
        $notifications = Notification::latest()
            ->take(5)
            ->get();

        return view('livewire.notifications', [
            'notifications' => $notifications,
        ]);
    }

    public function allNotifications()
    {
        $notifications = Notification::latest()
            ->get();

        return view('notifications.notifications', [
            'notifications' => $notifications,
        ]);
    }
}
