@extends('layouts.template')
@section('title', 'App contactos')
@section('content')

    <form action="{{ route('contact.show', $contact->id) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{ $contact->name }} ""helpId" placeholder="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Numero</label>
            <input type="text" class="form-control" name="number" value="{{ $contact->number }}" placeholder="">
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
