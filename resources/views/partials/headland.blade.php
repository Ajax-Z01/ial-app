<nav id="header" class="fixed w-full z-30 top-0 text-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2 gradient" id="header2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{ route('landing') }}">
        <span class="md:text-4xl text-3xl pl-2 flex">
          <img id="icon" src="{{asset('img/linac-icon-.png') }}" alt="" class="md:w-10 md:h-10 md:mt-0 w-8 h-8 mt-1 mr-2">
          IA-Lab
        </span>
      </a>
    </div>
    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center p-1 text-black hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="toggleColour text-white md:text-xl inline-block py-2 px-4 no-underline
          @if (Request::is('/'))  font-bold 
          @else hover:text-gray-700 hover:text-underline
          @endif
          " href="{{ route('landing') }}">Home</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour text-white md:text-xl inline-block py-2 px-4 no-underline
          @if (Request::is('blog'))  font-bold 
          @else hover:text-gray-700 hover:text-underline
          @endif
          " href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour text-white md:text-xl inline-block py-2 px-4 no-underline
          @if (Request::is('about'))  font-bold 
          @else hover:text-gray-700 hover:text-underline
          @endif
          " href="{{ route('about') }}">About Us</a>
        </li>
        <li class="mr-3">
          <a class="toggleColour text-white md:text-xl inline-block py-2 px-4 no-underline
          @if (Request::is('contact'))  font-bold 
          @else hover:text-gray-700 hover:text-underline
          @endif
          " href="{{ route('contact') }}">Contact</a>
        </li>
      @if(auth()->check())
      </ul>
        <a href="{{ route('dashboard') }}" class="mx-auto lg:mx-0">
            <button id="navAction" class="bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out md:text-xl">
                Dashboard
            </button>
        </a>
      @else
        <li class="mr-3">
        <a class="toggleColour text-white md:text-xl inline-block py-2 px-4 no-underline
        @if (Request::is('register'))  font-bold 
        @else hover:text-gray-700 hover:text-underline
        @endif
        " href="{{ route('register') }}">Register</a>
      </li>
    </ul>
        <a href="{{ route('login') }}" class="mx-auto lg:mx-0">
            <button id="navAction" class="bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out md:text-xl">
                Login
            </button>
        </a>
      @endif
    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
<div class="pt-24">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <div class="parallax-layer1" style="transform: translateY(0);">
        <p class="uppercase tracking-loose w-full">Online Accelerator Experiment</p>
        <h1 class="my-4 text-5xl font-bold leading-tight">
          Internet Accelerator Laboratory
        </h1>
        <p class="leading-normal text-2xl mb-8">
          Internet-based education laboratory utilizing remote accelerated learning application methods.
        </p>
      </div>
    </div>
    <!--Right Col-->
    <div class="w-full md:w-3/5 py-3 text-center">
      <div class="parallax-container">
        <div class="parallax-layer2" style="transform: translateY(0);">
          <img class="parallax-bg w-full md:w-3/5 z-50 md:ml-60 mb-12" src="{{ asset('img/linac-icon-.png') }}" alt="Background Image">
        </div>
      </div>
    </div>
  </div>
</div>