@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>Notifications</h6>
        </div>
        <div class="flex items-center justify-center">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-12 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                        <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Notification</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Message</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date</th>
                            <th class="pr-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notifications as $notification)
                        @if ( Auth::user()->type == 'admin' )
                            @if ($notification->model_type === 'App\Models\User')
                                @include('notifications.user-notif', ['user' => $notification->model])
                            @elseif ($notification->model_type === 'App\Models\Post')
                                @include('notifications.post-notif', ['post' => $notification->model])
                            @elseif ($notification->model_type === 'App\Models\FormResponse')
                                @include('notifications.message-notif', ['message' => $notification->model])
                            @endif
                        @elseif ( Auth::user()->type == 'user' )
                            @if ($notification->model_type === 'App\Models\Conference')
                                @include('notifications.conference-notif', ['conference' => $notification->model])
                            @endif
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if ( Auth::user()->type == 'admin' )
        <div class="mt-6 flex justify-center space-x-1 text-gray-800 mb-6">
            {{-- Tombol navigasi awal --}}
            @if ($currentPage > 1)
                <a href="{{ route('notifications', ['page' => 1]) }}">
                    <button title="First" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                        &lt;&lt;
                    </button>
                </a>
            @endif
        
            {{-- Tombol navigasi sebelumnya --}}
            @if ($currentPage > 1)
                <a href="{{ route('notifications', ['page' => $currentPage - 1]) }}">
                    <button title="Previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                        &lt;
                    </button>
                </a>
            @endif
        
            {{-- Tanda ellipsis sebelum halaman saat ini --}}
            @if ($currentPage > 3)
                <span class="inline-flex items-center justify-center w-8 h-8 text-sm">...</span>
            @endif
        
            {{-- Halaman sebelum sebelum halaman saat ini --}}
            @if ($currentPage > 2)
                <a href="{{ route('notifications', ['page' => $currentPage - 2]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                        {{ $currentPage - 2 }}
                    </button>
                </a>
            @endif
        
            {{-- Halaman sebelum halaman saat ini --}}
            @if ($currentPage > 1)
                <a href="{{ route('notifications', ['page' => $currentPage - 1]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                        {{ $currentPage - 1 }}
                    </button>
                </a>
            @endif
        
            {{-- Halaman saat ini --}}
            <a href="{{ route('notifications', ['page' => $currentPage]) }}">
                <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-blue-600 text-white">
                    {{ $currentPage }}
                </button>
            </a>
        
            {{-- Halaman setelah halaman saat ini --}}
            @if ($currentPage < $totalPages)
                <a href="{{ route('notifications', ['page' => $currentPage + 1]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                        {{ $currentPage + 1 }}
                    </button>
                </a>
            @endif
        
            {{-- Halaman setelah setelah halaman saat ini --}}
            @if ($currentPage < $totalPages - 1)
                <a href="{{ route('notifications', ['page' => $currentPage + 2]) }}">
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                        {{ $currentPage + 2 }}
                    </button>
                </a>
            @endif
        
            {{-- Tanda ellipsis setelah halaman saat ini --}}
            @if ($currentPage < $totalPages - 2)
                <span class="inline-flex items-center justify-center w-8 h-8 text-sm">...</span>
            @endif
        
            {{-- Tombol navigasi berikutnya --}}
            @if ($currentPage < $totalPages)
                <a href="{{ route('notifications', ['page' => $currentPage + 1]) }}">
                    <button title="Next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                        &gt;
                    </button>
                </a>
            @endif
        
            {{-- Tombol navigasi akhir --}}
            @if ($currentPage < $totalPages)
                <a href="{{ route('notifications', ['page' => $totalPages]) }}">
                    <button title="Last" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                        &gt;&gt;
                    </button>
                </a>
            @endif
        </div>
        @endif

        </div>
      </div>
    </div>
  </div>
 @endsection