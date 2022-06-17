@extends('layouts.front')

@section('content')
<section id="topbar">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="/">A!</a></h1>
        </div>
        <div class="contact-info d-flex align-items-center">
            <a href="mailto:dicas@arrasenopresente.com.br"><i class="bi bi-envelope d-flex align-items-center ms-4" style="font-size: 2rem; color: white;"></i></a>
            <a href="https://wa.me/5561981546988?text=Quero%20dicas%20de%20presentes"><i class="bi bi-phone d-flex align-items-center ms-4" style="font-size: 2rem; color: white;"></i></a>
        </div>
    </div>
</section>
@if($gift)
<section id="start">
    <div class="container">
        <div class="row">
            <h2 class="font-alt">Aqui estão as dicas</h2>
            <p class="lead fw-normal text-muted mb-5">Você irá para o site de um dos nossos parceiros</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4>{{ __('Esse foi o seu pedido') }}</h4>
                <hr>
                <p>Um presente de <b>{{ $gift->name}}</b>, para <b>{{ $gift->relationship }}</b>,
                    idade <b>{{$gift->age_range}}</b>, de <b>{{$gift->sign}}</b>, curte <b>{{$gift->hobby}}</b>,
                    na faixa de <b>{{ $gift->price_range}}</b>
                    @if(isset($gift->good_gift) || isset($gift->bad_gift))<br />Lembrando: @endif
                    @if(isset($gift->good_gift))<br /> Dica: <b>{{$gift->good_gift}}</b>@endif
                    @if(isset($gift->bad_gift))<br /> Evitar: <b>{{$gift->bad_gift}}</b>@endif
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/hints.png') }}" class="img-fluid" style="width: 60%" alt="Uma pessoa dançando e jogando papel picado">
            </div>
        </div>
        <div class="row">
            <h4>{{ __('Nossas dicas são essas') }}</h4>
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
                        <a class="btn btn-sm btn-primary" href="{{route('hint.opened', $line->code)}}" role="button" target="_blank">Acesse</a>
                        @if( ! $line->is_confirmed)
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('hint.liked', $line->code )}}" role="button">Gostei</a>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @empty
            <div class="row mt-3">Nenhuma dica por aqui ainda...</div>
            @endforelse
        </div>
    </div>
</section>
@else
<section id="start">
    <div class="container">
        <div class="row">
            <h2 class="font-alt">Ops...</h2>
            <p class="lead fw-normal text-muted mb-5">Não encontramos esse pedido nos nossos sistemas</p>
        </div>
    </div>
</section>
@endif
@endsection