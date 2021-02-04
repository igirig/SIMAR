<?php

namespace App\Http\Controllers;

use App\Http\Requests\clienteCreateRequest;
use App\Http\Requests\clienteEditRequest;
use Illuminate\Http\Request;
use App\Models\cliente;

class clienteController extends Controller
{
    public function index()
    {
        $clientes = cliente::paginate(6);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(clienteCreateRequest $request)
    {
        $cliente = cliente::create($request->only('razonSocial'));
        return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente creado correctamente');
    }

    public function show(cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(clienteEditRequest $request, cliente $cliente)
    {
        $data = $request->only('razonSocial');

        $cliente->update($data);
        return redirect()->route('clientes.show', $cliente->id)->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('sucess', 'Cliente eliminado correctamente');
    }
}
