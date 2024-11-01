<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Files') }}
        </h2>
    </x-slot>

    <div x-data class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-errors />

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="mb-12">
                        <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
                            @forelse($files as $file)
                                <x-file-card :file=$file />
                            @empty
                                {{ __('No files yet.') }}
                            @endforelse
                        </ul>
                    </section>

                    <div>
                        <form
                            id="uploadForm"
                            action="{{ route('files.store') }}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            <x-drag-n-drop />
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4" @click.prevent="document.querySelector('#uploadForm').submit()">
                    Upload
                </x-primary-button>
            </div>
        </div>

    </div>
</x-app-layout>
