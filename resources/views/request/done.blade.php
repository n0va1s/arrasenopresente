@extends('layouts.front')

@section('title', 'A! - Pronto')

@section('content')
<!-- ======= Top Bar ======= -->
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
<section id="start">
    <div class="container gx-5 px-5">
        <div class="row order-lg-1 align-items-center">
            <div class="col-lg-6">
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Tudo certo! </h1>
                    <p class="lead fw-normal text-muted">Em breve vc receberá um email com as nossas dicas de presente</p>
                    <p class="lead fw-normal text-muted">Sucesso com o seu presente!</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="masthead-device-mockup">
                    <img src="{{ asset('img/done.svg') }}" style="width: 60%;" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection