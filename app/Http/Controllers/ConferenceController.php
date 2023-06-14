<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Conference;
use Illuminate\Http\Request;

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

        $conference->create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'admin_id' => $request->admin_id,
            'date' => $request->date,
            'time' => $request->time,
            'link' => $request->link,
        ]);

        return redirect()->route('video_conference')->with('success', 'Video conference berhasil diubah');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('video_conference')->with('success', 'Video conference berhasil dihapus');
    }
}
