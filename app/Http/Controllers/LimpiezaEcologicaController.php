<?php

namespace App\Http\Controllers;

use App\Models\LimpiezaEcologica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estacion;
use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;
use mikehaertl\pdftk\Pdf;
class LimpiezaEcologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = LimpiezaEcologica::all();
        //return view('manifiestos.LE', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = LimpiezaEcologica::all(['razonSocial', 'id']);
        return view('manifiestos.LE', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->inputServiceStation == null){
            return redirect()->route('LE.create')->with('error', "Seleccione una opcion valida.");
        }else{
            //Variables con colecciones de objetos que contienen los datos a usar.
            $estacion = Estacion::where('id', $request->inputServiceStation)->get();
            $estado = Estado::where('id', $estacion{0}{'estado_id'})->get('nombre');
            $municipio = Municipio::where('id', $estacion{0}{'municipio_id'})->get('nombre');

            $filename = 'CLE_'.$estacion{0}{'noEstacion'}.'.pdf';
            //$direccion = 

            //Fill form with data array
            $pdf = new Pdf('C:\Users\ElGra\OneDrive\Escritorio\SIMAR\SIMAR\public\pdfs\CLE.pdf');
            $result = $pdf->fillForm([
                'razonSocial_0' => $estacion{0}{'razonSocial'},
                'direccion_0' => $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'},
                'colonia_0' => $estacion{0}{'colonia'},
                'ciudadPoblacion_0' => $municipio{0}->nombre,
                'estado_0' => $estado{0}->nombre,
                'razonSocial_1' => $estacion{0}{'razonSocial'},
                'direccion_1' => $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'},
                'colonia_1' => $estacion{0}{'colonia'},
                'ciudadPoblacion_1' => $municipio{0}->nombre,
                'estado_1' => $estado{0}->nombre,
                'razonSocial_2' => $estacion{0}{'razonSocial'},
                'direccion_2' => $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'},
                'colonia_2' => $estacion{0}{'colonia'},
                'ciudadPoblacion_2' => $municipio{0}->nombre,
                'estado_2' => $estado{0}->nombre,
                'razonSocial_3' => $estacion{0}{'razonSocial'},
                'direccion_3' => $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'},
                'colonia_3' => $estacion{0}{'colonia'},
                'ciudadPoblacion_3' => $municipio{0}->nombre,
                'estado_3' => $estado{0}->nombre
            ])
            ->needAppearances()
            ->flatten()
            ->saveAs('C:\Users\ElGra\OneDrive\Escritorio\SIMAR\SIMAR\public\pdfs'.$filename);

            if ($result === false) {
                $error = $pdf->getError();
                var_dump($error);
            }else{
                return redirect()->route('LE.create');
            }
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function show(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function edit(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LimpiezaEcologica  $limpiezaEcologica
     * @return \Illuminate\Http\Response
     */
    public function destroy(LimpiezaEcologica $limpiezaEcologica)
    {
        //
    }
}
