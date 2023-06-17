<li class="relative mb-2">
  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent hover:bg-gray-200 hover:text-slate-700 lg:transition-colors px-4 duration-300" href="{{ route('users') }}">
    <div class="flex py-1">
      <div class="my-auto">
        <img src="{{ $user->profile_image }}" class="hidden lg:inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
      </div>
      <div class="flex flex-col justify-center">
          <div class="flex flex-col justify-center">
              <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">{{ substr($user->username, 0, 12) }} {{ $notification->content }}</span></h6>
              <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock"></i>
              {{ $user->updated_at->diffForHumans() }}
              </p>
          </div>
      </div>
    </div>
  </a>
</li>