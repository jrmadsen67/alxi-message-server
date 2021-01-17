<div>
    <div class="mt-8">

        @if($updateMode)
            @include('livewire.countries.edit')
        @elseif($createMode)
            @include('livewire.countries.create')
        @else
            @include('livewire.countries.index')
        @endif
    </div>
</div>
