@extends('layout')

@section('title', ' - Home')

@section('step', 'Passo 1')

@section('content')
<form id="frmgift" method="post" action="{{ route('gift.store') }}">
    <fieldset>
        <legend>Para que ocasião?</legend>
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
            @forelse ($range_prices as $option)
                <option value="{{ $option->id }}" @selected(old('price_range_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="theme_id" class="form-label">Algo relacionado a</label>
            <select id="theme_id" name="theme_id" class="form-select" required>
                <option value="">Selecione</option>
            @forelse ($themes as $option)
                <option value="{{ $option->id }}" @selected(old('theme_id') == {{ $option->id }})>
                    {{ $option->title }}
                </option>
            @empty
                <option value="">Nenhuma opção cadastrada</option>
            @endforelse
            </select>
        </div>
        <div class="mb-3">
            <label for="good_gift" class="form-label">Um presente legal seria</label>
            <textarea id="good_gift" name="good_gift" cols="30" rows="2" class="form-control" placeholder="Me fala um presente que vc deu e foi legal ou algo que vc pensou e não tem certeza"></textarea>
        </div>
        <div class="mb-3">
            <label for="bad_gift" class="form-label">Um presente ruim seria</label>
            <textarea id="bad_gift" name="bad_gift" cols="30" rows="2" class="form-control" placeholder="Me fala um presente que vc deu e foi ruim ou algo que vc não quer repetir"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Próximo</button>
        @csrf
    </fieldset>
</form>
@endsection