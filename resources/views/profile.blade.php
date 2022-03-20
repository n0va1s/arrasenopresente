@extends('layout')

@section('title', ' - Home')

@section('step', 'Passo 2')

@section('content')
<form id="frmprofile" method="post" action="{{ route('profile.store') }}">
    <fieldset>
        <legend>De quem estamos falando?</legend>
        <div class="mb-3">
            <label for="is_woman" class="form-label">O presente é para</label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_woman" id="is_woman" value="0" required>
                <label class="form-check-label" for="homem">Um homem</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_woman" id="is_woman" value="1" required>
                <label class="form-check-label" for="mulher">Uma mulher</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="age_range_id" class="form-label">Na faixa de idade</label>
            <select id="age_range_id" name="age_range_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($range_ages as $option)
                <option value="{{ $option->id }}" @selected(old('age_range_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="like_day" class="form-label">Que tem mais energia</label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="like_day" id="like_day" value="1" required>
                <label class="form-check-label" for="dia">de Dia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="like_day" id="like_day" value="0">
                <label class="form-check-label" for="noite">de Noite</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="like_animal" class="form-label">Que gosta de animais</label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="like_animal" id="like_animal" value="1" required>
                <label class="form-check-label" for="dia">Gosta de animais</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="like_animal" id="like_animal" value="0">
                <label class="form-check-label" for="noite">Não gosta ou não sei</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="segment_id" class="form-label">Que trabalha na área de</label>
            <select id="segment_id" name="segment_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($segments as $option)
                <option value="{{ $option->id }}" @selected(old('segment_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="relax_id" class="form-label">Que relaxa mais</label>
            <select id="relax_id" name="relax_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($rests as $option)
                <option value="{{ $option->id }}" @selected(old('relax_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="sexual_option_id" class="form-label">Que é</label>
            <select id="sexual_option_id" name="sexual_option_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($sexual_orientations as $option)
                <option value="{{ $option->id }}" @selected(old('sexual_option_id') == {{ $option->id }})>
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
            <label for="more_information" class="form-label">Mais alguma dica?</label>
            <textarea id="more_information" cols="30" rows="5" class="form-control" placeholder="Que carro a pessoa tem? A pessoa tem alguma causa? Tem algum vício? Sei lá... toda informação ajuda no match ;)"></textarea>
        </div>
        <input type="hidden" id="gift_id" name="gift_id" value="{{ $gift_id }}">
        <button type="submit" class="btn btn-primary">Próximo</button>
        @csrf
    </fieldset>
</form>
@endsection