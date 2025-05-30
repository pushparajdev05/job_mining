<nav class="w-[95%] mx-auto flex justify-between items-center border-b border-gray-100/30">
    <x-logo width="70px"></x-logo>
    <div class="space-x-5">
        <x-anchor href="/" class="text-lg text-white">Jobs</x-anchor>
        <x-anchor href="#" class="text-lg text-white">Careers</x-anchor>
        <x-anchor href="#" class="text-lg text-white">Salaries</x-anchor>
        <x-anchor href="#" class="text-lg text-white">Companies</x-anchor>
    </div>
    <div class="space-x-5">
        @auth
            <x-anchor href="#" class="text-xl text-white">Post a Job</x-anchor>
            <x-anchor href="#" class="text-xl text-white">Log Out</x-anchor>
        @endauth
        @guest
            <x-anchor href="/job/login" class="text-xl text-white">Log In</x-anchor>
            <x-anchor href="/job/register" class="text-xl text-white">Register</x-anchor>
        @endguest
    </div>
</nav>
