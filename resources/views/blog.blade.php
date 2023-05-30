@extends('layouts.landing')

@section('content')
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="custom-section bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          IA-Lab Blog
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="bg-white text-gray-800">
          @foreach ($posts as $post)
          <div class="bg-gray-100 text-gray-900 mt-3">
            <div class="container grid grid-cols-12 mx-auto bg-gray-50">
              <div class="bg-no-repeat bg-cover bg-gray-50 col-span-full lg:col-span-4" style="background-image: url('{{ $post->image }}'); background-position: center center; background-blend-mode: multiply; background-size: cover;"></div>
              <div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                <div class="flex justify-start">
                  @if ($post->updated_at > now()->subDays(1))
                  <span class="px-2 py-1 text-xs rounded-full bg-blue-600 text-gray-50">New</span>
                  @endif
                </div>
                <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
                <p class="flex-1 pt-2">{{ $post->description }}</p>
                <a rel="noopener noreferrer" href="{{ route('post', $post->slug) }}" class="inline-flex items-center pt-2 pb-6 space-x-2 text-sm text-blue-600">
                  <span>Read more</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <div class="flex items-center justify-between pt-2">
                  <div class="flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-600">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="self-center text-sm">{{ $post->author->name }}</span>
                  </div>
                  <span class="text-xs">{{ $post->updated }}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="mt-6 flex justify-center space-x-1 text-gray-800">
          <a href="{{ route('blog', ['page' => max($currentPage - 1, 1)]) }}">
            <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
          </a>
            
          @for ($page = 1; $page <= $totalPages; $page++)
            <a href="{{ route('blog', ['page' => $page]) }}">
              <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm border rounded shadow-md bg-gray-50 border-gray-100 {{ $page == $currentPage ? 'bg-blue-600 text-white' : '' }}" title="Page {{ $page }}">{{ $page }}</button>
            </a>
          @endfor
            
          <a href="{{ route('blog', ['page' => min($currentPage + 1, $totalPages)]) }}">
            <button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow-md bg-gray-50 border-gray-100">
              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </a>
        </div>
      </div>
    </section>
    <section class="bg-landing py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12 justify-center">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 sm:grid-cols-2">
          <img class="object-cover w-full bg-gray-500 aspect-square" src="https://source.unsplash.com/random/300x300/?1">
          <img class="object-cover w-full bg-gray-500 aspect-square" src="https://source.unsplash.com/random/300x300/?2">
          <img class="object-cover w-full bg-gray-500 aspect-square" src="https://source.unsplash.com/random/300x300/?3">
          <img class="object-cover w-full bg-gray-500 aspect-square" src="https://source.unsplash.com/random/300x300/?4">
        </div>
      </div>
    </section>
@endsection