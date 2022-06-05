@extends('layouts.front')

@section('title', ' - Home')

@section('step', 'Passo 1')

@section('content')
<form id="frmgift" method="post" action="{{ route('gift.store') }}" data-grecaptcha-action="gift">
    <fieldset>
        <legend>Sobre o presente</legend>
        <div class="mb-3">
            <label for="occasion_id" class="form-label">Um presente para</label>
            <select id="occasion_id" name="occasion_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($occasions as $option)
                <option value="{{ $option->id }}" @selected(old('ocassion_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="price_range_id" class="form-label">Na faixa de preço de</label>
            <select id="price_range_id" name="price_range_id" class="form-select" required>
                <option value="">Selecione</option>
                @forelse ($prices as $option)
                <option value="{{ $option->id }}" @selected(old('price_range_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
                @empty
                <option value="">Nenhuma opção cadastrada</option>
                @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="more_information" class="form-label">Mais alguma dica?</label>
            <textarea id="more_information" name="more_information" cols="30" rows="5" class="form-control" placeholder="Algo que devemos evitar? Vc tem algo em mente e está em dúvida? Sei lá... toda informação ajuda no match ;)"></textarea>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sobre a pessoa</legend>
        <div class="mb-3">
            <label for="who_is" class="form-label">O presente é para</label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="who_is" id="who_is" value="H" required>
                <label class="form-check-label" for="homem">Um homem</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="who_is" id="who_is" value="M" required>
                <label class="form-check-label" for="mulher">Uma mulher</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="who_is" id="who_is" value="C" required>
                <label class="form-check-label" for="mulher">Um casal</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="age_range_id" class="form-label">Na faixa de idade</label>
            <select id="age_range_id" name="age_range_id" class="form-select" required>
                <option value="">Selecione</option>
                @forelse ($ages as $option)
                <option value="{{ $option->id }}" @selected(old('age_range_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
                @empty
                <option value="">Nenhuma opção cadastrada</option>
                @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="hobby_id" class="form-label">Que gosta de</label>
            <select id="hobby_id" name="hobby_id" class="form-select" required>
                <option value="">Selecione</option>
                @forelse ($hobbies as $option)
                <option value="{{ $option->id }}" @selected(old('hobby_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
                @empty
                <option value="">Nenhuma opção cadastrada</option>
                @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="sign_id" class="form-label">Que é do signo</label>
            <select id="sign_id" name="sign_id" class="form-select" required>
                <option value="">Selecione</option>
                @forelse ($signs as $option)
                <option value="{{ $option->id }}" @selected(old('sign_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
                @empty
                <option value="">Nenhuma opção cadastrada</option>
                @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="relationship_id" class="form-label">Nossa relação é de</label>
            <select id="relationship_id" name="relationship_id" class="form-select" required>
                <option value="">Selecione</option>
                @forelse ($relations as $option)
                <option value="{{ $option->id }}" @selected(old('relationship_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
                @empty
                <option value="">Nenhuma opção cadastrada</option>
                @endforelse
            </select>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sobre você</legend>
        <div class="mb-3">
            <label for="email_from" class="form-label">Qual o seu email?</label>
            <input type="email" id="email_from" name="email_from" class="form-control" placeholder="Para enviarmos as sugestões" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Qual o seu nome?</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Para sabermos um pouco mais de quem quer presentear" required>
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Enviar</button>
    @csrf
</form>
@endsection