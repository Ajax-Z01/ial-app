@extends('layouts.dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white pt-6 px-6 pb-0 flex items-center">
            <h6 class="text-xl font-bold">Conference</h6>
          </div>
          <form class="px-8 my-4" action="{{ route('conference.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
            <div class="font-semibold">Title :</div>
            <div class="ml-4 mb-2">
              <input type="text" name="title" id="title" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ old('title', $conferences->title) }}" aria-describedby="title-addon" />
                @error('title')
                    <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                @enderror
            </div>
            <div class="font-semibold">Description :</div>
            <div class="ml-4 mb-2">
              <textarea name="description" id="description" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" rows="4">{{ old('description', $conferences->description) }}</textarea>
              @error('description')
                  <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
              @enderror
            </div>
            <div class="font-semibold">Date :</div>
            <div class="ml-4 mb-2">
              <input type="text" id="date" name="date" class="w-full rounded-md" value="{{ old('date', $formattedDate) }}">
              @error('date')
                  <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
              @enderror
            </div>
            <div class="font-semibold">Time :</div>
            <div class="ml-4 mb-2">
              <input type="text" id="time" name="time" class="w-full rounded-md" value="{{ old('time', $formattedTime) }}">
              @error('time')
                  <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
              @enderror
            </div>
            <div class="font-semibold">Location :</div>
            <div class="ml-4 mb-2">
              <input type="text" name="location" id="location" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ old('location', $conferences->location) }}" aria-describedby="location-addon" />
                @error('location')
                    <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                @enderror
            </div>
            <div class="font-semibold">Link :</div>
            <div class="ml-4 mb-2">
              <input type="text" name="link" id="link" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="{{ old('link', $conferences->link) }}" aria-describedby="link-addon" />
                @error('link')
                    <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
              <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 my-4 rounded-md">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection