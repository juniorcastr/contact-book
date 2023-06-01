<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Criar Novo Contato</h1>

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required minlength="6">
                <small class="form-text text-muted">O nome deve ter no mínimo 6 caracteres.</small>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label">Contato:</label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" maxlength="9" required pattern="[0-9]{9}">
                <small class="form-text text-muted">O contato deve ter exatamente 9 dígitos numéricos.</small>
                @error('contact')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                <small class="form-text text-muted">O email deve ser válido.</small>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
