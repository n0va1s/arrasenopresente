@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="width: 18rem; align-items: center;">
                        <img src="{{ asset('img/gift.png') }}" style="width: 50%;" class="card-img-top" alt="Imagem de uma caixa embalada como um presente">
                        <div class="card-body">
                            <h5 class="card-title">Dicas</h5>
                            <p class="card-text">Cadastre dicas especiais para cada um dos pedidos recebidos</p>
                            <a href="{{ route('hint.index') }}" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
