{{-- 
<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

    <p>Oi eu sou o {{ strtoupper($name .' '.$surname)}} {{$surname}}</p>

    <!-- A variável job não deixa passar as tags mais. -->
    <p>{!! $job !!}   /   {{ $job }}</p> 
    <p>{{ Str::after("Hello World", "Hello") }}
    <p> Laravel Version {{ app()->version() }}</p>
    <p> PHP version {{ PHP_VERSION }}</p>

    <!-- @ na frente das chaves, não acontece o processamento como funçãom, PARA VUE.JS -->
    <p> @{{ name }}</p>

    <!-- Verbatim faz os characteres usados para puxar funções serem apenas characteres -->
    @verbatim
    <div>
        ----Verbatim
        <p>name: {{ name }} </p>
        <p>surname: {{ surname }} </p>
        <p>job: {{ job }} </p>
        ----EndVerbatim
    </div>
    @endverbatim

    <!-- from() Codifica o array em formato JSON -->
    <p>{{ Js::from($hobbies) }}</p>
    <script>
        const hobbies = {{ Js::from($hobbies) }};
        console.log(hobbies);
    </script>

    {{-- Esse comentário não é processado pelo browser --}}
    {{--
        Esse comentário
        só pode ser visto
        no código
    --}}

    {{-- Condicionais em laravel Blade Directive--}

    @if ($name == 'Pedro')
        <p>Oi {{$name}}</p>
    @elseif ($name == 'Augusto')
        <p>Oi {{$name}}</p>
    @else
        <p>Oi {{$name}}</p>
    @endif

    @switch($country)
        @case('br')
            <p>Brasil</p>
            @break
        @case('us')
            <p>Brasil</p>
            @break
        @default
            <p>Desconhecido</p>
            @break
    @endswitch

    @for($i = 0; $i < 3; $i++)
        <p>{{$i + 1}}</p>
    @endfor

    @foreach ($hobbies as $hobbie)
        <p>{{ $hobbie }}</p>
    @endforeach

    @include('sign.alert', ['color'=>'white', 'message'=>'Fica tento meu lindo!'])
</div> --}}


