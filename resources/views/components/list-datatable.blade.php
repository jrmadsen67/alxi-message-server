@props(['withPagination' => false])

<div class="hidden sm:block">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col mt-2">
            <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                {{ $slot }}

                @if($withPagination)
                <x-list-pagination/>
                @endif
            </div>
        </div>
    </div>
</div>
