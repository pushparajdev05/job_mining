<div class="flex flex-col items-center bg-gray-600/25 rounded-lg border border-gray-50/10 hover:border-border transition duration-300 group space-y-4 py-4 px-5">
    <div class="flex justify-between w-full">
        <span class="italic self-start text-xs opacity-50">Rating - 4.5</span>
        <span class="italic self-start text-xs opacity-80">Pushparaj P</span>
    </div>
    <span class="text-2xl font-medium group-hover:text-border transition duration-300">Full Stack Laravel developer</span>
    <span class="text-sm">Full time - From $60000</span>
    <div class="flex items-center justify-between w-full">
        <div class="flex space-x-2">
            <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">Frontend</x-cards.tag>
            <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">Backend</x-cards.tag>
            <x-cards.tag class="px-1.5 py-0.5 text-xs text-center h-fit cursor-pointer">API</x-cards.tag>
        </div>
        <div>
            <x-img src="http://picsum.photos/seed/{{rand(0,100000)}}/100/100" class="rounded-md cursor-pointer"></x-img>
        </div>
    </div>
</div>
