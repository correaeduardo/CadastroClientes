@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{ old('nome', $cliente->nome) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $cliente->email) }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone', $cliente->telefone) }}" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file" name="foto" id="foto">
            @if($cliente->foto)
                <img id="fotoPreview" src="{{ asset('/' . $cliente->foto) }}" alt="Pré-visualização" style="display: block; margin-top: 10px; max-width: 200px;">
            @else
                <img id="fotoPreview" src="" alt="Pré-visualização" style="display: none; margin-top: 10px; max-width: 200px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mr-2">Cancelar</a>
    </form>
</div>

<script src="{{ asset('js/cliente.js') }}"></script>
@endsection
