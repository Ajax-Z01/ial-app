<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
}
