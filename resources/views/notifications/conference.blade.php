<li class="relative mb-2">
  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent hover:bg-gray-200 hover:text-slate-700 lg:transition-colors px-4 duration-300" href="{{ route('video_conference') }}">
    <div class="flex py-1">
      <div class="hidden lg:inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
          <svg width="12px" height="12px" class="dark:text-white" fill="#000000" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <title>conference</title>
              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                  <g transform="translate(453.000000, 454.000000)">
                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class="color-background" d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/>
                  </g>
                </g>
              </g>
          </svg>
      </div>
      <div class="flex flex-col justify-center">
          <div class="flex flex-col justify-center">
              <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New Conference </span>"{{ substr(htmlentities($conference->title), 0, 10) }}..."</h6>
              <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock"></i>
              {{ htmlentities($conference->updated_at->diffForHumans()) }}
              </p>
          </div>
      </div>
    </div>
  </a>
</li>