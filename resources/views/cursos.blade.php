@extends('layouts.layout')
@section('content')
<main class="mb-5">
    <img src="{{ asset('img/course.png') }}" class="w-100" alt="">
</main>

<section class="container d-flex mt-5 mb-5">
    <div class="col-8">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($cursos as $curso)
            <div class="col">
                <div class="card bg-danger text-white card-hover h-100 border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <h4 class="card-title fw-bold">{{ $curso->nome }}</h4>
                        <p class="card-text" style="text-align: justify;">{{ $curso->descricao }}</p>
                        <p class="card-text"><strong>Coordenador de Curso: </strong>{{ $curso->coord }}</p>
                        <button class="btn btn-outline-light">Ver Mais</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-4 ms-3">
        <a href="https://carreiras.cps.sp.gov.br/"><img class="img-fluid" src="{{ asset('img/banner_cps_carreiras.png') }}" alt=""></a>
    </div>
</section>
@endsection