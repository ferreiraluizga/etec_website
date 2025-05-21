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