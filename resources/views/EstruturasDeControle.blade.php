@extends('site.layout')

@section('titulo', 'Home')

@section('conteudo')

<h1>Conteudo</h1>
{{-- Comentário --}}
{{-- {{isset($nome) ? 'existe' : 'isso ai n existe não'}} --}}

@if ($nome == 'Lan')
<h1>Sei nao {{ $nome }}</h1>
@else
<h1>Tu n é o Lan</h1>
@endif

{{-- @unless ()
    
@endunless --}}

{{-- @switch($type)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch --}}

{{-- @isset($record)
    
@endisset --}}

{{-- @empty($record)
    
@endempty --}}

{{-- @auth
    
@endauth --}}

{{-- @guest
    
@endguest --}}

@endsection
