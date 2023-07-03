<?php

namespace App\Http\Controllers;

use App\Models\Notification;

class NotificationsController extends Controller
{
    public function notifications()
    {
        $NotificationsPerPage = 10;
        $totalNotifications = Notification::count();
        $totalPages = ceil($totalNotifications / $NotificationsPerPage);
        $currentPage = request()->page ?? 1;

        $query = Notification::query()->latest();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'LIKE', '%' . $search . '%');
            });
        }

        $notifications = $query->skip(($currentPage - 1) * $NotificationsPerPage)->take($NotificationsPerPage)->get();

        return view('notifications', compact('notifications', 'currentPage', 'totalPages'));
    }
}
