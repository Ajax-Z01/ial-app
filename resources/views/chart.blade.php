@extends('layouts.dashboard')

@section('content')
<!-- cards -->
<div class="w-full px-6 py-6 mx-auto">
  @if (Session::has('success'))
  <div class="pb-2 alert alert-success text-fuchsia-500">
      <i class="fas fa-check-circle"></i> {{ Session::get('success') }}
  </div>
  @endif
  <!-- cards row 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Arus Filamen</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chart-filamen" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards row 2 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Optik</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chart-optic" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards row 3 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Vakum</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chart-vakum" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards row 4 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Dummy</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chart-dummy" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection