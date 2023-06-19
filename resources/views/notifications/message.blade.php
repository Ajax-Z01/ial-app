<li class="relative mb-2">
  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent hover:bg-gray-200 hover:text-slate-700 lg:transition-colors px-4 duration-300" href="{{ route('messages') }}">
    <div class="flex py-1">
      <div class="hidden lg:inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
          <svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <title>messages</title>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                  <g transform="translate(453.000000, 454.000000)">
                      <path class="color-background" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                  </g>
                </g>
              </g>
            </g>
          </svg>
      </div>
      <div class="flex flex-col justify-center">
          <div class="flex flex-col justify-center">
              <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New Message</span> from {{ substr(htmlentities($message->full_name), 0, 10) }}</h6>
              <p class="mb-0 leading-tight text-xs text-slate-400">
                <i class="mr-1 fa fa-clock"></i>
              {{ htmlentities($message->updated_at->diffForHumans()) }}
              </p>
          </div>
      </div>
    </div>
  </a>
</li>
