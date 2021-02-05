<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantaCreateRequest;
use App\Http\Requests\PlantaEditRequest;
use Illuminate\Http\Request;
use App\Models\Planta;
use Illuminate\Support\Facades\DB;

class PlantaController extends Controller
{
    public function index()
    {
        $plantas = Planta::paginate(6);
        return view('plantas.index', compact('plantas'));
    }

    public function create()
    {
        $estados = DB::table('estados')->get();
        $municipios = DB::table('municipios')->get();

        return view('plantas.create', compact('estados', 'municipios'));
    }

    public function store(PlantaCreateRequest $request)
    {
        $planta = Planta::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('plantas.show', $planta->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(Planta $planta)
    {
        return view('plantas.show', compact('planta'));
    }

    public function edit(planta $planta)
    {
        return view('plantas.edit', compact('planta'));
    }

    public function update(PlantaEditRequest $request, planta $planta)
    {
        $data = $request->only('name', 'email');
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($password);

        $planta->update($data);
        return redirect()->route('plantas.show', $planta->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(Planta $planta)
    {
        $planta->delete();
        return redirect()->route('plantas.index')->with('sucess', 'Usuario eliminado correctamente');
    }
}
