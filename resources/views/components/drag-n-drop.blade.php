<div x-data="{ files: null }"
    @dragover.prevent="$el.classList.add('border-rose-600', 'bg-rose-50')"
    @dragleave.prevent="$el.classList.remove('border-rose-600', 'bg-rose-50')"
    @drop.prevent="files = $event.dataTransfer.files; $el.classList.remove('border-rose-600'); document.querySelector('#file').files = files; document.querySelector('#uploadForm').submit();"
    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10 transition ease-in-out duration-150">
    <div class="text-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="mx-auto h-12 w-12 text-gray-300">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12-3-3m0 0-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
        </svg>
        <div class="mt-4 flex text-sm leading-6 text-gray-600">
            <label for="file"
                class="relative cursor-pointer rounded-md bg-white font-semibold text-rose-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-rose-600 focus-within:ring-offset-2 hover:text-rose-500">
                <span>Upload a contract</span>
                <input id="file" name="file" type="file" class="sr-only"
                    @change="files = $event.target.files">
            </label>
            <p class="pl-1">or drag and drop</p>
        </div>
        <p class="text-xs leading-5 text-gray-600">PDF up to 5MB</p>
    </div>
</div>
