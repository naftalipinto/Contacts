@extends('layouts.template')

@section('title', 'App contactos')

@section('content')
    @if ($get)
        <h1>Buscando por {{ $get }}</h1>
    @endif

    @if (@session('msg'))
        <p>{{ @session('msg') }}</p>
    @endif

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Numero</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($contact as $contact)
                    <tr class="">
                        <td>
                        
                                {{ $contact->getOwner->name}}
                      
                        </td>
                        <td>{{ $contact->number }}</td>
                        <td>
                            <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
