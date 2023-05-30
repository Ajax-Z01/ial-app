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
      <div class="p-5 mx-auto sm:p-10 md:p-16 bg-white text-gray-800">
        <div class="flex flex-col max-w-3xl mx-auto overflow-hidden rounded">
          <img src="/img/linac.png" alt="" class="w-full h-60 sm:h-96 bg-white">
          <div class="p-6 pb-12 m-4 mx-auto -mt-16 space-y-6 lg:max-w-2xl sm:px-10 sm:mx-12 lg:rounded-md bg-white">
            <div class="w-full mx-auto space-y-4 text-center">
              <h1 class="text-4xl font-bold leading-tight md:text-5xl">Linear Accelerator (LINAC)</h1>
              <p class="text-sm text-gray-600">by
                <a rel="noopener noreferrer" href="javascript:;" class="underline text-blue-600">
                  <span itemprop="name">Admin Official</span>
                </a>on
                <time datetime="2021-02-12 15:34:18-0200">May 29th 2023</time>
              </p>
            </div>
            <div class="text-gray-800">
              <p>A linear accelerator (LINAC) is a sophisticated device employed in various fields including medicine, research, and industry to produce high-velocity particle beams. Its primary function is to accelerate particles, such as electrons or ions, utilizing a sequence of lengthy linear accelerator tubes. As these particles traverse through the linear accelerator, they are subjected to radiofrequency resonators situated within the tubes, resulting in the particles gaining additional energy. This acceleration process is reiterated until the particles attain the desired energy level. The utilization of LINAC technology enables scientists, medical professionals, and industrial experts to explore a wide range of applications, from advanced cancer treatments and particle physics research to industrial material analysis and sterilization processes. By harnessing the power of high-speed particle beams, LINAC plays a vital role in pushing the boundaries of scientific discovery and technological innovation across diverse disciplines.</p>
            </div>
            <div class="pt-12 border-t border-gray-300">
              <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                <img src="/img/default-profile.png" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start bg-gray-500 border-gray-300">
                <div class="flex flex-col">
                  <h4 class="text-lg font-semibold">Admin Official</h4>
                  <p class="text-gray-600">Welcome to our website, where innovation and creativity converge in elegant design. We bring you harmonious layouts, intuitive navigation, and innovative features. Together, we will create a strong digital identity and make a positive impact for the future. Enjoy an unforgettable experience here!</p>
                </div>
              </div>
            </div>
          </div>
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