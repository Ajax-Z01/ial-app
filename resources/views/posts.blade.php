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
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Title</th>
                  <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Description</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                  <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Posted</th>
                  <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($posts as $post)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div>
                        <img src="{{ asset('img/default-post.png') }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 leading-normal text-sm">{{ $post->title }}</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">{{ $post->author->name }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mx-12 mb-0 font-semibold leading-tight text-xs">{{ $post->subtitle }}</p>
                  </td>
                  <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                    @if ($post->status == 'publish')
                    <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $post->status }}</span>
                    @elseif($post->status == 'draft')
                    <span class="bg-gradient-to-tl from-red-600 to-pink-500 px-2 text-xs rounded-1.8 py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $post->status }}</span>
                    @endif
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="font-semibold leading-tight text-xs text-slate-400">{{ $post->updated_at }}</span>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="font-semibold leading-tight text-xs text-slate-400  text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent"> Edit </a>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="font-semibold leading-tight text-xs text-slate-400  text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent"> Delete </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection