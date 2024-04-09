@extends('layout')

@section('conteudo')
    <div class="row container">
        @forelse($produtos as $produto)
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produto->imagem }}">
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $produto->nome }}</span>
                        <p>{{ Str::limit($produto->descricao, 25) }}</p>
                    </div>
                </div>
            </div>

        @empty
        @endforelse
    </div>
@endsection
