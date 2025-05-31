@props(["jobs"=>[]])
{{-- {{ dd($jobs) }} --}}
<x-container>
    <x-list-heading>Top Jobs</x-list-heading>
    <div class="grid lg:grid-cols-3 gap-8 mt-3">
        @foreach ($jobs as $job )
            @if ($job["rating"] >= 3)
                <x-cards.job :job="$job"></x-cards.job>
            @endif
        @endforeach
    </div>
</x-container>
