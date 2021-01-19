<div>
    <div class="mt-8 mb-10">

        @if($updateMode)
            @include('livewire.networks.edit')
        @elseif($createMode)
            @include('livewire.networks.create')
        @else
            @include('livewire.networks.index')
        @endif
    </div>
</div>
