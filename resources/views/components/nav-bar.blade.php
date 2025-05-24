<nav class="max-auto flex justify-between items-center border-b-[0.1px] border-gray-100">
    <x-logo width="70px"></x-logo>
    <div>
        <x-anchor href="#" class="text-2xl text-white font-bold">Jobs</x-anchor>
        <x-anchor href="#" class="text-2xl text-white font-bold">Careers</x-anchor>
        <x-anchor href="#" class="text-2xl text-white font-bold">Salaries</x-anchor>
        <x-anchor href="#" class="text-2xl text-white font-bold">Companies</x-anchor>
    </div>
    <div>
        @auth
            <x-anchor href="#" class="text-2xl text-white font-bold">Post a Job</x-anchor>
            <x-anchor href="#" class="text-2xl text-white font-bold">Log Out</x-anchor>
        @endauth
        @guest
            <x-anchor href="#" class="text-2xl text-white font-bold">Log In</x-anchor>
            <x-anchor href="#" class="text-2xl text-white font-bold">Register</x-anchor>
        @endguest
    </div>
</nav>
