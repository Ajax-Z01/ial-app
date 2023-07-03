<tr>
    <td class="py-2 pl-2 pr-12 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <div class="flex px-2 py-1">
            <div class="flex flex-col justify-center">
                <h6 class="mb-0 leading-normal text-sm">Message Notification</h6>
            </div>
        </div>
    </td>
    <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
        <div class="flex flex-col justify-center">
            <h6 class="mb-0 leading-normal text-sm">{{ htmlentities($notification->content) }}</h6>
        </div>
    </td>
    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <span class="font-semibold leading-tight text-xs text-slate-400">{{ htmlentities($notification->updated_at->diffForHumans()) }}</span>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <a href="{{ route('messages') }}"
            class="font-semibold leading-tight text-xs text-slate-400 text-center align-middle transition-all bg-transparent shadow-none cursor-pointer border-gray-300 ease-soft-in hover:scale-102 active:shadow-soft-xs hover:border-gray-300 active:bg-gray-600 active:hover:text-gray-800 hover:text-gray-800 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent mr-4">
            Detail
        </a>
    </td>
  </tr>