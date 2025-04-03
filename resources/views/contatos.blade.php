<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Routing Project</title>
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

    <main class="container mb-5 mt-5">
        <h2 class="text-center mb-4 fw-semibold display-4">Contato</h2>
        <form class="row g-3">
            <div class="col-md-6 col-12">
                <label for="validationCustom01" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo">
            </div>
            <div class="col-md-6 col-12">
                <label for="validationCustom01" class="form-label">E-Mail</label>
                <input type="text" class="form-control" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="col-12">
                <label for="validationCustom01" class="form-label">Mensagem</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Digite sua mensagem"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-danger" type="submit">Enviar Mensagem</button>
            </div>
        </form>
    </main>

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