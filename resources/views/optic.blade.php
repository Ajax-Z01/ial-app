@extends('layouts.dashboard')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <!-- cards 1 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <div class="flex items-center justify-end mr-2">
            <span id="liveIndicator" class="mr-2 text-red-500">
              <i class="fas fa-circle"></i>
            </span>
            <span class="text-gray-500">Live</span>
          </div>
          <h6>Data Akuisisi Sistem Optic (Arus Pemayar)</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chartArusPemayar" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards 2 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Optic (Arus Pemfokus)</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chartArusPemfokus" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards 3 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Optic (Tegangan Pemayar)</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chartTeganganPemayar" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards 4 -->
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
      <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
          <h6>Data Akuisisi Sistem Optic (Tegangan Pemfokus)</h6>
        </div>
        <div class="flex-auto p-4">
          <div>
            <canvas id="chartTeganganPemfokus" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection