@extends('layouts.front')

@section('title', 'A! - Busca')

@section('content')
<!-- ======= Top Bar ======= -->
<section id="topbar">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="/">A!</a></h1>
        </div>
        <div class="contact-info d-flex align-items-center">
            <a href="mailto:dicas@arrasenopresente.com.br"><i class="bi bi-envelope d-flex align-items-center ms-4" style="font-size: 2rem; color: white;"></i></a>
            <a href="https://wa.me/5561981546988?text=Quero%20algo%20especial"><i class="bi bi-phone d-flex align-items-center ms-4" style="font-size: 2rem; color: white;"></i></a>
        </div>
    </div>
</section>
<section id="start">
    <div class="container gx-5 px-5">
        <div class="row order-lg-1">
            <h2 class="font-alt">Encontre o presente perfeito</h2>
            <p class="lead fw-normal text-muted mb-5">Selecione uma das opções que preparamos para você</p> 
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form id="frmSearch" method="post" action="{{ route('gift.search') }}">
                <div class="mb-3">
                    <label for="who_is" class="form-label">Para</label><br />
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="who_is" id="who_is" value="H" required>
                        <label class="form-check-label" for="inlineRadio1">Um homem</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="who_is" id="who_is" value="M" required>
                        <label class="form-check-label" for="inlineRadio1">Uma mulher</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="who_is" id="who_is" value="C" required>
                        <label class="form-check-label" for="inlineRadio1">Um casal</label>
                    </div>
                </div>    
                <div class="mb-3">
                    <label for="occasion_id" class="form-label">Ocasição:</label>
                    <select id="occasion_id" name="occasion_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($occasions as $option)
                        <option value="{{ $option->id }}" @selected(old('ocassion_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price_range_id" class="form-label">Na faixa de preço de</label>
                    <select id="price_range_id" name="price_range_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($prices as $option)
                        <option value="{{ $option->id }}" @selected(old('price_range_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="age_range_id" class="form-label">Na faixa de idade</label>
                    <select id="age_range_id" name="age_range_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($ages as $option)
                        <option value="{{ $option->id }}" @selected(old('age_range_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hobby_id" class="form-label">Que gosta de</label>
                    <select id="hobby_id" name="hobby_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($hobbies as $option)
                        <option value="{{ $option->id }}" @selected(old('hobby_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sign_id" class="form-label">Que é do signo</label>
                    <select id="sign_id" name="sign_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($signs as $option)
                        <option value="{{ $option->id }}" @selected(old('sign_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="relationship_id" class="form-label">Nossa relação é de</label>
                    <select id="relationship_id" name="relationship_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($relations as $option)
                        <option value="{{ $option->id }}" @selected(old('relationship_id')=={{ $option->id }})>
                            {{ $option->title }}
                        </option>
                        @empty
                        <option value="">Nenhuma opção cadastrada</option>
                        @endforelse
                    </select>
                </div>
                <button type="submit" class="read-more">Encontrar</button>
                @csrf
                </form>
            </div>
            @if(count($hints) > 0)
            <div class="col-lg-6 table-responsive">
                <p class="lead fw-normal text-muted mb-2">Presentes que encontramos para você</p> 
                <table class="table table-borderless">
                    <thead class="table-light">
                        <tr>
                            <th scope="col-2">Tipo</th>
                            <th scope="col-8">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hints as $hint)
                        <tr>
                            <td>{{$hint->title}}</td>
                            <td><a href="{{$hint->link}}">{{$hint->link}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="col-lg-6 text-center">
                <p class="lead fw-normal text-muted">Não encontrou o que precisava?</p>
                <a href="{{ route('gift.create') }}">
                    <button type="button" class="read-more" style="height:25vh;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gift" viewBox="0 0 16 16">
                            <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
                        </svg>
                        <br />
                        <span>Peça dicas especiais</span>
                    </button>
                </a>        
            </div>
            @endif    
        </div>
    </div>
</section>
@endsection