{{-- {{ dd($jobs) }} --}}
<x-layout>
    <x-division.search-job></x-division.search-job>
    <x-division.top-job :jobs="$jobs"></x-division.top-job>
    <x-division.tags :tags="$tags"></x-division.tags>
    <x-division.find-job :jobs="$jobs"></x-division.find-job>
</x-layout>
