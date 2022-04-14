<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TP2CXJ9');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Recaptcha V3 -->
    <meta name="grecaptcha-key" content="{{config('recaptcha.v3.public_key')}}">
    <script src="https://www.google.com/recaptcha/api.js?render={{config('recaptcha.v3.public_key')}}"></script>
    <!-- End Google Recaptcha V3 -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Está chegando uma data especial e não encontrou um presente para o namorado, para o pai, para o seu chefe. Deixe a nossa inteligência ajudar vc. Nós dê algumas informações e lhe daremos dicas bem legais. Sucesso com o seu presente!" />
    <meta name="keywords" content="presente para namorado, presente para amiga, presente para conhecida, presente masculino, presente para signo, presente de aniversário, o que dar de presente, o que dar de aniversário, " />
    <meta name="author" content="6I tecnologia" />
    <meta name="lomadee-verification" content="{{env('LOMADEE_TOKEN')}}" />
    <title>Dicas de presentes para pessoas e ocasições especiais</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icone.png') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TP2CXJ9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Arrase no Presente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 me-2">
                                <span class="d-flex align-items-center">
                                    <i class="bi-gift-fill me-2"></i>
                                    <span class="small">Comece agora</span>
                                </span>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/5561981546988?text=Quero dicas de presentes" target="_blank">
                            <button class="btn btn-secondary rounded-pill px-3 mb-2 mb-lg-0">
                                <span class="d-flex align-items-center">
                                    <i class="bi-chat-text-fill me-2"></i>
                                    <span class="small">Fale com um humano</span>
                                </span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container">
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">As melhores dicas de presente para um momento especial </h1>
                        <p class="lead fw-normal text-muted">Como o nosso app você encontra dicas para aquele
                            presente especial.</p>
                        <p class="lead fw-normal text-muted">E não precisa pagar nem instalar nada. Então vem!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <!--
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg>
                        <svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        -->
                        <div class="device-wrapper align-items-center">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-white text-center">
                                    <img src="{{ asset('img/gift.png') }}" style="width: 80%;" class="img-fluid mt-5">
                                    <h3 class="d-none d-lg-block font-alt my-3 mx-3">Este presente vai deixar alguém muito feliz!</h3>
                                    <h6 class="d-lg-none font-alt my-3 mx-3">Este presente vai deixar alguém muito feliz!</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section id="start">
        <div class="container px-5">
            <h2 class="font-alt">Umas perguntas para fazer aquele match</h2>
            <p class="lead fw-normal text-muted mb-5">
                Preencha o que souber para encontrar dicas de presentes especiais
            </p>
            <div class="row gx-5">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <small>@yield('step')</small>
                    <!--        
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#perfil" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Presente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#outras-informacoes" type="button" role="tab" aria-controls="pills-more" aria-selected="false">Pessoa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#contato" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contato</button>
                        </li>
                    </ul>
                    
                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="pills-home-tab">
                    -->
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-gradient-primary-to-secondary text-center py-5">
        <div class="container px-5">
            <div class="text-white small">
                <div class="mb-2">&copy; arrasenopresente.com.br 2021. Todos os direitos reservados</div>
                <a href="#!">Privacidade</a>
                <!--
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                    -->
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>