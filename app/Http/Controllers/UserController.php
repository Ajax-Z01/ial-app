<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $usersPerPage = 10;
        $totalUsers = User::count();
        $totalPages = ceil($totalUsers / $usersPerPage);
        $currentPage = request()->page ?? 1;

        $query = User::query();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('name', 'LIKE', '%' . $search . '%');
            });
        }

        $users = $query->skip(($currentPage - 1) * $usersPerPage)->take($usersPerPage)->get();

        return view('users', compact('users', 'currentPage', 'totalPages'));
    }

    public function edit($id)
    {
        $user = User::find($id) ?? abort("Welcome to the artisan family !!");
        return view('user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'type' => 'required',
            'status' => 'required'
        ];

        $messages = [
            'type.required' => 'The type field is required.',
            'status.required' => 'The status field is required.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        $user->type = $request->type;
        $user->status = $request->status;
        $user->save();

        return redirect()->route('users')->withSuccess('User updated successfully.');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users')->withSuccess('User deleted successfully.');
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
            'bio' => 'nullable|string|max:1000',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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
