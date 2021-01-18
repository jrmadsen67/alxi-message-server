@props(['title'])

<h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
    <span class="ml-2">{{ $title }}</span>
    <button wire:click="create"
            class="ml-16 bg-green-500 text-gray-100 rounded hover:bg-green-400 px-3 py-1 text-xs focus:outline-none">+ Add</button>
</h2>
