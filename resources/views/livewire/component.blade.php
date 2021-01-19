<div>
    <div class="mt-8 mb-10">

        @if($updateMode)
            @include('livewire.' . $entity . '.edit')
        @elseif($createMode)
            @include('livewire.' . $entity . '.create')
        @else
            @include('livewire.' . $entity . '.index')
        @endif
    </div>
</div>
