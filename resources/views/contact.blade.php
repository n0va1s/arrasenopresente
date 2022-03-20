@extends('layout')

@section('title', ' - Home')

@section('step', 'Passo 3')

@section('content')
<form id="frmcontact" method="post" action="{{ route('contact.store') }}">
    <fieldset>
        <legend>Para terminar</legend>
        <div class="mb-3">
            <label for="emailFrom" class="form-label">Qual o seu email?</label>
            <input type="email" id="emailFrom" name="emailFrom" class="form-control" placeholder="Para enviarmos as sugestões" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Qual o seu nome?</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Para sabermos um pouco mais de quem quer presentear" required>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-4 col-sm-12">
                <label for="is_woman" class="form-label">Vc é?</label><br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="is_woman" name="is_woman" value="0" required>
                    <label class="form-check-label" for="is_woman">Um homem</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="is_woman" name="is_woman" value="1" required>
                    <label class="form-check-label" for="is_woman">Uma mulher</label>
                </div>
            </div>
            <div class="mb-3 col-lg-4 col-sm-12">
                <label for="age" class="form-label">Qual a sua idade?</label>
                <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <div class="mb-3 col-lg-4 col-sm-12">
                <label for="state_id" class="form-label">De onde vc é?</label>
                <select id="state_id" name="state_id" class="form-select" required>
                    <option value="">Selecione</option>
                @forelse ($states as $option)
                    <option value="{{ $option->id }}" @selected(old('id') == {{ $option->id }})>
                        {{ $option->title }}
                    </option>
                @empty
                    <option value="">Nenhuma opção cadastrada</option>
                @endforelse
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="emailTo" class="form-label">Qual o <b class="text-primary">email da
                    pessoa a ser presenteada</b>?</label>
            <input type="email" id="emailTo" class="form-control" placeholder="Só preencha se pudermos fazer uma consulta anônima">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="hidden" id="gift_id" name="gift_id" value="{{ $gift_id }}">
        @csrf
    </fieldset>
</form>
@endsection