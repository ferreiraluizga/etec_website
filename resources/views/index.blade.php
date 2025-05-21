@extends('layouts.app')
@section('content')
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
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($eventos as $evento)
        <div class="col">
            <div class="card bg-danger text-white card-hover h-100 border-0 rounded-3 shadow-lg">
                <div class="card-body p-4">
                    <h4 class="card-title fw-bold">{{ $evento->nome }}</h4>
                    <p class="card-text" style="text-align: justify;">{{ $evento->descricao }}</p>
                    <p class="card-text"><strong>Data do Evento: </strong>{{ \Carbon\Carbon::parse($evento->data)->translatedFormat('d \d\e F \d\e Y') }}</p>
                    <button class="btn btn-outline-light">Ver Mais</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="container mb-5">
    <h2 class="mb-4 fw-semibold">Localização</h2>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2589435853065!2d-46.478386925845825!3d-23.523187260188628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1743604716852!5m2!1spt-BR!2sbr"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection