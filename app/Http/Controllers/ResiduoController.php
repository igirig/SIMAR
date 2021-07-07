<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResiduoCreateRequest;
use App\Http\Requests\ResiduoEditRequest;
use App\Models\Residuo;
use Illuminate\Support\Facades\DB;

class ResiduoController extends Controller
{
    public function index()
    {
        $residuos = Residuo::paginate(6);
        return view('residuos.index', compact('residuos'));
    }

    public function create()
    {
        $clases = DB::table('clases_residuo')->orderBy('id')->get();
        $materias = DB::table('estados_residuo')->orderBy('id')->get();

        return view('residuos.create', compact('clases', 'materias'));
    }

    public function store(ResiduoCreateRequest $request)
    {
        $residuo = Residuo::create($request->all());

        return redirect()->route('residuos.show', $residuo->id)->with('success', 'Residuo creada correctamente');
    }

    public function show(Residuo $residuo)
    {
        return view('residuos.show', compact('residuo'));
    }

    public function edit(Residuo $residuo)
    {
        return view('residuos.edit', compact('residuo'));
    }

    public function update(ResiduoEditRequest $request, residuo $residuo)
    {

        $data = $request->only(
            'nombre',
            'corrosivo',
            'reactivo',
            'explosivo',
            'toxico',
            'inflamable',
            'biologico',
            'mezcla',
            'noONU',
            'descripcion',
            'clase_id',
            'materia_id',
        );

        $residuo->update($data);
        return redirect()->route('residuos.show', $residuo->id)->with('success', 'Residuo actualizada correctamente');
    }

    public function destroy(Residuo $residuo)
    {
        $residuo->delete();
        return redirect()->route('residuos.index')->with('sucess', 'Residuo eliminada correctamente');
    }
}