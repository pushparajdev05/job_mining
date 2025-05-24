@props(["option"=>1, "values" => ["no option"]])
<select {{$attributes->merge(["class"=>""])}}>
    @for ( $i=0; $i < $option; $i++)
        <option value="{{$values[$i]}}">{{$values[$i]}}</option>
    @endfor
</select>
