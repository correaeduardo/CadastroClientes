@extends('layouts.app')

@section('title', 'Adicionar Cliente')

@section('content')
<div class="container">
    <h1 class="my-4">Adicionar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone') }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file" name="foto" id="foto" required>
            <img id="fotoPreview" src="" alt="Pré-visualização" style="display: none; margin-top: 10px; max-width: 200px;">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
    </form>
</div>

<script src="{{ asset('js/cliente.js') }}"></script>
@endsection
