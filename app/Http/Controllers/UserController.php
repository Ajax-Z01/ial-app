<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Mail\AccountApproved;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $usersPerPage = 10;
        $totalUsers = User::count();
        $totalPages = ceil($totalUsers / $usersPerPage);
        $currentPage = request()->page ?? 1;

        $query = User::query()->latest();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%');
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
        if ($user->status == 'approved') {
            // Kirim email notifikasi bahwa akun telah diapprove
            Mail::to($user->email)->send(new AccountApproved());
        }
        $user->save();

        $notification = new Notification();
        $notification->model()->associate($user); // Menghubungkan dengan model Post
        $notification->content = 'has been updated.';
        $notification->save();

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
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5|max:20|alpha_dash',
            'name' => 'required|min:5|max:50|regex:/^[a-zA-Z\s]+$/',
            'mobile' => 'nullable|regex:/^[+0-9\s]+$/|max:20',
            'location' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->setAttribute('username', $request->username);
        $user->fill($request->only(['name', 'mobile', 'location', 'bio']));

        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            $allowedMimes = ['jpeg', 'png', 'jpg'];
            $validator = Validator::make($request->all(), [
                'profile_image' => 'image|mimes:' . implode(',', $allowedMimes) . '|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = Str::slug($request->username) . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('uploads'), $name);
            $user->setAttribute('profile_image', '/uploads/' . $name);
        }

        $user->save();

        return redirect()->route('profile')->withSuccess("Profile updated successfully.");
    }
}
