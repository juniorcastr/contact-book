@extends('layouts.layout')

@section('content')
    <body>
    <div class="container">
        <h1>Editar Contato</h1>

        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
                <small class="form-text text-muted">O nome deve ser preenchido.</small>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label">Contato:</label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $contact->contact) }}" maxlength="9" required>
                <small class="form-text text-muted">O contato deve ser preenchido.</small>
                @error('contact')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                <small class="form-text text-muted">O email deve ser válido.</small>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection
