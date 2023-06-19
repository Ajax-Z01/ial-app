<!DOCTYPE html>
<html lang="en">
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/linac-icon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      IA-Lab | Internet Accelerator Laboratory 
    </title>
    <meta name="description" content="Simple landing page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    {{-- Styles --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white z-50">
      <div class="w-16 h-16 border-4 border-dashed rounded-full animate-spin border-blue-600"></div>
    </div>    
    <!--Nav-->
    @include('partials.headland')
    <!--Content-->
    @yield('content')
    <!--Footer-->
    @include('partials.footland')
    {{-- jQuery if you need it --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- plugin for scrollbar  -->
    <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <!-- main script file  -->
    <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') }}" async></script>
    {{-- script --}}
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
