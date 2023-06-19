@extends('layouts.dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white pt-6 px-6 pb-0">
          <h6>Form Contact Admin</h6>
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
        <div class="p-4 my-4">
          <form class="flex flex-col py-6 space-y-6 md:py-0 md:px-6 ng-untouched ng-pristine ng-valid" method="post" action="{{ route('contact.submit') }}">
            @csrf
            @method('post')
            <input type="hidden" name="full_name" value="{{ Auth::user()->name }}">
            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
            <label class="block mb-2 text-sm text-gray-600" for="message">Message</label>
            <textarea class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="message" name="message" rows="5" placeholder="Type your message here" required></textarea>
            @error('message')
                <span class="text-red-500 text-sm">{{ htmlentities($message) }}</span>
            @enderror
            <div class="flex justify-end">
              <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600" type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection