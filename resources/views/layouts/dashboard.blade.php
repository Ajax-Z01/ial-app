<!DOCTYPE html>
<html lang="en">
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('/img/electron.png')}}" />
    <title>IA-Lab Dashboard</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>

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
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('partials.sidedash')
    @if (request()->is('profile'))
    @include('partials.headprofile')
    @yield('content')
    @include('partials.footprofile')
    @include('partials.setdash')
    @else
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      @include('partials.headdash')
      @yield('content')
      @include('partials.footdash')
      @include('partials.setdash')
    </main>
    @endif
  </body>
  <!-- plugin for charts  -->
  <script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
</html>