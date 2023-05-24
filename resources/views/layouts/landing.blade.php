<!DOCTYPE html>
<html lang="en">
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('img/electron.png') }}" />
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
    <!--Nav-->
    @include('partials.headland')
    <!--Hero-->
    @yield('content')
    <!--Footer-->
    @include('partials.footland')
  </body>
  <!-- jQuery if you need it
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->
<script src="{{ asset('assets/js/script.js') }}"></script>
</html>
