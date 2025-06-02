@props(["label"=>'',"name","label_style"=>'',"placeholder"=>'','type'=>'text','form'=>""])

<div {{$attributes->merge(['class'=>'flex flex-col'])}}>
    <x-forms.label class="" for="{{$name}}" class="{{$label_style}}">
        @if("search_job" == $name)
            {{ $label }}
        @else
        <x-list-heading> {{$label}}</x-list-heading>
        @endif
    </x-forms.label>
    @if ($form == "")
        <x-forms.input class="w-full {{ $type == 'file' ? 'file:bg-white file:text-black file:px-2 file:rounded-sm' : '' }}" placeholder="{{$placeholder}}" type="{{ $type }}" value="{{ $slot }}">{{$name}}</x-forms.input>
    @else
        <x-forms.input form="{{ $form }}" class="w-full {{ $type == 'file' ? 'file:bg-white file:text-black file:px-2 file:rounded-sm' : '' }}" placeholder="{{$placeholder}}" type="{{ $type }}" value="{{ $slot }}">{{$name}}</x-forms.input>
    @endif
    @error($name)
        <x-forms.error>{{ $message }}</x-forms.error>
    @enderror


</div>
