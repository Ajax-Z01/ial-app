<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <link rel="icon" type="image/png" href="{{ asset('img/linac-icon.png')}}" />
    <title>IA-Lab Dashboard</title>
    {{-- Vite Js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- flatpickr --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- Styles --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/88c60bac4f.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    @livewireStyles
    @stack('css')
  </head>
  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white z-990">
      <div class="w-16 h-16 border-4 border-dashed rounded-full animate-spin border-blue-600"></div>
    </div>    
    @include('partials.sidedash')
    @if (request()->is('profile') || request()->is('profile/*'))
    @include('partials.headprofile')
    @yield('content')
    @include('partials.footprofile')
    @else
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      @include('partials.headdash')
      @yield('content')
      @include('partials.footdash')
    </main>
    @endif
    <!-- Load Livewire JS -->
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- plugin for charts  -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
    <!-- plugin for scrollbar  -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <!-- github button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- main script file  -->
    <script src="{{ asset('assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
    {{-- flowbit script --}}
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    {{-- switch-mode script --}}
    <script src="{{ asset('assets/js/switch-mode.js') }}" async></script>
    {{-- flatpickr script --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{-- tinimce script --}}
    <script src="{{ asset('/assets/js/tinymce/tinymce.min.js') }}"></script>
    {{-- script --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- chart script --}}
    @if (request()->is('filamen'))
    @livewire('real-time-filamen')
    @elseif (request()->is('optic'))
    @livewire('real-time-optic')
    @elseif (request()->is('vakum'))
    @livewire('real-time-vakum')
    @else
    @endif
    @livewireScripts
    @stack('js')
  </body>
  </html>