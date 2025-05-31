<x-layout>
    <x-container>
        <h1 class="text-center text-3xl my font-medium">User Login</h1>
        <x-forms.form action="/login" method="post" class="space-y-5">
            @csrf
            @php
                $style="w-full max-w-[50rem] space-y-2";
            @endphp
            <x-forms.fields label="Email" name="email" class="{{ $style }}" placeholder="Eg. abc@gmail.com"></x-forms.fields>
            <x-forms.fields label="Password" name="password" class="{{ $style }}"></x-forms.fields>
            <x-forms.button class="bg-blue-600 text-lg font-medium hover:bg-blue-500/90 py-2 px-3 rounded-md" type="submit">Sign In</x-forms.button>
        </x-forms.form>
    </x-container>
</x-layout>
