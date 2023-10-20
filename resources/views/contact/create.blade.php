@extends('layouts.template')

@section('title', 'App contactos')

@section('content')
    <h1>Criar Contacto</h1>

    <form action="{{ route('contact.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
          <select name="" id="">
            @foreach($person as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Numero</label>
            <input type="text" class="form-control" name="number" aria-describedby="helpId" placeholder="">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
