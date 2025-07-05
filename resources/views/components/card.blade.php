{{-- {{ $color }} --}}
{{-- @props(['color' =>'white', 'bgColor' =>'black']) --}}

{{-- {{ dump($attributes) }} --}}

<div {{ $attributes
        ->merge(['lang'=>'ka'])
        ->class("card card-text-$color card-bg-$bgColor") }}>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum beatae magni ipsam culpa aspernatur reprehenderit accusantium enim eum? Accusamus dolorum rem error exercitationem dolore amet. Eos rerum voluptates rem facilis?


    <div {{$title->attributes->class('card-header')}} >
         {{ $title }}
    </div>

    @if($slot->isEmpty())
        <p>Por favor coloque algum conteúdo</p>
    @else
        {{ $slot }}
    @endif
    <div class="card-footer"> {{ $footer }}</div>

</div>