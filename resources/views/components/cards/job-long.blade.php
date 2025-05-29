<div class="w-full bg-gray-600/25 rounded-lg border border-gray-50/10 hover:border-border transition duration-300 text-white group p-6 flex items-center">
    <div class="h-fit">
        <x-img src="http://picsum.photos/seed/{{rand(0,100000)}}/100/100" class="rounded-md cursor-pointer" dimension="100px"></x-img>
    </div>
    <div class="ml-5 w-full space-y-3">
        <div class="flex justify-between">
            <span class="italic self-start text-base opacity-80">Pushparaj P</span>
            <div class="space-x-4">
                <span class="italic text-base opacity-80 border border-gray-50/10 bg-neutral-300/15 px-1.5 py-0.5 rounded-lg">Remote</span>
                <span class="italic text-base opacity-80 border-gray-50/10 bg-neutral-300/15 px-1.5 py-0.5 rounded-lg">Rating - 4.5</span>
            </div>
        </div>
        <div>
            <span class="text-2xl font-medium group-hover:text-border duration-300">Full Stack Laravel Developer</span>
        </div>
        <div class="flex justify-between">
            <span class="text-sm text-white/60">Full Time - From $60000</span>
            <div class="flex space-x-2">
                <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">Frontend</x-cards.tag>
                <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">Backend</x-cards.tag>
                <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">API</x-cards.tag>
            </div>
        </div>
    </div>
</div>
