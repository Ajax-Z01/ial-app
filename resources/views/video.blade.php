@extends('layouts.dashboard')

@section('content')
  <!-- cards row 4 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Dummy</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chartDummy" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection