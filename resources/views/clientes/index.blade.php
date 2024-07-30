@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
<div class="container">
    <h1 class="my-4">Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Adicionar Cliente</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>
                        <img src="{{ asset('/' . $cliente->foto) }}" alt="Foto" class="img-thumbnail" style="width: 50px;">
                    </td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection