@props(["values" => ["no option"],"label"=>'','name'=>'',"selected"=>''])
<div {{$attributes->merge(['class'=>'flex flex-col'])}}>
    <x-forms.label>
        <x-list-heading> {{$label}}</x-list-heading>
    </x-forms.label>
    <select {{$attributes->merge(["class"=>"bg-gray-700/20 rounded-lg p-3 border-2 border-white/40 text-lg hover:border-border focus:border-border transition duration-200 outline-none text-white font-rubik"])}} name="{{ $name }}" id="{{ $name }}">
        @for ( $i=0; $i < count($values); $i++)
            <option value="{{$values[$i]}}" {{ $attributes->merge(['class'=>'bg-neutral-700']) }} {{ $selected == $values[$i] ? 'selected' : '' }}>{{$values[$i]}}</option>
        @endfor
    </select>
    @error("$name")
        <x-forms.error>{{ $message }}</x-forms.error>
    @enderror
</div>

