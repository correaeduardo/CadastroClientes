<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '-' . $foto->getClientOriginalName();
            $foto->move(public_path('fotos'), $fotoName);
            $fotoPath = 'fotos/' . $fotoName;
        }
    
        Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'foto' => $fotoPath,
        ]);

        return redirect()->route('clientes.index');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
    
        if ($request->hasFile('foto')) {
            if ($cliente->foto && file_exists(public_path('fotos/' . $cliente->foto))) {
                unlink(public_path('fotos/' . $cliente->foto));
            }
    
            $foto = $request->file('foto');
            $fotoName = time() . '-' . $foto->getClientOriginalName();
            $foto->move(public_path('fotos'), $fotoName);

            $cliente->foto = 'fotos/' . $fotoName;
        }
    
        $cliente->update();

        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
