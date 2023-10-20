@extends('layouts.template')
@section('title', 'App contactos')
@section('content')

    <form action="{{ route('person.show', $person->id) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $person->name }} ""helpId" placeholder="">
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
