<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = new User();
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
}
