<li class="overflow-hidden rounded-xl border border-gray-200">
    <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
        <img src="{{ asset('img/pdf-logo.png') }}"
            alt="pdf"
            class="h-12 w-12 flex-none rounded-lg bg-white p-1 object-cover ring-1 ring-gray-900/10"
        >
        <div class="text-sm font-medium leading-6 text-gray-900">{{ $file->name }}</div>
        <div x-cloak x-data="{ open: false }" class="relative ml-auto">
            <button @click="open = ! open" type="button"
                class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500"
                id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open options</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path
                        d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z" />
                </svg>
            </button>

            <div x-show="open" @click.outside="open = false"
                class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                role="menu" aria-orientation="vertical"
                aria-labelledby="options-menu-0-button" tabindex="-1">
                <a href="{{ route('files.download', $file) }}" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-50"
                    role="menuitem" tabindex="-1" id="options-menu-0-item-0" download>Download<span
                        class="sr-only">, Tuple</span></a>
            </div>
        </div>
    </div>
    <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
        <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Uploaded</dt>
            <dd class="text-gray-700"><time datetime="2022-12-13">{{ $file->created_at->diffForHumans() }}</time>
            </dd>
        </div>
    </dl>
</li>
