<!-- sidenav  -->
<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block pl-4 pr-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;">
        <img src="{{asset('img/linac-icon.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8 mb-2" alt="main_logo" />
        <span class="ml-1 text-xl font-semibold transition-all duration-200 ease-nav-brand">IA-Lab Dashboard</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-auto grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        {{-- tab dashboard --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors
          @if (Request::is('dashboard')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand @endif" href="{{ route('dashboard') }}">
            <div class="@if (Request::is('dashboard')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>dashboard</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="opacity-60 @if (Request::is('dashboard')) @else fill-slate-800 @endif"
                          d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                        ></path>
                        <path class="@if (Request::is('dashboard')) @else fill-slate-800 @endif"
                          d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                        ></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>
        {{-- tab chart filament --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('filamen')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand  @endif" href="{{ route('filamen') }}">
            <div class="@if (Request::is('filamen')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" class="dark:text-white" fill="#000000" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <title>filament</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(153.000000, 2.000000)">
                        <path class="@if (Request::is('filamen')) @else fill-slate-700 @endif" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Filament Chart</span>
          </a>
        </li>
        {{-- tab chart optic --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('optic')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand  @endif" href="{{ route('optic') }}">
            <div class="@if (Request::is('optic')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" class="dark:text-white" fill="#000000" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <title>optic</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(153.000000, 2.000000)">
                        <path class="@if (Request::is('optic')) @else fill-slate-700 @endif" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Optic Chart</span>
          </a>
        </li>
        {{-- tab chart vakum --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('vakum')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand  @endif" href="{{ route('vakum') }}">
            <div class="@if (Request::is('vakum')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" class="dark:text-white" fill="#000000" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <title>vakum</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(153.000000, 2.000000)">
                        <path class="@if (Request::is('vakum')) @else fill-slate-700 @endif" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Vakum Chart</span>
          </a>
        </li>
        {{-- tab video --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('video')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand  @endif" href="{{ route('video') }}">
            <div class="@if (Request::is('video')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" class="dark:text-white" fill="#000000" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <title>video</title>
                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(153.000000, 2.000000)">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class="@if (Request::is('video')) @else fill-slate-700 @endif" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Video</span>
          </a>
        </li>
        @if (Auth::user()->type == 'admin')
        {{-- tab admin --}}
        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Admin pages</h6>
        </li>
        {{-- tab posts --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('posts')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand  @endif" href="{{ route('posts') }}">
            <div class=" @if (Request::is('posts')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>posts</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="opacity-60 @if (Request::is('posts')) @else fill-slate-800 @endif" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                        <path class="@if (Request::is('posts')) @else fill-slate-800  @endif" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Posts</span>
          </a>
        </li>
        {{-- tab users --}}
        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors @if (Request::is('users')) shadow-soft-xl ease-nav-brand rounded-lg bg-white font-semibold text-slate-700 @else ease-nav-brand @endif" href="{{ route('users') }}">
            <div class="@if (Request::is('users')) bg-gradient-to-tl from-gray-custom to-gray-custom @endif shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <title>user-check</title>
                <!--! Font Awesome Pro 6.4.0 by @ fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1870.000000, -591.000000)" fill="FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(154.000000, 300.000000)">
                        <path class="@if (Request::is('users')) @else fill-slate-800 @endif" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Users</span>
          </a>
        </li>
        @endif

        {{-- switch mode --}}
        {{-- <li class="mt-0.5 w-full">
          <p class="py-2.7 text-sm my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors ease-nav-brand" href="">
            <button id="darkModeButton" class="bg-gray-300 dark:bg-gray-800 rounded-full w-12 h-6 flex items-center p-1 transition-colors duration-300 focus:outline-none">
              <div id="darkModeIcon" class="bg-white dark:bg-gray-700 rounded-full w-4 h-4 shadow-md transform transition-transform duration-300"></div>
            </button>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Switch Mode</span>
          </p>
        </li> --}}
      </ul>
    </div>
  </nav>
  </aside>
  <!-- end sidenav -->