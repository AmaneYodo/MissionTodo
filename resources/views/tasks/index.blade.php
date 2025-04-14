<x-common.main>

    <x-slot name="header">
        <x-common.side-bar>
        </x-common.side-bar>
    </x-slot>

    @if(!isset($checked) && !isset($deadline) && !isset($listId))
        <x-all-group :tasks="$tasks">
        </x-all-group>
    @endif

    @if($checked)
        <x-checked :tasks="$tasks" :checked="$checked">
        </x-checked>
    @endif

    @if($deadline)
        <x-deadline :tasks="$tasks">
        </x-deadline>
    @endif

    @if($listId)
        <x-list-group :tasks="$tasks">
        </x-list-group>
    @endif

</x-common.main>

