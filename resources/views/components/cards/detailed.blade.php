@props(["job"=>null])
{{-- {{ dd($job) }} --}}
<div class="bg-gray-600/25 rounded-lg border border-gray-50/10 w-full max-w-[60rem] mx-auto p-5 ">
    <div class="flex justify-center space-x-6 border-b border-gray-100/30 pb-5">
        <div>
            <x-img src="http://picsum.photos/seed/{{rand(0,100000)}}/100/100" class="rounded-md cursor-pointer" dimension="200px"></x-img>
        </div>
        <div class="grid grid-cols-[1fr_3fr] text-lg font-medium items-center w-full text-neutral-200 border-l border-gray-100/30 pl-5">
                <span>User Name :</span>
                <span>{{ $job->employer->user->uname }}</span>

                <span>Employer Name :</span>
                <span>{{ $job->employer->name }}</span>

                <span>Company Name :</span>
                <span>{{ $job->employer->cmpName }}</span>
        </div>
    </div>
        <div class="grid grid-cols-[1fr_3fr] text-lg items-center w-full gap-y-5 max-w-[40rem] py-5">
            <span>Title :</span>
            <span class="italic">{{ $job->title }}</span>

            <span>Rating :</span>
            <span class="italic">&#9733; {{ $job->rating }}</span>

            <span>Location :</span>
            <span class="italic">{{ $job->location }}</span>

            <span>Schedule :</span>
            <span class="italic">{{ $job->schedule }}</span>

            <span>Tags :</span>
            <div class="flex items-center space-x-5">
                @foreach ($job->tags as $tag )
                    <x-cards.tag class="py px-2 h-fit text-sm">{{ $tag->name }}</x-cards.tag>
                @endforeach
            </div>

            <span>Salary :</span>
            <span class="italic">{{ $job->salary }}</span>

            <span>Address :</span>
            <span class="italic">{{ $job->Address }}</span>

            <span>Posted :</span>
            <span class="italic">{{ $job->updated_at }}</span>
        </div>
        <x-forms.form action="/post-job/{{ $job->id }}/edit" method="get" id="edit" class="hidden">
        </x-forms.form>
        <x-forms.form action="/post-job/{{ $job->id }}" method="post" id="delete" class="hidden">
            @method("delete");
            @csrf
        </x-forms.form>
        <div class="flex justify-end space-x-3 border-t border-gray-100/30 pt-5">
            {{-- {{ dd($job) }} --}}
            @can('update', $job)
                <x-forms.button form="edit" class="bg-blue-500 hover:bg-blue-500/90">Edit</x-forms.button>
            @endcan
            @can('delete', $job)
                <x-forms.button form="delete" class="bg-red-500 hover:bg-red-500/90">Delete</x-forms.button>
            @endcan
        </div>
</div>
