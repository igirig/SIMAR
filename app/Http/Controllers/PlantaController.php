<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantaCreateRequest;
use App\Http\Requests\PlantaEditRequest;
use App\Models\Planta;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class PlantaController extends Controller
{
    public function index()
    {
        $plantas = Planta::paginate(6);
        return view('plantas.index', compact('plantas'));
    }

    public function forStates($id){

        return DB::select('select * from municipios where estado_id = ?', [$id]);
    }

    public function create()
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();
        //$municipios = DB::select('select * from municipios where estado_id = 1', [1]);

        return view('plantas.create', compact('estados', 'municipios'));
    }

    public function store(PlantaCreateRequest $request)
    {
        $planta = Planta::create($request->all());

        return redirect()->route('plantas.show', $planta->id)->with('success', 'Planta creada correctamente');
    }

    public function show(Planta $planta)
    {
        return view('plantas.show', compact('planta'));
    }

    public function edit(Planta $planta)
    {
        return view('plantas.edit', compact('planta'));
    }

    public function update(PlantaEditRequest $request, planta $planta)
    {

        $data = $request->only('razonSocial',
        'noRegistroAmbiental',
        'calle',
        'noExterior',
        'noInterior',
        'colonia',
        'codigoPostal',
        'estado_id',
        'municipio_id',
        'telefono',
        'correo',);

        $planta->update($data);
        return redirect()->route('plantas.show', $planta->id)->with('success', 'Planta actualizada correctamente');
    }

    public function destroy(Planta $planta)
    {
        $planta->delete();
        return redirect()->route('plantas.index')->with('sucess', 'Planta eliminada correctamente');
    }
}
