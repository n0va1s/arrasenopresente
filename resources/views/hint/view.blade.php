@extends('layouts.page')

@section('content')
<div class="row gx-5 align-items-center">
    <div class="col-md-6">
        <h1>{{ __('Pedido') }}</h1>
        <hr>
        <p>Um presente de <b>{{ $gift->name}}</b> para <b>@switch($gift->who_is) @case('H') um homem, @break @case('M'): uma mulher, @break @default um casal, @endswitch</b> 
        <b>{{$gift->sexual_option}}</b>, <b>{{$gift->age_range}}</b>, signo de <b>{{$gift->sign}}</b> com idade entre <b>{{ $gift->price_range}}</b>, com tema <b>{{$gift->theme}}</b>
        @if($gift->like_day ==="1"), que gosta do dia @else, não gosta do dia @endif 
        @if($gift->like_animal ==="1"), que gosta de animais @else, não gosta de animais @endif 
        , que trabalha no segmento de <b>{{$gift->segment}}</b> e relaxa <b>{{$gift->relax}}</b>. 
        @if(isset($gift->good_gift) || isset($gift->bad_gift))Lembrando: @endif
        @if(isset($gift->good_gift)) que um presente que já fez sucesso foi <b>{{$gift->good_gift}}</b>@endif
        @if(isset($gift->bad_gift)) que um presente a evitar é <b>{{$gift->bad_gift}}</b>@endif
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
                <p class="card-text">Pessoas com esse perfil podem gostar de {{$line->title}}</p>
            </div>
        </div>
        @else
        <div class="card mx-1 my-1" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$line->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$line->group}}</h6>
                <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <a href="{{$line->link}}" target="_blaank" class="card-link">Acesse</a>
            </div>
        </div>
        @endif
        @empty
            <div class="row mt-3">Nada cadastrado ainda...</div>
        @endforelse
    </div>
</div>
@endsection