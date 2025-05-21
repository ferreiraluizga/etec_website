@extends('layouts.layout')
@section('content')
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
@endsection