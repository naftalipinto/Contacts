@extends('layouts.template')

@section('title', 'App contactos')

@section('content')
    <h1>Criar Pessoa</h1>

    <form action="{{ route('person.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
