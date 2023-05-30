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
          IA-Lab
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full xl:w-1/2 sm:w-1/2 mx-auto mt-12 my-4">
            <img class="w-full" src="/img/rf-linac.jpg">
          </div>
          <div class="w-full md:w-1/2 sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                IA-Lab Concept
              </h3>
              <p class="text-gray-600 mb-8">
                IA-Lab (Internet Accelerator Laboratory) is an innovative and cutting-edge educational facility that harnesses the power of the internet to provide remote accelerated learning experiences. It operates in alignment with the Teaching Laboratory program, offering students a unique and immersive educational environment. IA-Lab leverages advanced technologies to deliver live video webcasting sessions, allowing students to actively participate in interactive lessons from anywhere in the world. With its state-of-the-art smart Classroom, IA-Lab creates a dynamic and engaging learning atmosphere, enabling students to collaborate, exchange ideas, and explore subjects with the guidance of expert instructors. By combining the convenience of online education with the effectiveness of accelerated learning methods, IA-Lab revolutionizes the way education is accessed and experienced, breaking down geographical barriers and opening up new opportunities for students to thrive in the digital era.
              </p>
              <div class="flex items-center justify-start">
                <a href="{{ route('concept') }}">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Read more
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Linear Accelerator (LINAC)
            </h3>
            <p class="text-gray-600 mb-8">A linear accelerator (LINAC) is a sophisticated device employed in various fields including medicine, research, and industry to produce high-velocity particle beams. Its primary function is to accelerate particles, such as electrons or ions, utilizing a sequence of lengthy linear accelerator tubes. As these particles traverse through the linear accelerator, they are subjected to radiofrequency resonators situated within the tubes, resulting in the particles gaining additional energy. This acceleration process is reiterated until the particles attain the desired energy level. The utilization of LINAC technology enables scientists, medical professionals, and industrial experts to explore a wide range of applications, from advanced cancer treatments and particle physics research to industrial material analysis and sterilization processes. By harnessing the power of high-speed particle beams, LINAC plays a vital role in pushing the boundaries of scientific discovery and technological innovation across diverse disciplines.</p>
            <div class="flex items-center justify-start">
              <a href="{{ route('linac') }}">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Read more
                </button>
              </a>
            </div>
          </div>
          <div class="w-full sm:w-1/2 mx-auto my-4">
            <img class="w-full" src="/img/linac.png">
          </div>
        </div>
      </div>
    </section>
    <section class="bg-landing py-8">
      <div class="container mx-auto flex flex-wrap py-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Article
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @foreach ($posts as $post)
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="{{ route('post', $post->slug) }}" class="flex flex-wrap no-underline hover:no-underline">
              <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-60 object-cover object-center">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                {{ $post->updated }}
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                {{ $post->title }}
              </div>
              <p class="text-gray-800 text-base px-6 mb-2">
                {{ $post->description }}...
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <a href="{{ route('post', $post->slug) }}">
                <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                  Detail
                </button>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
@endsection