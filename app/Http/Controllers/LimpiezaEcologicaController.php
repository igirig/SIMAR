<?php

namespace App\Http\Controllers;

use App\Models\LimpiezaEcologica;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estacion;
use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Contracts\Session\Session;
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
        $request->session()->flush();
        if($request->inputServiceStation == null){
            return redirect()->route('LE.create')->with('error', "error.");
        }else{
            //Variables con colecciones de objetos que contienen los datos a usar.
            $estacion = Estacion::where('id', $request->inputServiceStation)->get();
            $estado = Estado::where('id', $estacion{0}{'estado_id'})->get('nombre');
            $municipio = Municipio::where('id', $estacion{0}{'municipio_id'})->get('nombre');

            $filename = 'CLE_'.$estacion{0}{'noEstacion'}.rand().'.pdf';
            if($estacion{0}{'noInterior'}==null){
                $direccion = $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'}.', Col: '.$estacion{0}{'colonia'}.', C.P.: '.$estacion{0}{'codigoPostal'}.', '.$municipio{0}->nombre.', '.$estado{0}->nombre;
            }else{
                $direccion = $estacion{0}{'calle'}.', No. Ext.: '.$estacion{0}{'noExterior'}.', No. Int.: '.$estacion{0}{'noInterior'}.', Col: '.$estacion{0}{'colonia'}.', C.P.: '.$estacion{0}{'codigoPostal'}.', '.$municipio{0}->nombre.', '.$estado{0}->nombre;
            }
            

            //Llenado del formulario con datos en un array
            $pdf = new Pdf('../public/pdfs/CLE.pdf');
            $result = $pdf->fillForm([
                'razonSocial_0' => $estacion{0}{'razonSocial'},
                'direccion_0' => $direccion,
                'colonia_0' => $estacion{0}{'colonia'},
                'ciudadPoblacion_0' => $municipio{0}->nombre,
                'estado_0' => $estado{0}->nombre,
                'razonSocial_1' => $estacion{0}{'razonSocial'},
                'direccion_1' => $direccion,
                'colonia_1' => $estacion{0}{'colonia'},
                'ciudadPoblacion_1' => $municipio{0}->nombre,
                'estado_1' => $estado{0}->nombre,
                'razonSocial_2' => $estacion{0}{'razonSocial'},
                'direccion_2' => $direccion,
                'colonia_2' => $estacion{0}{'colonia'},
                'ciudadPoblacion_2' => $municipio{0}->nombre,
                'estado_2' => $estado{0}->nombre,
                'razonSocial_3' => $estacion{0}{'razonSocial'},
                'direccion_3' => $direccion,
                'colonia_3' => $estacion{0}{'colonia'},
                'ciudadPoblacion_3' => $municipio{0}->nombre,
                'estado_3' => $estado{0}->nombre
            ])
            ->needAppearances()
            ->flatten()
            ->saveAs('../pdf_filled/'.$filename);

            if ($result === false) {
                $error = $pdf->getError();
                return redirect()->route('LE.create')->with('errorPDF', $error);
            }else{
                // Almacenamiento del nombre y ruta del archivo en una variable
                $filepath = '../pdf_filled/'.$filename;

                // Headers
                header("Content-Type: application/force-download");
                header('Content-Disposition: attachment; filename="' . $filename . '"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                header("Cache-control: private");
                

                // Se lee el archivo.
                session()->put('pdfgen', 'pdfgen');
                $this -> notificar($filepath);
                @readfile($filepath);
            }
        }
    }

    public function notificar()
    {
        return redirect()->route('LE.create')->with('pdfgen','pdfgen');
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
