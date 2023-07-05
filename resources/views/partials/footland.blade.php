<!-- Change the colour #f8fafc to match the previous section colour -->
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
      <g class="wave" fill="#f8fafc">
        <path
          d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
        ></path>
      </g>
      <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
        <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
          <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"
          ></path>
          <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
        </g>
      </g>
    </g>
  </g>
</svg>
<section class="container mx-auto text-center py-6 mb-12">
  <h2 class="w-full my-2 text-4xl font-bold leading-tight text-center text-white">
    Dashboard IA-Lab
  </h2>
  <div class="w-full mb-4">
    <div class="h-1 mx-auto bg-white w-3/4 opacity-25 my-0 py-0 rounded-t"></div>
  </div>
  @if(auth()->check())
  <h3 class="my-4 text-2xl leading-tight">
    Welcome, {{ auth()->user()->name }}!
  </h3>
  <a href="{{ route('dashboard') }}">
    <button class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      Dashboard
    </button>
  </a>
  @else
  <h3 class="my-4 text-2xl leading-tight">
    Sign Up Now to Access the Acquisition System Data!
  </h3>
  <a href="{{ route('register') }}">
    <button class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      Sign Up!
    </button>
  </a>
  @endif
</section>
<!--Footer-->
<footer class="bg-white shadow dark:bg-gray-900">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
      <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
        <img src="{{asset('img/linac-icon.webp') }}" class="h-8 mr-3" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900 dark:text-white">IA-Lab</span>
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-md font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
        <li>
          <a href="{{ route('news') }}" class="mr-4 hover:underline md:mr-6 ">News</a>
        </li>
        <li>
          <a href="{{ route('news') }}" class="mr-4 hover:underline md:mr-6 ">About us</a>
        </li>
        <li>
          <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
        </li>
      </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://polteknuklir.ac.id" class="hover:underline">Politeknik Teknologi Nuklir Indonesia</a>. All Rights Reserved.</span>
  </div>
  <button onclick="scrollToTop()" class="scroll-to-top fixed bottom-8 right-8 rounded-full p-0 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 512 512"><path fill="#253f5b" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM385 231c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-71-71V376c0 13.3-10.7 24-24 24s-24-10.7-24-24V193.9l-71 71c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L239 119c9.4-9.4 24.6-9.4 33.9 0L385 231z"/></svg>
  </button>
  <script>
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>
</footer>

