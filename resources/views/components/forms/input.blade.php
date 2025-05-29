
@php
    $defaults=[
        'type' => 'text',
        'id' => "$slot",
        'name' => "$slot",
        'class'=> "bg-gray-700/20 rounded-lg p-3 border-2 border-white/40 text-lg hover:border-border focus:border-border transition duration-200 outline-none text-white font-rubik",
]
@endphp
<input {{$attributes($defaults)}}>
