@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>Messages</h6>
        </div>
        <div class="flex items-center md:ml-auto md:pr-4 mt-2">
          <form action="{{ route('messages') }}" method="GET">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                  <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                      <i class="fas fa-search"></i>
                  </span>
                  <input type="text" name="search" class="focus:shadow-soft-primary-outline pl-8.75 text-sm ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="Search..." value="{{ request()->input('search') }}" />
              </div>
              <button class="hidden" type="submit">Search</button>
          </form>
          @if (request()->filled('search'))
              <a href="{{ route('messages') }}" class="ml-4 text-sm text-gray-500 hover:text-gray-700">Reset Search</a>
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
            @foreach ($messages as $message)
            <div class="mb-2 container flex flex-col w-full max-w-lg p-6 mx-auto divide-y rounded-md divide-gray-300 bg-gray-50 text-gray-800">
              <div class="flex justify-between p-4">
                <div class="flex space-x-4">
                  <div>
                    <h4 class="font-bold">{{ $message->full_name }} ({{ $message->email }})</h4>
                    <span class="text-xs text-gray-600">{{ $message->created_at->diffForHumans() }}</span>
                  </div>
                </div>
              </div>
              <div class="p-4 space-y-2 text-sm text-gray-600">
                <p>{{ $message->message }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="mt-6 flex justify-center space-x-1 text-gray-800">
            <a href="{{ route('messages', ['page' => max($currentPage - 1, 1)]) }}">
                <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
            </a>
        
            @for ($page = 1; $page <= $totalPages; $page++)
                <a href="{{ route('messages', ['page' => $page]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100 {{ $page == $currentPage ? 'bg-blue-600 text-white' : '' }}" title="Page {{ $page }}">{{ $page }}</button>
                </a>
            @endfor
        
            <a href="{{ route('messages', ['page' => min($currentPage + 1, $totalPages)]) }}">
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