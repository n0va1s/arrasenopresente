@extends('layouts.page')

@section('content')
<div class="row gx-5 align-items-center">
    <div class="col-lg-6">
        <div class="mb-5 mb-lg-0 text-center text-lg-start">
            <h1 class="display-1 lh-1 mb-3">Tudo certo! </h1>
            <p class="lead fw-normal text-muted">Em breve vc receberá um email com as nossas dicas de presente</p>
            <p class="lead fw-normal text-muted">Sucesso com o seu presente!</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="masthead-device-mockup">
            <img src="{{ asset('img/done.svg') }}" class="img-fluid">
        </div>
    </div>
</div>
@endsection