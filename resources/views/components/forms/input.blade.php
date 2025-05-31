@php
$name="$slot";
 $defaults=[
     'type' => 'text',
     'id' => "$name",
     'name' => "$name",
     'class'=> "bg-gray-700/20 rounded-lg p-3 border-2 border-white/40 text-lg hover:border-border focus:border-border appearance-none transition duration-200 outline-none text-white font-rubik",
     "value" => old($name)
    //  'value' => old($name)
];

@endphp
<input {{$attributes->merge($defaults)}}>
