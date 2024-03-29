<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Conference;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Mail\ConferenceUpdate;
use Illuminate\Support\Facades\Mail;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::latest()->first();

        // Format the date
        $formattedDate = Carbon::parse($conferences->date)->format('d F, Y');

        // Format the time
        $formattedTime = Carbon::parse($conferences->time)->format('H:i') . ' WIB';

        return view('video_conference', compact('conferences', 'formattedDate', 'formattedTime'));
    }

    public function conference()
    {
        $conferences = Conference::latest()->first();

        // Format the date
        $formattedDate = Carbon::parse($conferences->date)->format('Y-m-d');

        // Format the time
        $formattedTime = Carbon::parse($conferences->time)->format('H:i') . ' WIB';

        return view('conference', compact('conferences', 'formattedDate', 'formattedTime'));
    }

    public function update(Request $request, Conference $conference)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'admin_id' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'link' => 'required|url',
        ]);

        $conference = new Conference();
        $conference->title = $request->title;
        $conference->description = $request->description;
        $conference->location = $request->location;
        $conference->admin_id = $request->admin_id;
        $conference->date = $request->date;
        $conference->time = $request->time;
        $conference->link = $request->link;
        $conference->save();

        // Create notification
        $notification = new Notification();
        $notification->model()->associate($conference); // Menghubungkan dengan model Post
        $notification->content = 'Conference has been updated'; // Isi notifikasi
        $notification->save();

        // Mengirim email hanya ke pengguna yang telah diapprove
        // $approvedUsers = User::where('status', 'approved')->get();

        // foreach ($approvedUsers as $user) {
        //     Mail::to($user->email)->send(new ConferenceUpdate($conference));
        // }

        return redirect()->route('video_conference')->with('success', 'Video conference berhasil diubah');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('video_conference')->with('success', 'Video conference berhasil dihapus');
    }
}
