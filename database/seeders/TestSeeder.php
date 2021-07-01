<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'id' => '1',
			'name' =>  'Administrador',
			'email' =>  'admin@admin',
			'password' => bcrypt('password'),
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('clases_residuo')->insert([
			'id' => '1',
			'nombre' =>  'Clase 3',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '2',
			'nombre' =>  'Clase 6.1',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '3',
			'nombre' =>  'Clase 6.2',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '4',
			'nombre' =>  'Clase 9',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '5',
			'nombre' =>  'Clase 10',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '6',
			'nombre' =>  'Clase 12',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '1',
			'nombre' =>  'Sólido',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '2',
			'nombre' =>  'Líquido',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '3',
			'nombre' =>  'Gaseoso',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '1',
			'nombre' =>  'Camión pesado',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '2',
			'nombre' =>  'Camión de volteo',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '3',
			'nombre' =>  'Semi-remolque',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '4',
			'nombre' =>  'Remolque pesado',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '1',
			'nombre' =>  '1 Tonelada',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '2',
			'nombre' =>  '1.5 Toneladas',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '3',
			'nombre' =>  '2 Toneladas',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '4',
			'nombre' =>  '2.5 Toneladas',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '5',
			'nombre' =>  '3 Toneladas',
		]);

		DB::table('formatos')->insert([
			'id' => '1',
			'nombre' =>  'Manifiesto de entrega, transporte y recepción de residuos peligrosos',
		]);

		DB::table('formatos')->insert([
			'id' => '2',
			'nombre' =>  'Embarque de entrega, transporte y recepción de residuos de manejo especial',
		]);

		DB::table('formatos')->insert([
			'id' => '3',
			'nombre' =>  'Certificado de limpieza ecológica',
		]);

		DB::table('estadoServicios')->insert([
			'id' => '1',
			'nombre' =>  'En proceso',
		]);

		DB::table('estadoServicios')->insert([
			'id' => '2',
			'nombre' =>  'Completado',
		]);

		DB::table('estadoServicios')->insert([
			'id' => '3',
			'nombre' =>  'Cancelado',
		]);

		DB::table('clientes')->insert([
			'id' => '1',
			'razonSocial' =>  'TECNOLÓGICO NACIONAL DE MÉXICO',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('clientes')->insert([
			'id' => '2',
			'razonSocial' =>  'COMISIÓN FEDERAL DE ELECTRICIDAD',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '1',
			'cliente_id' => '1',
			'nombre' =>  'INSTITUTO TECNOLÓGICO SUPERIOR DE XALAPA',
			'noRegistroAmbiental' =>  'ITSX12345678',
			'calle' =>  'Sección 5A Reserva Territorial',
			'colonia' =>  'Santa Bárbara',
			'codigoPostal' =>  '91096',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2281650525',
			'correo' =>  'serviciosAmbientales@itsx.edu.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '2',
			'cliente_id' => '1',
			'nombre' =>  'INSTITUTO TECNOLÓGICO DE VERACRUZ',
			'noRegistroAmbiental' =>  'ITV123456789',
			'calle' =>  'Av. Miguel Angel de Quevedo',
			'noExterior' =>  '2779',
			'colonia' =>  'Formando Hogar',
			'codigoPostal' =>  '91897',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2299341500',
			'correo' =>  'serviciosAmbientales@itv.edu.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '3',
			'cliente_id' => '2',
			'nombre' =>  'DIVISIÓN ORIENTE S.E. XALAPA II',
			'noRegistroAmbiental' =>  'DOSE23456789',
			'calle' =>  'Adolfo López Mateos',
			'noExterior' =>  '2779',
			'colonia' =>  'Emiliano Zapata',
			'codigoPostal' =>  '91373',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2211547662',
			'correo' =>  'cfeXalapa2@live.com.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '4',
			'cliente_id' => '2',
			'nombre' =>  'BANDERILLA',
			'noRegistroAmbiental' =>  'BAN4E3453789',
			'calle' =>  'Miguel Hidalgo',
			'noExterior' => '44',
			'colonia' =>  '21 de Marzo',
			'codigoPostal' =>  '91231',
			'estado_id' =>  '30',
			'municipio_id' =>  '2107',
			'telefono' =>  '2288524544',
			'correo' =>  'cfeBanderilla@live.com.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '1',
			'nombre' => 'CULTIVOS Y CEPAS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'noONU' => 'UN-3291',
			'descripcion' => 'Desechos clínicos, N.E.P.',
			'clase_id' =>  '3',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '2',
			'nombre' => 'OBJETOS PUNZOCORTANTES',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'noONU' => 'UN-3291',
			'descripcion' => 'Desechos clínicos, N.E.P.',
			'clase_id' =>  '3',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '3',
			'nombre' =>  'RESIDUOS PATOLÓGICOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'noONU' => 'UN-3291',
			'descripcion' => 'Desechos clínicos, N.E.P.',
			'clase_id' =>  '3',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '4',
			'nombre' =>  'RESIDUOS NO ANATÓMICOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'noONU' => 'UN-3291',
			'descripcion' => 'Desechos clínicos, N.E.P.',
			'clase_id' =>  '3',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '5',
			'nombre' =>  'SANGRE',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'noONU' => 'UN-3291',
			'descripcion' => 'Desechos clínicos, N.E.P.',
			'clase_id' =>  '3',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '6',
			'nombre' =>  'ACEITE LUBRICANTE GASTADO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '1',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'Residuo Peligroso, Líquido, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '7',
			'nombre' =>  'ENVACES VACÍOS DE PLÁSTICO QUE CONTUVIERON ACEITE, ANTICONGELANTE, LÍQUIDO DE FRENOS, ETC.',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'Residuo Peligroso, Sólido, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '8',
			'nombre' =>  'ENVASES VACÍOS METÁLICOS QUE CONTUVIERON ACEITE, AEREOSOLES, ETC.',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'Residuo Peligroso, Sólido, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '9',
			'nombre' =>  'ENVACES VACÍOS DE VIDRIO QUE CONTUVIERON...',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'Residuo Peligroso, Sólido, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '10',
			'nombre' =>  'ETILENGLICOL (ANTICONGELANTE)',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'Residuo Peligroso, Líquido, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '11',
			'nombre' =>  'ALCOHOL USADO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '1',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-1987',
			'descripcion' => 'ALCOHOLES, N.E.P.',
			'clase_id' =>  '1',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '12',
			'nombre' =>  'FÁRMACO CADUCO LÍQUIDO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-1851',
			'descripcion' => 'MEDICAMENTO TÓXICO LÍQUIDO, N.E.P.',
			'clase_id' =>  '2',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '13',
			'nombre' =>  'FÁRMACO CADUCO SÓLIDO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3249',
			'descripcion' => 'MEDICAMENTO TÓXICO SÓLIDO, N.E.P.',
			'clase_id' =>  '2',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '14',
			'nombre' =>  'RESIDUO SÓLIDO IMPREGNADO CON ACEITE Y GRASAS (TRAPOS, ESTOPAS, ETC.)',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '1',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '15',
			'nombre' =>  'LODOS ACEITOSOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '16',
			'nombre' =>  'LÁMPARAS FLUORESCENTES FUNDIDAS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '17',
			'nombre' =>  'BALASTROS USADOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '5',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '18',
			'nombre' =>  'AGUA CON ACEITE',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '19',
			'nombre' =>  'FILTROS DE ACEITE USADOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '6',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '20',
			'nombre' =>  'SUSTANCIA ORGÁNICA LÍQUIDA',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '21',
			'nombre' =>  'METAL PESADO LÍQUIDOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '22',
			'nombre' =>  'ACIDO LÍQUIDO',
			'corrosivo' => '1',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '23',
			'nombre' =>  'SUSTANCIA INORGÁNICA LÍQUIDA',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '2',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '24',
			'nombre' =>  'SUSTANCIA ORGÁNICA SÓLIDO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '25',
			'nombre' =>  'SUSTANCIA INORGÁNICA SÓLIDO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'noONU' => 'UN-3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
			'clase_id' =>  '4',
			'materia_id' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('transportistas')->insert([
			'id' => '1',
			'razonSocial' =>  'SISTEMAS EN MANEJO Y ADMINISTRACION DE RESIDUOS, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'SMAR12344567',
			'calle' =>  'Av. Pipila',
			'noExterior' =>  '271',
			'colonia' =>  'José Cardel',
			'codigoPostal' =>  '91097',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2288244169',
			'correo' =>  'grupoSimar@hotmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('transportistas')->insert([
			'id' => '2',
			'razonSocial' =>  'SISTEMAS DE RESIDUOS RENOBABLES, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'SRR012344567',
			'calle' =>  'Juan Alberto Mendez',
			'noExterior' =>  '27',
			'colonia' =>  'Revolución',
			'codigoPostal' =>  '91077',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2289464419',
			'correo' =>  'renobablesRes@gmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '1',
			'transportista_id' =>  '1',
			'noPermisoSCT' =>  'SCT-08-001-C',
			'tipo_id' =>  '1',
			'capacidad_id' =>  '5',
			'noPlaca' =>  'AXE-125-G',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '2',
			'transportista_id' =>  '1',
			'noPermisoSCT' =>  'SCT-32-331-D',
			'tipo_id' =>  '2',
			'capacidad_id' =>  '3',
			'noPlaca' =>  'BYC-567-I',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '3',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT-75-461-Q',
			'tipo_id' =>  '3',
			'capacidad_id' =>  '1',
			'noPlaca' =>  'WER-526-M',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '4',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT-64-743-S',
			'tipo_id' =>  '4',
			'capacidad_id' =>  '4',
			'noPlaca' =>  'ERE-002-S',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('plantas')->insert([
			'id' => '1',
			'razonSocial' =>  'ECOLTEC, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'ECO213945789',
			'calle' =>  'Av. Fernando Gutierrez Barrios',
			'noExterior' =>  '742',
			'colonia' =>  'Cruz Verde',
			'codigoPostal' =>  '63192',
			'estado_id' =>  '11',
			'municipio_id' =>  '347',
			'telefono' =>  '2136436435',
			'correo' =>  'ecoltec@hotmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('plantas')->insert([
			'id' => '2',
			'razonSocial' =>  'CONFINES ECOLÓGICOS, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'CESA43456789',
			'calle' =>  'Guadalupe victoria',
			'noExterior' =>  '64',
			'colonia' =>  'Tecamazuchitl',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '13',
			'municipio_id' =>  '482',
			'telefono' =>  '2224335381',
			'correo' =>  'confinesEcologicos@outlook.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('estaciones')->insert([
			'id' => '1',
			'razonSocial' =>  'AUTOBUSES DE ORIENTE ADO, S.A. DE C.V.',
			'noEstacion' =>  'J01003',
			'calle' =>  'Pineda',
			'noExterior' =>  '3242',
			'colonia' =>  'Arquitectos',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2227544563',
			'correo' =>  'adoVeracruz@gmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('estaciones')->insert([
			'id' => '2',
			'razonSocial' =>  'FERCHE GAS CONTEPEC, S.A. DE C.V.',
			'noEstacion' =>  'J04122',
			'calle' =>  'Miguel Alemán',
			'noExterior' =>  '843',
			'colonia' =>  'Floresta',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '16',
			'municipio_id' =>  '798',
			'telefono' =>  '2364563642',
			'correo' =>  'fercheGasContepec@live.com.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}
