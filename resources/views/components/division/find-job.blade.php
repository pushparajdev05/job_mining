@props(['jobs'])
<x-container>
    <x-list-heading>Find Jobs</x-list-heading>
    <div class="mt-3 space-y-5">
        @foreach ($jobs as $job)
            @if ($job['rating'] <3)
                <x-cards.job-long :job="$job"></x-cards.job-long>
            @endif
        @endforeach
    </div>
</x-container>
