<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <link rel="icon" type="image/png" href="{{ asset('/img/linac-icon.webp')}}" />
    <title>IA-Lab Register</title>
    <meta name="description" content="Internet Accelerator Laboratory" />
    {{-- Vite Js --}}
    @vite(['resources/css/app.css'])
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/88c60bac4f.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    {{-- Styles --}}
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
  </head>
  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white z-990">
      <div class="w-16 h-16 border-4 border-dashed rounded-full animate-spin border-blue-600"></div>
    </div>
    <!-- Navbar -->
    <nav class="absolute top-0 z-30 flex flex-wrap items-center justify-between w-full px-4 py-2 mt-6 mb-4 shadow-none lg:flex-nowrap lg:justify-start">
      <div class="container flex items-center justify-between py-0 flex-wrap-inherit">
        <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-white lg:ml-0" href="{{ route('landing') }}">
          <span class="flex text-xl"><img src="{{ asset('/img/linac-icon-.webp')}}" alt="" class="w-6 h-6 mr-2 object-contain object-center" loading="lazy">IA-Lab</span>
        </a>
        <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
            <span bar1 class="w-5.5 rounded-xs duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar2 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
            <span bar3 class="w-5.5 rounded-xs mt-1.75 duration-350 relative my-0 mx-auto block h-px bg-white transition-all"></span>
          </span>
        </button>
        <div navbar-menu class="items-center flex-grow transition-all ease-soft duration-350 lg-max:bg-white lg-max:max-h-0 lg-max:overflow-hidden basis-full rounded-xl lg:flex lg:basis-auto">
          <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
            <li>
              <a class="flex items-center px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75" aria-current="page" href="{{ route('landing') }}">
                <i class="mr-1 fa-solid fa-house-chimney opacity-60"></i>
                Home
              </a>
            </li>
            <li>
              <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75" href="{{ route('news') }}">
                <i class="mr-1 fa-solid fa-newspaper opacity-60"></i>
                News
              </a>
            </li>
            <li>
              <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75" href="{{ route('about') }}">
                <i class="mr-1 fa-solid fa-circle-info opacity-60"></i>
                About Us
              </a>
            </li>
            <li>
              <a class="block px-4 py-2 mr-2 font-normal text-white transition-all duration-250 lg-max:opacity-0 lg-max:text-slate-700 ease-soft-in-out text-sm lg:px-2 lg:hover:text-white/75" href="{{ route('contact') }}">
                <i class="mr-1 fa-solid fa-headset opacity-60"></i>
                Contact Us
              </a>
            </li>
          </ul>
          <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
            <li>
              @if(auth()->check())
              <a href="{{ route('dashboard') }}" class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-gradient-to-tl from-blue-600 to-gray-100 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-white transition-all">Dashboard</a>
              @else
              <a href="{{ route('login') }}" class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-gradient-to-tl from-blue-600 to-gray-100 rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-white transition-all">Login</a>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="mt-0 bg-landing transition-all duration-200 ease-soft-in-out">
      <section class="min-h-50-screen">
        <div class="relative flex items-start pt-12 pb-48 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('img/linac-register.webp')">
          <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-custom to-gray-custom opacity-60"></span>
          <div class="container z-10">
            <div class="flex flex-wrap justify-center -mx-3">
              <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                  <h2 class="mt-4 mb-1 text-white">Welcome!</h2>
                <p class="text-white">Create an account to access IA-Lab Dashboard.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
            <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
              <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="px-6 py-3 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                  <h5 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-gray-custom to-gray-custom bg-clip-text">Register</h5>
                </div>
                <div class="flex-auto px-6 pb-6">
                  <form role="form text-left" action="{{ route('register.post') }}" method="post" class="user">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="username" id="username" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Username" aria-label="Username" aria-describedby="username-addon" />
                        @error('username')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="text" name="name" id="name" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Name" aria-label="Name" aria-describedby="name-addon" />
                        @error('name')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" id="email" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                        @error('email')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <input type="password" name="password" id="password" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-custom focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                        @error('password')
                        <span class="text-red-500 text-xs">{{ htmlentities($message) }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-custom to-gray-custom hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign up</button>
                    </div>
                    <p class="mt-4 mb-6 leading-normal text-sm text-black">Already have an account? <a href="{{ route('login') }}" class="relative z-10 font-semibold text-transparent bg-gradient-to-tl from-gray-custom to-gray-custom bg-clip-text">Sign in</a></p>
                </form>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="py-6">
        <div class="container">
          <div class="flex flex-wrap -mx-3">
            <div class="w-8/12 max-w-full px-3 mx-auto text-center flex-0">
              <p class="mb-0 text-black text-sm">
                Copyright ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Politeknik Teknologi Nuklir Indonesia
              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    </main>
  </body>
  <!-- plugin for scrollbar  -->
  <script src="assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- main script file  -->
  <script src="assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
  {{-- script --}}
  <script src="{{ asset('assets/js/script.js') }}"></script>
</html>
