<x-layout>
    <x-container>
        <h1 class="text-center text-3xl my font-medium">Registration</h1>
        <x-forms.form action="/register" method="post" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @php
                $style="w-full max-w-[50rem] space-y-2";
            @endphp
            <x-forms.fields label="User Name" name="uname" class="{{ $style }}" placeholder="Eg. Velu Nayak K"></x-forms.fields>
            <x-forms.fields label="Email ID" name="email" class="{{ $style }}" placeholder="Eg. abc@gmail.com"></x-forms.fields>
            <x-forms.fields label="Password" name="password" class="{{ $style }}"></x-forms.fields>
            <x-forms.fields label="Confirm Password" name="password_confirmation" class="{{ $style }}"></x-forms.fields>
            <div class="border-b border-gray-100/30 w-full max-w-[52rem] mt-2"></div>
            <x-forms.fields label="Employer Name" name="empName" class="{{ $style }}" placeholder="Eg. RamKumar J"></x-forms.fields>
            <x-forms.fields label="Company Name" name="cmpName" class="{{ $style }}" placeholder="Eg. Colan infoTech private limited"></x-forms.fields>
            <x-forms.fields label="Company Logo" name="logo" type="file" class="{{ $style }}"></x-forms.fields>
            <x-forms.button class="bg-blue-600 hover:bg-blue-500/90" type="submit">Create Account</x-forms.button>
        </x-forms.form>
    </x-container>
</x-layout>
