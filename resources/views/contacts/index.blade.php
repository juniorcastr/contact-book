@extends('layouts.layout')

@section('content')
    <body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1>Lista de Contatos</h1>

        <a href="{{ route('contact.create') }}" class="btn btn-primary mb-3">Criar Novo Contato</a>

        @if(count($contacts) > 0)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Contato</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->contact }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-primary">Visualizar</a>
                                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-success">Editar</a>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza de que deseja excluir este contato?')">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $contacts->links() }}

        @else
            <p>Nenhum contato encontrado.</p>
        @endif
    </div>
    </body>
@endsection
