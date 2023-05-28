<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = new User();
        if (request()->get('username')) {
            $users = $users->where('username', 'LIKE', '%' . request()->get('username') . '%');
        }
        if (request()->get('name')) {
            $users = $users->where('name', 'LIKE', '%' . request()->get('name') . '%');
        }
        if (request()->get('status')) {
            $users = $users->where('status', request()->get('status'));
        }
        if (request()->get('type')) {
            $users = $users->where('type', request()->get('type'));
        }
        $users = $users->get();
        return view('users', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id) ?? abort("Welcome to the artisan family !!");
        return view('user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->type = $request->type;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('users')->withSuccess('Awesome broo...');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users')->withSuccess('Is die...');
    }


    public function getNewUsersCount()
    {
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();

        return view('dashboard', compact('newUsersCount'));
    }

    public function edit_profile()
    {
        $user = Auth::user();
        return view('profile-edit', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'bio' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->location = $request->location;
        $user->bio = $request->bio;

        if ($request->hasFile('profile_image')) {
            $name = Str::slug($request->username) . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('uploads'), $name);
            $user->profile_image = '/uploads/' . $name;
        }

        $user->save();

        return redirect()->route('profile')->withSuccess("Profile updated successfully.");
    }
}
