<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
      <nav>
        <!-- breadcrumb -->
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
          <li class="leading-normal text-sm">
            <a class="opacity-50 text-slate-700" href="javascript:;">IA-Lab Dashboard</a>
          </li>
          <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">
          @if (request()->is('dashboard'))
            Dashboard
          @elseif (request()->is('posts'))
            Posts
          @elseif (request()->is('users'))
            Users
          @elseif (request()->is('messages'))
            Messages
          @elseif (request()->is('profile'))
            Profile
          @elseif (request()->is('filamen'))
            Filamen Chart
          @elseif (request()->is('optic'))
            Optic Chart
          @elseif (request()->is('vakum'))
            Vakum Chart
          @elseif (request()->is('video'))
            Video
          @elseif (request()->is('video-conference'))
            Conference
          @elseif (request()->is('conference'))
            Conference
          @else Admin Page
          @endif
          </li>
        </ol>
        <h4 class="mb-0 font-bold capitalize">
          @if (request()->is('dashboard'))
            Dashboard
          @elseif (request()->is('chart')) 
            Chart
          @elseif (request()->is('posts'))
            Posts
          @elseif (request()->is('users'))
            Users
          @elseif (request()->is('messages'))
            Messages
          @elseif (request()->is('profile'))
            Profile
          @elseif (request()->is('filamen'))
            Filamen Chart
          @elseif (request()->is('optic'))
            Optic Chart
          @elseif (request()->is('vakum'))
            Vakum Chart
          @elseif (request()->is('video'))
            Video
          @elseif (request()->is('video-conference'))
            Conference
          @elseif (request()->is('conference'))
            Conference
          @else Admin Page
          @endif
        </h4>
      </nav>

      <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <div class="flex items-center md:ml-auto md:pr-4">
        </div>
        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          {{-- settings --}}
          {{-- <li class="flex items-center px-4">
            <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
              <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
              <!-- fixed-plugin-button-nav  -->
            </a>
          </li> --}}
          @if (Auth::user()->type == 'admin')
          <!-- notifications -->
          <li class="relative flex items-center px-4">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
              <i class="cursor-pointer fa fa-bell"></i>
            </a>
            <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-8 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
              <!-- add show class on dropdown open js -->
              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
                    <div class="my-auto">
                      <img src="{{asset('img/team-2.jpg') }}" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                      <p class="mb-0 leading-tight text-xs text-slate-400">
                        <i class="mr-1 fa fa-clock"></i>
                        13 minutes ago
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          @endif
          {{-- account dropdown --}}
          <li class="relative flex items-center pr-2">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block px-4 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500" dropdown-trigger aria-expanded="false">
              <i class="fa fa-user sm:mr-1"></i>
              <span class="hidden sm:inline">{{ Auth::user()->username }}</span>
            </a>
            <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-14 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
              <!-- add show class on dropdown open js -->
              <li id="profileItem" class="py-2 lg:ease-soft clear-both flex w-full whitespace-nowrap border-0 bg-white px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 hover:bg-gray-200/80 lg:transition-colors lg:duration-300 mb-1">
                <a href="{{ route('profile') }}" class="flex items-center w-full justify-center"> <!-- Menyesuaikan pengaturan layout -->
                  <svg class="mr-2" width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>profile</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(1.000000, 0.000000)">
                            <path class="opacity-60 @if (Request::is('profile')) @else fill-slate-800  @endif" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                            <path class="@if (Request::is('profile')) @else fill-slate-800  @endif" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                            <path class="@if (Request::is('profile')) @else fill-slate-800  @endif" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                </a>
              </li>
              <li id="logoutItem" class="py-2 lg:ease-soft clear-both flex w-full whitespace-nowrap border-0 bg-white px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 hover:bg-gray-200/80 lg:transition-colors lg:duration-300">
                <a href="{{ route('logout') }}" class="flex items-center w-full justify-center"> <!-- Menyesuaikan pengaturan layout -->
                  <svg class="mr-2" width="12px" height="12px" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <title>logout</title>
                    <path class="fill-slate-800" d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                  </svg>
                  <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                </a>
              </li>              
            </ul>
          </li>
          <li class="flex items-center pl-4 xl:hidden">
            <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
              <div class="w-4.5 overflow-hidden">
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- end Navbar -->