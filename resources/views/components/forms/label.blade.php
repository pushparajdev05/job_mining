@props(["label"])

<label for="{{$input}}" {{$attributs->merge(["class"=>""])}}> {{$label}}</label>
