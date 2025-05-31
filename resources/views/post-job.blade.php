<x-layout>
    <x-container>
        <h1 class="text-center text-3xl my font-medium">Post a Job</h1>
        <x-forms.form action="/post-job" method="post" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @php
                $style="w-full max-w-[50rem] space-y-2";
            @endphp
            <x-forms.fields label="Title" name="title" class="{{ $style }}" placeholder="Title of the Job"></x-forms.fields>
            <x-forms.fields label="Salary" name="salary" class="{{ $style }}" placeholder="Eg. $60,000"></x-forms.fields>
            <x-forms.fields type="number" label="Rating" name="rating" class="{{ $style }}" placeholder="Eg. 4.3 (out of 5)"></x-forms.fields>
            <x-forms.select label="Location" name="location" class="{{ $style }}" :values="['On-Site','Remote','Hybrid']"></x-forms.select>
            <x-forms.select label="Schedule" name="schedule" class="{{ $style }}" :values="['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift']"></x-forms.select>
            <x-forms.fields label="URL" name="url" class="{{ $style }}" placeholder="Eg. https://www.abc.com/company/job"></x-forms.fields>

            <div class="border-b border-gray-100/30 w-full max-w-[52rem] mt-2"></div>

            <x-forms.fields label="Tags (Comma Seperated)" name="tags" class="{{ $style }}" placeholder="Eg. Frontend, Backend, Web"></x-forms.fields>
            <x-forms.button class="bg-blue-600 text-lg font-medium hover:bg-blue-500/90 py-2 px-3 rounded-md" type="submit">Create a Job</x-forms.button>
        </x-forms.form>
    </x-container>
</x-layout>
