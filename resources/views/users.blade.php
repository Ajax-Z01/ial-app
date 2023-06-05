@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>Users table</h6>
        </div>
        <div class="flex items-center md:ml-auto md:pr-4 mt-2">
          <form action="{{ route('users') }}" method="GET">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                  <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                      <i class="fas fa-search"></i>
                  </span>
                  <input type="text" name="search" class="focus:shadow-soft-primary-outline pl-8.75 text-sm ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="Search..." value="{{ request()->input('search') }}" />
              </div>
              <button class="hidden" type="submit">Search</button>
          </form>
          @if (request()->filled('search'))
              <a href="{{ route('users') }}" class="ml-4 text-sm text-gray-500 hover:text-gray-700">Reset Search</a>
          @endif
        </div>
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Validation Error!</strong>
            <ul class="mt-3 list-disc list-inside text-sm text-red-500">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
                  <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Email</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Type</th>
                  <th class="pr-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td class="py-2 pl-2 pr-12 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex-shrink-0">
                        <img src="{{ $user->profile_image }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl object-cover" alt="user1" />
                      </div>    
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 leading-normal text-sm">{{ $user->username }}</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">{{ $user->name }}</p>
                      </div>
                    </div> 
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 font-semibold leading-tight text-xs">{{ $user->email }}</p>
                  </td>
                  <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                    @if ($user->status == 'approved')
                    <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $user->status }}</span>
                    @elseif($user->status == 'notapproved')
                    <span class="bg-gradient-to-tl from-red-600 to-pink-500 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $user->status }}</span>
                    @endif
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    @if ($user->type == 'admin')
                    <span class="bg-gradient-to-tl from-yellow-600 to-yellow-400 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $user->type }}</span>
                    @elseif($user->type == 'user')
                    <span class="bg-gradient-to-tl from-blue-600 to-blue-400 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $user->type }}</span>
                    @endif
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="font-semibold leading-tight text-xs text-slate-400 text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent mr-4">Edit</a>
                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="font-semibold leading-tight text-xs text-slate-400 text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this user?')) document.getElementById('delete-form-{{ $user->id }}').submit();">Delete</a>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('user.delete', ['id' => $user->id]) }}" method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                    </form>
                  </td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="mt-6 flex justify-center space-x-1 text-gray-800">
            <a href="{{ route('users', ['page' => max($currentPage - 1, 1)]) }}">
                <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
            </a>
        
            @for ($page = 1; $page <= $totalPages; $page++)
                <a href="{{ route('users', ['page' => $page]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100 {{ $page == $currentPage ? 'bg-blue-600 text-white' : '' }}" title="Page {{ $page }}">{{ $page }}</button>
                </a>
            @endfor
        
            <a href="{{ route('users', ['page' => min($currentPage + 1, $totalPages)]) }}">
                <button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </a>
          </div>              
        </div>
      </div>
    </div>
  </div>
 @endsection