<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/linac-icon.png')}}" />
    <title>IA-Lab Dashboard</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{-- Vite Js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script> 
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/88c60bac4f.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    {{-- Charts --}}
    @if (request()->is('chart'))
    <script>
    var labels_filamen =  {{ Js::from($labels_filamen) }};
    var filamen =  {{ Js::from($filamen) }};
    var potensio =  {{ Js::from($potensio) }};
    var labels_optic =  {{ Js::from($labels_optic) }};
    var a_pemayar =  {{ Js::from($a_pemayar) }};
    var a_pemfokus =  {{ Js::from($a_pemfokus) }};
    var t_pemayar =  {{ Js::from($t_pemayar) }};
    var t_pemfokus =  {{ Js::from($t_pemfokus) }};
    var labels_vakum =  {{ Js::from($labels_vakum) }};
    var penning =  {{ Js::from($penning) }};
    var pirani =  {{ Js::from($pirani) }};
    var labels_dummy =  {{ Js::from($labels_dummy) }};
    var dummy =  {{ Js::from($dummy) }};
    </script>
    @endif
    <!-- Main Styling -->
    <link href="{{ asset('/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
    @livewireStyles
    @stack('css')
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
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
    <script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}" async></script>
    <!-- plugin for scrollbar  -->
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <!-- github button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- main script file  -->
    <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
    {{-- flowbit script --}}
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    {{-- switch-mode script --}}
    <script src="{{ asset('/assets/js/switch-mode.js') }}" async></script>
    {{-- script dashboard --}}
    <script src="{{ asset('assets/js/scriptdash.js') }}"></script>
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