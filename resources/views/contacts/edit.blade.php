<!-- resources/views/contacts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Contato</h1>

        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT
