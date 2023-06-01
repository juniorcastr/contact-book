@extends('layouts.layout')

@section('content')
    <body>
    <div class="container">
        <h1>Detalhes do Contato</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <p class="card-text"><strong>Contato:</strong> {{ $contact->contact }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
            </div>
        </div>
        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-success mt-3">Editar</a>
        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Tem certeza de que deseja excluir este contato?')">Excluir</button>
        </form>

        <a href="{{ route('contact.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>

@endsection
