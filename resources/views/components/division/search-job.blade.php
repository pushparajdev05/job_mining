<x-container>
    <x-forms.form id="result" method="get" action="/result" class="hidden">
        <x-forms.button type="submit"></x-forms.button>
    </x-forms.form>
    <x-forms.fields label="Let's Find You A Great Job" name="search_job" class="items-center w-full max-w-2xl mx-auto" label_style="text-4xl font-medium mb-4" placeHolder="Search a Job" form="result"></x-forms.fields>
</x-container>
