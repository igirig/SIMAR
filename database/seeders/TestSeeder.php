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
			'razonSocial' =>  'COMISION FEDERAL DE ELECTRICIDAD',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('sucursales')->insert([
			'id' => '1',
			'cliente_id' =>  '1',
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
			'cliente_id' =>  '1',
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
			'cliente_id' =>  '2',
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
			'cliente_id' =>  '2',
			'nombre' =>  'BANDERILLA',
			'noRegistroAmbiental' =>  'BAN4E3453789',
			'calle' =>  'Miguel Hidalgo',
			'noExterior' =>  '44',
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
			'nombre' =>  'LODOS DE TANQUES DE ALMACENAMIENTO DE HIDROCARBUROS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '1',
			'toxico' => '0',
			'inflamable' => '1',
			'biologico' => '0',
			'mezcla' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '2',
			'nombre' =>  'ACEITE INDUSTRIAL USADO',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '1',
			'biologico' => '0',
			'mezcla' => '1',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '3',
			'nombre' =>  'PLASTICO CONTAMINADO DE RESIDUOS ORGANICOS',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '0',
			'inflamable' => '0',
			'biologico' => '1',
			'mezcla' => '0',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('residuos')->insert([
			'id' => '4',
			'nombre' =>  'RESIDUOS DE TINTA INDUSTRIAL',
			'corrosivo' => '0',
			'reactivo' => '0',
			'explosivo' => '0',
			'toxico' => '1',
			'inflamable' => '0',
			'biologico' => '0',
			'mezcla' => '0',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('transportistas')->insert([
			'id' => '1',
			'razonSocial' =>  'SISTEMAS EN MANEJO Y ADMINISTRACION DE RESIDUOS, S.A. DE .CV.',
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
			'razonSocial' =>  'SISTEMAS DE RESIDUOS RENOBABLES, S.A. DE .CV.',
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
			'tipo' =>  'camión pesado',
			'capacidad' =>  '3 toneladas',
			'noPlaca' =>  'AXE-125-G',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		
		DB::table('vehiculos')->insert([
			'id' => '2',
			'transportista_id' =>  '1',
			'noPermisoSCT' =>  'SCT-32-331-D',
			'tipo' =>  'camión de volteo',
			'capacidad' =>  '2 toneladas',
			'noPlaca' =>  'BYC-567-I',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '3',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT-75-461-Q',
			'tipo' =>  'semi-remolque',
			'capacidad' =>  '1 tonelada',
			'noPlaca' =>  'WER-526-M',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);

		DB::table('vehiculos')->insert([
			'id' => '4',
			'transportista_id' =>  '2',
			'noPermisoSCT' =>  'SCT-64-743-S',
			'tipo' =>  'remolque pesado',
			'capacidad' =>  '3.5 toneladas',
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
