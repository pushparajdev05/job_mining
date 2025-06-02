
<x-layout>
    <x-container class="space-y-5">
        <h1 class="text-center text-3xl font-medium mb-5">Result</h1>
        @foreach ($jobs as $job)
                <x-cards.job-long :job="$job"></x-cards.job-long>
        @endforeach
    </x-container>
</x-layout>
 <!-- #region -->
