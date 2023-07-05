<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <link rel="icon" type="image/png" href="{{ asset('img/linac-icon.webp')}}" />
    <title>IA-Lab Reset Password</title>
    <meta name="description" content="Internet Accelerator Laboratory" />
    {{-- Vite Js --}}
    @vite(['resources/css/app.css'])
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/88c60bac4f.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    {{-- Styles --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  </head>
  <body class="m-0 font-sans antialiased font-normal bg-landing text-start text-base leading-default text-slate-500">
    <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white z-990">
      <div class="w-16 h-16 border-4 border-dashed rounded-full animate-spin border-blue-600"></div>
    </div>
    <div class="container sticky top-0 z-sticky">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
          <!-- Navbar -->
          <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
              <a class="py-2.375 text-sm mr-4 whitespace-nowrap font-bold text-gray-800 lg:ml-0" href="{{ route('landing') }}">
                <span class="flex text-xl"><img src="{{ asset('/img/linac-icon.webp')}}" alt="" class="w-6 h-6 mr-2 object-contain object-center" loading="lazy">IA-Lab</span>
              </a>
              <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                  <span bar1 class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                  <span bar2 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                  <span bar3 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                </span>
              </button>
              <div navbar-menu class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                  <li>
                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2" aria-current="page" href="{{ route('landing') }}">
                      <i class="mr-1 fa-solid fa-house-chimney opacity-60"></i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2" href="{{ route('news') }}">
                      <i class="mr-1 fa-solid fa-newspaper opacity-60"></i>
                      News
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2" href="{{ route('about') }}">
                      <i class="mr-1 fa-solid fa-circle-info opacity-60"></i>
                      About Us
                    </a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-slate-700 lg:px-2" href="{{ route('contact') }}">
                      <i class="mr-1 fa-solid fa-headset opacity-60"></i>
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                  <li>
                    <a href="{{ route('register') }}" class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-custom to-gray-custom rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-white transition-all">Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                <div class="container z-10">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                            <div class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                    <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-gray-custom to-gray-custom bg-clip-text">Reset Password</h3>
                                    @if (Session::has('status'))
                                        <div class="alert alert-success text-lime-500">
                                            <i class="fas fa-check-circle"></i> {{ Session::get('status') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-error text-red-500">
                                            <ul class="list-disc pl-5">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ htmlentities($error) }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <p class="mb-0  text-black">Enter your email and new password to reset your password</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <form role="form" action="{{ route('password.update') }}" method="post" class="user">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <label class="mb-2 ml-1 font-bold text-sm text-slate-700">Email</label>
                                        <div class="mb-4">
                                            <input type="email" name="email" id="email" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{ $email ?? old('email') }}" required autofocus />
                                        </div>
                                        <label class="mb-2 ml-1 font-bold text-sm text-slate-700">New Password</label>
                                        <div class="mb-4">
                                            <input type="password" name="password" id="password" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="New Password" aria-label="New Password" aria-describedby="password-addon" required />
                                        </div>
                                        <label class="mb-2 ml-1 font-bold text-sm text-slate-700">Confirm Password</label>
                                        <div class="mb-4">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-custom focus:outline-none focus:transition-shadow" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="password-addon" required />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-gray-custom to-gray-custom hover:scale-102 hover:shadow-soft-xs active:opacity-85">Reset Password</button>
                                        </div>
                                    </form>     
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                            <div class="absolute top-0 hidden w-2/3 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10" style="background-image: url('img/linac-login.webp')"><span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-custom to-gray-custom opacity-60"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-0">
      <div class="container">
        <div class="flex flex-wrap -mx-3">
          <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
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
  </body>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- main script file  -->
  <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.min.js') }}" async></script>
  {{-- script --}}
  <script src="{{ asset('assets/js/script.js') }}"></script>
</html>
