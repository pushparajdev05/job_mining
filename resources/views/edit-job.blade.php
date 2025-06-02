<x-layout>
    <x-container>
        <h1 class="text-center text-3xl my font-medium">Modify a Job</h1>
        <x-forms.form action="/post-job/{{ $job->id }}" method="post" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method("patch")
            @php
                $style="w-full max-w-[50rem] space-y-2";
                $tags = $job->tags;
                foreach( $tags as $tag )
                {
                    $tag_str[] = $tag->name;
                }
            @endphp
            <x-forms.fields label="Title" name="title" class="{{ $style }}" placeholder="Title of the Job">{{ $job->title }}</x-forms.fields>
            <x-forms.fields label="Salary" name="salary" class="{{ $style }}" placeholder="Eg. $60,000">{{ $job->salary }}</x-forms.fields>
            <x-forms.fields label="Rating" name="rating" class="{{ $style }}" placeholder="Eg. 4.3 (out of 5)">{{ $job->rating }}</x-forms.fields>
            <x-forms.select label="Location" name="location" class="{{ $style }}" :values="['On-Site','Remote','Hybrid']" selected="{{ $job->location }}"></x-forms.select>
            <x-forms.select label="Schedule" name="schedule" class="{{ $style }}" :values="['Full Time', 'Part Time', 'Day Shift', 'Evening Shift', 'Night Shift']" selected="{{ $job->schedule }}"></x-forms.select>
            <x-forms.fields label="Address" name="Address" class="{{ $style }}" placeholder="Eg. 123 Market St, San Francisco, CA 94103">{{ $job->Address }}</x-forms.fields>
            <x-forms.fields label="URL" name="url" class="{{ $style }}" placeholder="Eg. https://www.abc.com/company/job">{{ $job->url }}</x-forms.fields>

            <div class="border-b border-gray-100/30 w-full max-w-[52rem] mt-2"></div>

            <x-forms.fields label="Tags (Comma Seperated)" name="tags" class="{{ $style }}" placeholder="Eg. Frontend, Backend, Web">{{ implode(", ",$tag_str) }}</x-forms.fields>
            <x-forms.button class="bg-blue-600 text-lg font-medium hover:bg-blue-500/90 py-2 px-3 rounded-md" type="submit">Edit a Job</x-forms.button>
        </x-forms.form>
    </x-container>
</x-layout>
