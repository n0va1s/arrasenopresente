@extends('layouts.page')

@section('content')
<div class="row gx-5 align-items-center">
    <div class="col-md-6">
        <h1>{{ __('Pedido') }}</h1>
        <hr>
        <p>Um presente de <b>{{ $gift->name}}</b>, para <b>{{ $gift->relationship }}</b>
        idade <b>{{$gift->age_range}}</b>, de <b>{{$gift->sign}}</b>, curte <b>{{$gift->hobby}},
        na faixa de <b>{{ $gift->price_range}}</b>
        @if(isset($gift->good_gift) || isset($gift->bad_gift))<br />Lembrando: @endif
        @if(isset($gift->good_gift))<br /> Dica: <b>{{$gift->good_gift}}</b>@endif
        @if(isset($gift->bad_gift))<br /> Evitar: <b>{{$gift->bad_gift}}</b>@endif
        </p>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('img/hints.png') }}" class="img-fluid" style="width: 60%" alt="Uma pessoa dançando e jogando papel picado">
    </div>
    <div class="row mt-5">
        <h1>{{ __('Nossas dicas são essas:') }}</h1>
        @forelse ($hints as $line)
        @if($line->group === 'Bônus')
        <div class="card mx-1 my-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Mais uma dica pra vc</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$line->group}}</h6>
                <p class="card-text">{{$line->title}}</p>
            </div>
            @if( ! $line->is_confirmed)
            <div class="d-flex justify-content-center mb-3">
                <a class="btn btn-sm btn-outline-secondary" href="{{route('hint.liked', $line->code )}}" role="button">Gostei</a>
            </div>
            @endif
        </div>
        @else
        <div class="card mx-1 my-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$line->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$line->group}}</h6>
                <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--<a href="" target="_blaank" class="card-link"></a>-->
                <div class="d-flex justify-content-evenly mt-3">
                    <a class="btn btn-sm btn-primary" href="{{$line->link}}" role="button" target="_blank">Acesse</a>
                    @if( ! $line->is_confirmed)
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('hint.liked', $line->code )}}" role="button">Gostei</a>
                    @endif
                </div>
            </div>
        </div>
        @endif
        @empty
            <div class="row mt-3">Nada cadastrado ainda...</div>
        @endforelse
    </div>
</div>
@endsection