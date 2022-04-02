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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Está chegando uma data especial e não encontrou um presente para o namorado, para o pai, para o seu chefe. Deixe a nossa inteligência ajudar vc. Nós dê algumas informações e lhe daremos dicas bem legais. Sucesso com o seu presente!" />
    <meta name="keywords" content="presente para namorado, presente para amiga, presente para conhecida, presente masculino, presente para signo, presente de aniversário, o que dar de presente, o que dar de aniversário, " />
    <meta name="author" content="6I tecnologia" />
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
                        <a href="/#start">
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
        <div class="container px-5">
            @yield('content')
        </div>
    </header>
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