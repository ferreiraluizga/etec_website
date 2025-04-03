<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <header class="sticky-top bg-danger shadow-lg">
        <nav class="navbar px-5 py-3 container">
            <div class="container-fluid row align-items-center">
                <div class="col-4 d-flex fw-semibold text-white">
                    <div class="col-4 text-center">
                        <a class="nav-link fw-semibold" aria-current="page" href="{{ route('cursos') }}">Cursos</a>
                    </div>
                    <div class="col-4">
                        <a class="nav-link fw-semibold" aria-current="page" href="{{ route('departamentos') }}">Departamentos</a>
                    </div>
                    <div class="col-4 text-end">
                        <a class="nav-link fw-semibold" href="{{ route('contatos') }}">Contato</a>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/cps_logo_branca.png') }}" width="120"
                            alt=""></a>
                </div>
                <div class="col-4 d-flex justify-content-end">
                    <div class="input-group" style="max-width: 300px;">
                        <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar"
                            aria-describedby="button-addon2">
                        <button class="btn btn-light" type="button" id="button-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="mb-5">
        <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner_one.png') }}" class=" d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner_two.png') }}" class=" d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner_three.png') }}" class=" d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-4 fw-semibold">Sobre a ETEC Zona Leste</h2>
                <p>A ETEC Zona Leste é uma instituição de ensino técnico referência na região, oferecendo cursos de alta qualidade para a formação profissional de jovens e adultos. Nossa missão é proporcionar educação inovadora e acessível, preparando os alunos para o mercado de trabalho e para o ensino superior.</p>
                <p>Contamos com uma equipe de professores altamente qualificados, laboratórios modernos e parcerias com empresas para estágios e oportunidades profissionais.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/about_us.jpg') }}" alt="ETEC Zona Leste" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <h2 class="mb-4 fw-semibold">Eventos</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/feira_tecnologica.jpeg') }}" class="card-img-top" alt="Evento 1">
                    <div class="card-body">
                        <h5 class="card-title">Feira Tecnológica</h5>
                        <p class="card-text">Ocorrendo no final do 2º semestre, é uma feira de exposições tecnológicas e inovações desenvolvidas por alunos da ETEC Zona Leste</p>
                        <a href="#" class="btn btn-danger">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('img/feira_nacoes.jpg') }}" class="card-img-top" alt="Evento 2">
                    <div class="card-body">
                        <h5 class="card-title">Feira das Nações</h5>
                        <p class="card-text">Ocorrida no final do 1º semestre, é uma feira para incentivar a diversidade cultural em nosso país.</p>
                        <a href="#" class="btn btn-danger">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <h2 class="mb-4 fw-semibold">Localização</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2589435853065!2d-46.478386925845825!3d-23.523187260188628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1743604716852!5m2!1spt-BR!2sbr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer class="bg-danger text-white shadow-lg pt-4">
        <div class="container text-center text-md-start">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="fw-bold">ETEC Zona Leste</h5>
                    <a class="link-light" href="#"><i class="bi bi-geo-alt me-2"></i>Avenida Águia de Haia, 2.633 -
                        Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</a>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Horário de Funcionamento</h5>
                    <p><i class="bi bi-clock me-2"></i>Segunda à Sexta: 09h - 21h</p>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Contatos</h5>
                    <p><i class="bi bi-telephone me-2"></i>(11) 2045-4000 / 2045-4016</p>
                    <p><i class="bi bi-envelope me-2"></i>e211dir@cps.sp.gov.br</p>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold">Redes Sociais</h5>
                    <a href="https://www.facebook.com/Eteczonalesteoficial/?locale=pt_BR" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://www.instagram.com/eteczonalesteoficial" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="https://www.youtube.com/@etecdazonaleste2949" class="text-white me-3"><i class="bi bi-youtube fs-4"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=551120454012" class="text-white me-3"><i class="bi bi-whatsapp fs-4"></i></a>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center pb-3">
                <p class="mb-0">&copy; ferreiraluizga, 2025 - Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>