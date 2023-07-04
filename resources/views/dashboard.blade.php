@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  @if (Session::has('success'))
  <div class="pb-2 alert alert-success text-lime-500">
      <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
  </div>
  @endif
  @if (Auth::user()->type == 'admin')
  <!-- row 1 -->
  <div class="flex flex-wrap mb-6 -mx-3">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Users</p>
                <h5 class="mb-0 font-bold">
                  {{ htmlentities($totalUsers) }}
                  <span class="leading-normal text-sm font-weight-bolder text-lime-500">+{{ htmlentities($newUsersCount) }}</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-custom to-gray-custom">
                <i class="ni leading-none ni-single-02 text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Posts</p>
                <h5 class="mb-0 font-bold">
                  {{ htmlentities($totalPosts) }}
                  <span class="leading-normal text-lime-500 text-sm font-weight-bolder">+{{ htmlentities($newPostsCount) }}</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-custom to-gray-custom">
                <i class="ni leading-none ni-single-copy-04 text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card3 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Data</p>
                <h5 class="mb-0 font-bold">
                  {{ htmlentities($totalData) }}
                  <span class="leading-normal text-lime-500 text-sm font-weight-bolder">+{{ htmlentities($newDataCount) }}</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-custom to-gray-custom">
                <i class="ni leading-none ni-chart-bar-32 text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- card4 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Messages</p>
                <h5 class="mb-0 font-bold">
                  {{ htmlentities($totalMessages) }}
                  <span class="leading-normal text-lime-500 text-sm font-weight-bolder">+{{ htmlentities($newMessagesCount) }}</span>
                </h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-gray-custom to-gray-custom">
                <i class="ni leading-none ni-email-83 text-lg relative top-3.5 text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  <!-- row 2 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3 mb-6 md:mb-0 md:w-7/12 md:flex-none">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 md:w-1/2 md:flex-none">
              <div class="flex flex-col h-full">
                <p class="pt-2 mb-1 font-semibold">Built by Ajax-Z01</p>
                <h5 class="font-bold">IA-Lab Dashboard</h5>
                <p class="mb-12">The Internet Accelerator Laboratory offers comprehensive documentation on various topics, including accelerator technology, real-time data acquisition, and performance optimization methods.</p>
                {{-- <a class="mt-auto mb-0 font-semibold leading-normal text-sm group text-slate-500" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                </a> --}}
              </div>
            </div>
            <div class="max-w-full px-3 mt-12 ml-auto text-center md:mt-0 md:w-5/12 md:flex-none">
              <div class="h-full bg-gradient-to-tl from-gray-custom to-gray-custom rounded-xl">
                <img src="{{ asset('img/shapes/waves-white.svg') }}" class="absolute top-0 hidden w-1/2 h-full md:block" alt="waves" />
                <div class="relative flex items-center justify-center h-full">
                  <img class="relative z-20 w-full pt-0" src="{{asset('img/linac-icon-.webp') }}" alt="rocket" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full max-w-full px-3 md:w-5/12 md:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
        <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('{{asset("img/ivancik.jpg") }}')">
          <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-custom to-gray-custom opacity-80"></span>
          <div class="relative z-10 flex flex-col flex-auto h-full p-4">
            <h5 class="pt-2 mb-6 font-bold text-white">Internet Accelerator Laboratory</h5>
            <p class="text-white">Where innovation takes flight. Unleashing the power of speed and efficiency. Seize the opportunity for wealth creation. Be a pioneer in the digital evolution.</p>
            {{-- <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-sm" href="javascript:;">
              Read More
              <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
            </a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection