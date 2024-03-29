@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6 class="text-center">User edit</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <div class="flex-auto px-6 pb-6">
              <form role="form text-left" action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-4">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ htmlentities($user->username)}}" aria-describedby="username-addon" readonly/>
                </div>
                <div class="mb-4">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ htmlentities($user->name) }}" aria-describedby="name-addon" readonly/>
                </div>
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ htmlentities($user->email) }}" aria-describedby="email-addon" readonly/>
                </div>
                <div class="mb-4">
                    <label for="type">Type</label>
                    <select name="type" id="type" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                        <option @if ($user->type === 'admin') selected @endif value="admin">Admin</option>
                        <option @if ($user->type === 'user') selected @endif value="user">User</option>
                    </select>
                    @error('type')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                        <option @if ($user->status === 'approved') selected @endif value="approved">Approved</option>
                        <option @if ($user->status === 'notapproved') selected @endif value="notapproved">Not Approved</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                    @enderror
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('users') }}" class="inline-block w-1/2 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-red-900 to-red-500 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</a>
                    <button type="submit" class="inline-block w-1/2 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-custom to-gray-custom hover:border-slate-700 hover:bg-slate-700 hover:text-white">Update</button>
                </div>
              </form>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection