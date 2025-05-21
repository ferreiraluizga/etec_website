@extends('layouts.layout')
@section('content')
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
@endsection