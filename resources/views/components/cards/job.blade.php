@props(["job"])
@php
    $tags = $job->tags;
@endphp
<div class="flex flex-col items-center bg-gray-600/25 rounded-lg border border-gray-50/10 hover:border-border transition duration-300 group space-y-4 py-4 px-5">
    <div class="flex justify-between w-full">
        <span class="italic self-start text-xs opacity-50">Rating - &#9733; {{ $job->rating }}</span>
        <span class="italic self-start text-xs opacity-80">{{ $job->employer->name }}</span>
    </div>
    <div class="flex flex-col space-y-4 items-center w-full h-full justify-between">
    <a href="{{ url('/jobprofile/'. $job->id) }}" class="text-2xl font-medium group-hover:text-border transition duration-300 text-center">{{ $job->title }}</a>
    <span class="text-sm">{{ $job->schedule }} - From {{ $job->salary }}</span>
    <div class="flex items-center justify-between w-full">
        <div class="flex space-x-2">
            @foreach ($tags as $tag )
                <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">{{ $tag->name }}</x-cards.tag>
            @endforeach
        </div>
        <div>
            <x-img src="http://picsum.photos/seed/{{rand(0,100000)}}/100/100" class="rounded-md cursor-pointer"></x-img>
        </div>
    </div>
</div>
</div>
