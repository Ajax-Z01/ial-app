@extends('layouts.dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white pt-6 px-6 pb-0 flex items-center">
            <h6 class="text-xl font-bold">{{ $conferences->title }}</h6>
          </div>
          <div class="px-8 my-4">
            <div class="font-semibold">Description :</div>
            <div class="ml-4 mb-2">{{ $conferences->description }}</div>
            <div class="font-semibold">Date :</div>
            <div class="ml-4 mb-2" id="event-date">{{ $formattedDate }}</div>
            <div class="font-semibold">Time :</div>
            <div class="ml-4 mb-2" id="event-time">{{ $formattedTime }}</div>
            <div class="font-semibold">Location :</div>
            <div class="ml-4 mb-2">{{ $conferences->location }}</div>
            <div class="font-semibold">Contact Person :</div>
            <div class="ml-4 mb-2">{{ $conferences->admin->name }} ({{ $conferences->admin->email  }})</div>
            <div class="font-semibold">Link :</div>
            <div class="ml-4 mb-2">
              <a class="text-blue-500 font-semibold hover:underline" href="{{ $conferences->link }}" target="_blank">Click Here to Join</a>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection