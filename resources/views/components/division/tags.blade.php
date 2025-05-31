@props(['tags'=>[]])
<x-container>
    <x-list-heading>Tags</x-list-heading>
    <div class="flex flex-wrap space-x-7 mt-3">
        @foreach ($tags as $tag )
            <x-cards.tag class="py px-2 h-fit mb-4">{{ $tag->name }}</x-cards.tag>
        @endforeach
    </div>
</x-container>
