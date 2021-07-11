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
			'nombre' =>  'CLASE 3',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '2',
			'nombre' =>  'CLASE 6.1',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '3',
			'nombre' =>  'CLASE 6.2',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '4',
			'nombre' =>  'CLASE 9',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '5',
			'nombre' =>  'CLASE 10',
		]);

		DB::table('clases_residuo')->insert([
			'id' => '6',
			'nombre' =>  'CLASE 12',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '1',
			'nombre' =>  'SÓLIDO',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '2',
			'nombre' =>  'LÍQUIDO',
		]);

		DB::table('estados_residuo')->insert([
			'id' => '3',
			'nombre' =>  'GASEOSO',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '1',
			'nombre' =>  'CAMIÓN PESADO',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '2',
			'nombre' =>  'CAMIÓN DE VOLTEO',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '3',
			'nombre' =>  'SEMI-REMOLQUE',
		]);

		DB::table('tipos_vehiculo')->insert([
			'id' => '4',
			'nombre' =>  'REMOLQUE PESADO',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '1',
			'nombre' =>  '1 TONELADA',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '2',
			'nombre' =>  '1.5 TONELADAS',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '3',
			'nombre' =>  '2 TONELADAS',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '4',
			'nombre' =>  '2.5 TONELADAS',
		]);

		DB::table('capacidades_vehiculo')->insert([
			'id' => '5',
			'nombre' =>  '3 TONELADAS',
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
			'calle' =>  'SECCIÓN 5A RESERVA TERRITORIAL',
			'colonia' =>  'SANTA BÁRBARA',
			'codigoPostal' =>  '91096',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2281650525',
			'correo' =>  'serviciosambientales@itsx.edu.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '2',
			'cliente_id' => '1',
			'nombre' =>  'INSTITUTO TECNOLÓGICO DE VERACRUZ',
			'noRegistroAmbiental' =>  'ITV123456789',
			'calle' =>  'AV. MIGUEL ANGEL DE QUEVEDO',
			'noExterior' =>  '2779',
			'colonia' =>  'FORMANDO HOGAR',
			'codigoPostal' =>  '91897',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2299341500',
			'extension' =>  '123',
			'correo' =>  'serviciosambientales@itv.edu.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '3',
			'cliente_id' => '2',
			'nombre' =>  'DIVISIÓN ORIENTE S.E. XALAPA II',
			'noRegistroAmbiental' =>  'DOSE23456789',
			'calle' =>  'ADOLFO LÓPEZ MATEOS',
			'noExterior' =>  '2779',
			'colonia' =>  'EMILIANO ZAPATA',
			'codigoPostal' =>  '91373',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2211547662',
			'correo' =>  'cfexalapa2@live.com.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '4',
			'cliente_id' => '2',
			'nombre' =>  'BANDERILLA',
			'noRegistroAmbiental' =>  'BAN4E3453789',
			'calle' =>  'MIGUEL HIDALGO',
			'noExterior' => '44',
			'colonia' =>  '21 DE MARZO',
			'codigoPostal' =>  '91231',
			'estado_id' =>  '30',
			'municipio_id' =>  '2107',
			'telefono' =>  '2288524544',
			'extension' =>  '2131',
			'correo' =>  'cfebanderilla@live.com.mx',
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
			'noONU' => 'UN3291',
			'descripcion' => 'DESECHOS CLÍNICOS, N.E.P.',
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
			'noONU' => 'UN3291',
			'descripcion' => 'DESECHOS CLÍNICOS, N.E.P.',
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
			'noONU' => 'UN3291',
			'descripcion' => 'DESECHOS CLÍNICOS, N.E.P.',
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
			'noONU' => 'UN3291',
			'descripcion' => 'DESECHOS CLÍNICOS, N.E.P.',
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
			'noONU' => 'UN3291',
			'descripcion' => 'DESECHOS CLÍNICOS, N.E.P.',
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
			'noONU' => 'UN3082',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
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
			'noONU' => 'UN3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
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
			'noONU' => 'UN3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
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
			'noONU' => 'UN3077',
			'descripcion' => 'RESIDUO PELIGROSO, SÓLIDO, N.E.P.',
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
			'noONU' => 'UN3082',
			'descripcion' => 'RESIDUO PELIGROSO, LÍQUIDO, N.E.P.',
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
			'noONU' => 'UN1987',
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
			'noONU' => 'UN1851',
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
			'noONU' => 'UN3249',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3082',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3082',
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
			'noONU' => 'UN3082',
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
			'noONU' => 'UN3082',
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
			'noONU' => 'UN3082',
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
			'noONU' => 'UN3077',
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
			'noONU' => 'UN3077',
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
			'calle' =>  'AV. PIPILA',
			'noExterior' =>  '271',
			'colonia' =>  'JOSÉ CARDEL',
			'codigoPostal' =>  '91097',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2288244169',
			'correo' =>  'gruposimar@hotmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('transportistas')->insert([
			'id' => '2',
			'razonSocial' =>  'SISTEMAS DE RESIDUOS RENOBABLES, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'SRR012344567',
			'calle' =>  'JUAN ALBERTO MENDEZ',
			'noExterior' =>  '27',
			'colonia' =>  'REVOLUCIÓN',
			'codigoPostal' =>  '91077',
			'estado_id' =>  '30',
			'municipio_id' =>  '2168',
			'telefono' =>  '2289464419',
			'extension' =>  '49',
			'correo' =>  'renobablesres@gmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '1',
			'transportista_id' =>  '1',
			'noPermisoSCT' =>  'SCT08001C',
			'tipo_id' =>  '1',
			'capacidad_id' =>  '5',
			'noPlaca' =>  'AXE125G',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '2',
			'transportista_id' =>  '1',
			'noPermisoSCT' =>  'SCT32331D',
			'tipo_id' =>  '2',
			'capacidad_id' =>  '3',
			'noPlaca' =>  'BYC567I',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '3',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT75461Q',
			'tipo_id' =>  '3',
			'capacidad_id' =>  '1',
			'noPlaca' =>  'WER526M',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '4',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT64743S',
			'tipo_id' =>  '4',
			'capacidad_id' =>  '4',
			'noPlaca' =>  'ERE002S',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('plantas')->insert([
			'id' => '1',
			'razonSocial' =>  'ECOLTEC, S.A. DE C.V.',
			'noRegistroAmbiental' =>  'ECO213945789',
			'calle' =>  'AV. FERNANDO GUTIERREZ BARRIOS',
			'noExterior' =>  '742',
			'colonia' =>  'CRUZ VERDE',
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
			'calle' =>  'GUADALUPE VICTORIA',
			'noExterior' =>  '64',
			'colonia' =>  'TECAMAZUCHITL',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '13',
			'municipio_id' =>  '482',
			'telefono' =>  '2224335381',
			'extension' =>  '562',
			'correo' =>  'confinesecologicos@outlook.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('estaciones')->insert([
			'id' => '1',
			'razonSocial' =>  'AUTOBUSES DE ORIENTE ADO, S.A. DE C.V.',
			'noEstacion' =>  'J01003',
			'calle' =>  'PINEDA',
			'noExterior' =>  '3242',
			'colonia' =>  'ARQUITECTOS',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '30',
			'municipio_id' =>  '2274',
			'telefono' =>  '2227544563',
			'correo' =>  'adoveracruz@gmail.com',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('estaciones')->insert([
			'id' => '2',
			'razonSocial' =>  'FERCHE GAS CONTEPEC, S.A. DE C.V.',
			'noEstacion' =>  'J04122',
			'calle' =>  'MIGUEL ALEMÁN',
			'noExterior' =>  '843',
			'colonia' =>  'FLORESTA',
			'codigoPostal' =>  '92321',
			'estado_id' =>  '16',
			'municipio_id' =>  '798',
			'telefono' =>  '2364563642',
			'extension' =>  '5731',
			'correo' =>  'ferchegascontepec@live.com.mx',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}
