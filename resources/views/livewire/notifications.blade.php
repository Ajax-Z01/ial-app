<li class="relative flex items-center px-4">
    <p class="hidden transform-dropdown-show"></p>
    <a href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand @if (request()->is('profile') || request()->is('profile/*')) text-white @else text-slate-500 @endif text-nav-brand" dropdown-trigger aria-expanded="false">
      <i class="cursor-pointer fa fa-bell"></i>
    </a>
    <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-8 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
      <!-- add show class on dropdown open js -->
      @foreach ($notifications as $notification)
        @if ( Auth::user()->type == 'admin' )
          @if ($notification['model'] instanceof \App\Models\Post)
              @include('notifications.post', ['post' => $notification['model']])
          @elseif ($notification['model'] instanceof \App\Models\FormResponse)
              @include('notifications.message', ['message' => $notification['model']])
          @elseif ($notification['model'] instanceof \App\Models\Conference)
              @include('notifications.conference', ['conference' => $notification['model']])
          @elseif ($notification['model'] instanceof \App\Models\User)
              @include('notifications.user', ['user' => $notification['model']])
          @endif
        @elseif ( Auth::user()->type == 'user' )
          @if ($notification['model'] instanceof \App\Models\conference)
            @include('notifications.conference', ['conference' => $notification['model']])
          @endif
        @endif
      @endforeach
    </ul>
  </li>