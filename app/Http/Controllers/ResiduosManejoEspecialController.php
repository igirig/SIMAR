<?php

namespace App\Http\Controllers;

use App\Models\ResiduosManejoEspecial;
use App\Models\Transportista;
use App\Models\Planta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mikehaertl\pdftk\Pdf;
use App\Models\Residuo;
use App\Models\Estacion;
use App\Models\Municipio;
use App\Models\Estado;
use App\Models\Sucursal;
use App\Models\Vehiculo;
use App\Models\Tipo_vehiculo;
use SebastianBergmann\Environment\Console;

class ResiduosManejoEspecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::all(['nombre', 'id']);
        $transportistas = Transportista::all(['razonSocial', 'id']);
        $plantas = Planta::all(['razonSocial', 'id']);
        $residuos = Residuo::all(['nombre','id']);  
        $vehiculos = Vehiculo::all(['noPlaca','id']);
        $municipios = Municipio::all(['nombre', 'id']);
        return view('manifiestos.RME', compact('sucursales', 'transportistas', 'plantas', 'residuos', 'vehiculos', 'municipios'));
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
        if($request->inputGenerator == null){
            return redirect()->route('RME.create')->with('error', "error.");
        }
        else if($request->inputTransportist == null){
            return redirect()->route('RME.create')->with('error', "error.");
        }
        else if($request->inputDestinatario == null){
            return redirect()->route('RME.create')->with('error', "error.");
        }
        else if($request->inputVehicle == null){
            return redirect()->route('RME.create')->with('error', "error.");
        }
        else if($request->inputResiduo0 == null){
            return redirect()->route('RME.create')->with('error', "error.");
        }
        
        else{
            
            //Variables con colecciones de objetos que contienen los datos a usar.

            
            $generador = Sucursal::where('id', $request->inputGenerator)->get();
            $estado_gen = Estado::where('id', $generador{0}{'estado_id'})->get('nombre');    
            $municipio_gen = Municipio::where('id', $generador{0}{'municipio_id'})->get('nombre');
            $transportista = Transportista::where('id', $request->inputTransportist)->get();
            $estado_tra = Estado::where('id', $transportista{0}{'estado_id'})->get('nombre');    
            $municipio_tra = Municipio::where('id', $transportista{0}{'municipio_id'})->get('nombre');
            $destinatario = Planta::where('id', $request->inputDestinatario)->get();
            $estado_des = Estado::where('id', $destinatario{0}{'estado_id'})->get('nombre');    
            $municipio_des = Municipio::where('id', $destinatario{0}{'municipio_id'})->get('nombre');
            $vehiculo = Vehiculo::where('id', $request->inputVehicle)->get();
            $tipoVehiculo = Tipo_vehiculo::where('id', $vehiculo{0}{'tipo_id'})->get('nombre');

            $filename = 'RME_'.$generador{0}{'noRegistroAmbiental'}.rand().'.pdf';

            if($generador{0}{'noInterior'} == NULL){
                $noInt = 's/n';
            }else{
                $noInt = $generador{0}{'noInterior'};
            }

            //Llenado del formulario con datos en un array
            $pdf = new Pdf('../public/pdfs/ERME.pdf');
            $result = $pdf->fillForm([
                'numRegistroAmbientalGen_0' => $generador{0}{'noRegistroAmbiental'},
                'razonSocialGenerador_0' => $generador{0}{'nombre'},
                'codigoPostal_0' => $generador{0}{'codigoPostal'},
                'calle_0' => $generador{0}{'calle'},
                'numExt_0' => $generador{0}{'noExterior'},
                'numInt_0' => $noInt,
                'colonia_0' => $generador{0}{'colonia'},
                'municipioDelegacion_0' => $municipio_gen{0}->nombre,
                'estado_0' => $estado_gen{0}->nombre,
                'telefono_0' => $generador{0}{'telefono'},
                'correoElectronico_0' => $generador{0}{'correo'},
                'razonSocialTransportista_0' => $transportista{0}{'razonSocial'},
                'codigoPostalTransportista_0' => $transportista{0}{'codigoPostal'},
                'calleTransportista_0' => $transportista{0}{'calle'},
                'numExtTransportista_0' => $transportista{0}{'noExterior'},
                'numIntTransportista_0' => $transportista{0}{'noInterior'},
                'coloniaTransportista_0' => $transportista{0}{'colonia'},
                'municipioTransportista_0' => $municipio_tra{0}->nombre,
                'estadoTransportista_0' => $estado_gen{0}->nombre,
                'telefonoTransportista_0' => $transportista{0}{'telefono'},
                'correoElectronicoTransportista_0' => $transportista{0}{'correo'},
                'razonSocialDestinatario_0' => $destinatario{0}{'razonSocial'},
                'codigoPostalDestinatario_0' => $destinatario{0}{'codigoPostal'},
                'calleDestinatario_0' => $destinatario{0}{'calle'},
                'numExtDestinatario_0' => $destinatario{0}{'noExterior'},
                'numIntDestinatario_0' => $destinatario{0}{'noInterior'},
                'coloniaDestinatario_0' => $destinatario{0}{'colonia'},
                'municipioDestinatario_0' => $municipio_des{0}->nombre,
                'estadoDestinatario_0' => $estado_des{0}->nombre,
                'telefonoDestinatario_0' => $destinatario{0}{'telefono'},
                'correoElectronicoDestinatario_0' => $destinatario{0}{'correo'},
                'numAutorizacionDestinatario_0' => $destinatario{0}{'noRegistroAmbiental'},
                'numAutorizacion_0' => $vehiculo{0}{'noPermisoSCT'},
                'tipoVehiculo_0' => $tipoVehiculo{0}->nombre,
                'numPlaca_0' => $vehiculo{0}{'noPlaca'},
            ])
            ->needAppearances()
            ->flatten()
            ->saveAs('../pdf_filled/'.$filename);

            if ($result === false) {
                $error = $pdf->getError();
                return redirect()->route('RME.create')->with('error', "error.");
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
                exit();
                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function show(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function edit(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResiduosManejoEspecial  $residuosManejoEspecial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResiduosManejoEspecial $residuosManejoEspecial)
    {
        //
    }

    
}
