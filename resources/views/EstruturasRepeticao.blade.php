@extends('site.layout')

@section('conteudo')

{{-- @for ($i = 1; $i<=10;$i++)
<h1> Num {{ $i }} </h1>
@endfor --}}

{{-- @php
    $cont = 1;
@endphp

@while ($cont <= 10)

<p> Valor atual: {{ $cont }} </p>
@php $cont+=1 @endphp

@endwhile --}}

@forelse($frutas as $fruta)
    <h1>{{ $fruta }}</h1>
@empty
tem nada n

@endforelse

@endsection