@props(['link' =>'', 'text'=>'', 'class' => ''])

<div class= "{{$class}}">
{{$slot}}
<a href={{$link}}> {{$text}}</a>
</div>


{{-- Foi usado para treinar, colocar interativamente
os links de login e signup no footer das paginas --}}