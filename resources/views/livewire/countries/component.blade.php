<div>
    <div class="mt-8">

        @if($updateMode)
            @include('livewire.countries.edit')
        @else

            @include('livewire.countries.index')


        @endif
    </div>
</div>
