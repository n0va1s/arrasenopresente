@extends('layouts.back')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-end">
                <a href="{{route('hint.index')}}" class="col-lg-3 col-sm-6 btn btn-light mb-2">Lista de Pedidos</a>
            </div>
            <div class="card-header">
                <h1>{{ __('Pedido') }}</h1>
                <hr>
                <p>Um presente de <b>{{ $gift->name}}</b> para <b>@switch($gift->who_is) @case('H') um homem, @break @case('M'): uma mulher, @break @default um casal, @endswitch</b> 
                <b>{{$gift->sexual_option}}</b>, entre <b>{{$gift->age_range}}</b>, signo de <b>{{$gift->sign}}</b> com idade entre <b>{{ $gift->price_range}}</b>, com tema <b>{{$gift->theme}}</b>
                @if($gift->like_day ==="1"), que gosta do dia @else, não gosta do dia @endif 
                @if($gift->like_animal ==="1"), que gosta de animais @else, não gosta de animais @endif 
                , que trabalha no segmento de <b>{{$gift->segment}}</b> e relaxa <b>{{$gift->relax}}</b>. 
                @if(isset($gift->good_gift) || isset($gift->bad_gift))Lembrando: @endif
                @if(isset($gift->good_gift)) que um presente que já fez sucesso foi <b>{{$gift->good_gift}}</b>@endif
                @if(isset($gift->bad_gift)) que um presente a evitar é <b>{{$gift->bad_gift}}</b>@endif
                </p>
            </div>
            <div class="row my-3">
                <form id="frmhint" method="post" action="{{route('hint.store')}}">
                    <fieldset class="mt-3">
                    <legend>Qual a sugestão?</legend>
                    <div class="mb-3">
                        <label for="group_id" class="form-label">Grupo</label>
                        <select id="group_id" name="group_id" class="form-select" required>
                        <option value="">Selecione</option>
                        @forelse ($groups as $option)
                        <option value="{{$option->id}}">{{$option->title}}</option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Como chamar a atenção de quem lê" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" id="link" name="link" class="form-control" maxlength="255" placeholder="Qual o endereço direto para o produto ou serviço">
                    </div>
                    <div class="row justify-content-end">
                        <input type="hidden" id="code" name="code" value="{{ $gift->code }}">
                        <button type="submit" class="col-lg-2 col-sm-6 btn btn-primary">Salvar</button>
                        @csrf
                    </div>
                    </fieldset>
                </form>
            </div>
            <h4 class="mt-5">{{ __('Dicas cadastradas') }}</h4>
            <hr>
            @forelse ($hints as $line)
            <div class="row justify-content-around my-3">
                <div class="col">{{$line->group}}</div>
                <div class="col">{{$line->title}}</div>
                <div class="col">{{$line->link}}</div>
                <div class="col">
                    <a href="{{route('hint.delete', $line->id )}}" class="btn btn-danger" onclick="return confirm('Confirma a exclusão?');">
                        Excluir
                    </a>
                </div>
            </div>
            @empty
                <div class="row mt-3">Nada cadastrado ainda...</div>
            @endforelse
            @if(count($hints) > 1)
            <div class="row justify-content-end">
                <a href="{{route('hint.send', $gift->code)}}" class="col-lg-3 col-sm-6 btn btn-light">Enviar</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection