@extends('layouts.dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white pt-6 px-6 pb-0">
          <h6>Video Pengoperasian</h6>
        </div>
        <div class="p-4 my-4">
          <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/jSgnWfbEx1A" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection