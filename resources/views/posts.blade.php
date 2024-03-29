@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="float-right m-0 font-weight-bold text-primary text-center align-middle transition-all bg-transparent shadow-none cursor-pointer leading-pro border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs text-gray-800 hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent">
                    <a href="{{ route('post.create') }}" class="btn">
                        <i class="fa fa-plus"></i>
                        New Post
                    </a>
                </h6>
                <h6>Posts table</h6>
            </div>
            <div class="flex items-center md:ml-auto md:pr-4 mt-2">
                <form action="{{ route('posts') }}" method="GET">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                        <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" name="search" class="focus:shadow-soft-primary-outline pl-8.75 text-sm ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="Search..." value="{{ request()->input('search') }}" />
                    </div>
                    <button class="hidden" type="submit">Search</button>
                </form>
                @if (request()->filled('search'))
                    <a href="{{ route('posts') }}" class="ml-4 text-sm text-gray-500 hover:text-gray-700">Reset Search</a>
                @endif
            </div>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 mb-2" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @elseif(session('unsuccess'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4 mb-2" role="alert">
                    <strong class="font-bold">Unsuccess!</strong>
                    <span class="block sm:inline">{{ session('unsuccess') }}</span>
                </div>
            @endif
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Posted</th>
                                <th class="pr-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="py-2 pl-2 pr-12 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div class="flex-shrink-0">
                                                <img src="{{ htmlentities($post->image) }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl object-cover" alt="user1" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-sm">{{ htmlentities($post->title) }}</h6>
                                                <p class="mb-0 leading-tight text-xs text-slate-400">{{ htmlentities($post->author->name) }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                        @if ($post->status == 'publish')
                                            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ htmlentities($post->status) }}</span>
                                        @elseif($post->status == 'draft')
                                            <span class="bg-gradient-to-tl from-red-600 to-pink-500 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ htmlentities($post->status) }}</span>
                                        @endif
                                    </td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-xs text-slate-400">{{ htmlentities($post->updated_at) }}</span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}"
                                            class="font-semibold leading-tight text-xs text-slate-400 text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent mr-4">
                                            Edit
                                        </a>
                                        <a href="{{ route('post.delete', ['id' => $post->id]) }}"
                                            class="font-semibold leading-tight text-xs text-slate-400 text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent"
                                            onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this post?')) document.getElementById('delete-form-{{ htmlentities($post->id) }}').submit();">
                                            Delete
                                        </a>
                                        <form id="delete-form-{{ htmlentities($post->id) }}"
                                            action="{{ route('post.delete', ['id' => $post->id]) }}" method="POST"
                                            style="display: none;">
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
                    {{-- Tombol navigasi awal --}}
                    @if ($currentPage > 1)
                        <a href="{{ route('posts', ['page' => 1]) }}">
                            <button title="First" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                                &lt;&lt;
                            </button>
                        </a>
                    @endif
                
                    {{-- Tombol navigasi sebelumnya --}}
                    @if ($currentPage > 1)
                        <a href="{{ route('posts', ['page' => $currentPage - 1]) }}">
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
                        <a href="{{ route('posts', ['page' => $currentPage - 2]) }}">
                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                                {{ $currentPage - 2 }}
                            </button>
                        </a>
                    @endif
                
                    {{-- Halaman sebelum halaman saat ini --}}
                    @if ($currentPage > 1)
                        <a href="{{ route('posts', ['page' => $currentPage - 1]) }}">
                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                                {{ $currentPage - 1 }}
                            </button>
                        </a>
                    @endif
                
                    {{-- Halaman saat ini --}}
                    <a href="{{ route('posts', ['page' => $currentPage]) }}">
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-blue-600 text-white">
                            {{ $currentPage }}
                        </button>
                    </a>
                
                    {{-- Halaman setelah halaman saat ini --}}
                    @if ($currentPage < $totalPages)
                        <a href="{{ route('posts', ['page' => $currentPage + 1]) }}">
                            <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100">
                                {{ $currentPage + 1 }}
                            </button>
                        </a>
                    @endif
                
                    {{-- Halaman setelah setelah halaman saat ini --}}
                    @if ($currentPage < $totalPages - 1)
                        <a href="{{ route('posts', ['page' => $currentPage + 2]) }}">
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
                        <a href="{{ route('posts', ['page' => $currentPage + 1]) }}">
                            <button title="Next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                                &gt;
                            </button>
                        </a>
                    @endif
                
                    {{-- Tombol navigasi akhir --}}
                    @if ($currentPage < $totalPages)
                        <a href="{{ route('posts', ['page' => $totalPages]) }}">
                            <button title="Last" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
                                &gt;&gt;
                            </button>
                        </a>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>

 @endsection