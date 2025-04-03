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

    <main class="mb-5">
        <img src="{{ asset('img/departamentos.png') }}" class="w-100" alt="">
    </main>

    <div class="container">
        <div class="row d-flex g-4 mb-5">
            <div class="col-8">
                <div class="card p-4 shadow-lg border-0 rounded-3">
                    <h2 class="fw-semibold">Secretaria Acadêmica</h2>
                    <hr>
                    <h4 class="fw-semibold mb-3">Horários de Atendimentos</h4>
                    <table class="table table-bordered mb-4">
                        <thead class="table-light">
                            <tr>
                                <th>Segunda-Feira</th>
                                <th>Quarta-Feira</th>
                                <th>Sexta-Feira</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>08h00min. às 09h30min.</td>
                                <td>08h00min. às 09h30min.</td>
                                <td>08h00min. às 09h30min.</td>
                            </tr>
                            <tr>
                                <td>14h30min. às 15h30min.</td>
                                <td>14h30min. às 15h30min.</td>
                                <td>14h30min. às 15h30min.</td>
                            </tr>
                            <tr>
                                <td>19h30min. às 20h30min.</td>
                                <td>19h30min. às 20h30min.</td>
                                <td>19h30min. às 20h30min.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="fw-semibold">Equipe</h4>
                    <p><strong>Diretor de Serviços Acadêmicos:</strong> Ênio Ramos Araújo</p>
                    <p class="mb-4"><strong>Agente Técnico e Administrativo:</strong> Diva Neide Bortoli</p>

                    <h4 class="fw-semibold">Contato</h4>
                    <p><strong>E-mail:</strong> <a href="mailto:e211acad@cps.sp.gov.br">e211acad@cps.sp.gov.br</a></p>
                    <p><strong>Telefones:</strong> (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009</p>
                </div>
            </div>
            <div class="col-4">
                <a href="https://carreiras.cps.sp.gov.br/"><img class="img-fluid" src="{{ asset('img/banner_cps_carreiras.png') }}" alt=""></a>
            </div>
        </div>
    </div>

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