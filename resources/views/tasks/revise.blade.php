<x-common.main>

    <x-slot name="header">
        <x-common.side-bar>
        </x-common.side-bar>
    </x-slot>
    
    <x-revise :task="$task" :userLists="$userLists">
    </x-revise>
    
</x-common.main>   
