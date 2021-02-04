<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

		DB::table('entidades')->insert([
			'id' => '01',
			'name' =>  'Aguascalientes',
			'abbrev' =>  'Ags.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '02',
			'name' =>  'Baja California',
			'abbrev' =>  'BC',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '03',
			'name' =>  'Baja California Sur',
			'abbrev' =>  'BCS',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '04',
			'name' =>  'Campeche',
			'abbrev' =>  'Camp.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '05',
			'name' =>  'Coahuila de Zaragoza',
			'abbrev' =>  'Coah.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '06',
			'name' =>  'Colima',
			'abbrev' =>  'Col.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '07',
			'name' =>  'Chiapas',
			'abbrev' =>  'Chis.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '08',
			'name' =>  'Chihuahua',
			'abbrev' =>  'Chih.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '09',
			'name' =>  'Distrito Federal',
			'abbrev' =>  'DF',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '10',
			'name' =>  'Durango',
			'abbrev' =>  'Dgo.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '11',
			'name' =>  'Guanajuato',
			'abbrev' =>  'Gto.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '12',
			'name' =>  'Guerrero',
			'abbrev' =>  'Gro.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '13',
			'name' =>  'Hidalgo',
			'abbrev' =>  'Hgo.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '14',
			'name' =>  'Jalisco',
			'abbrev' =>  'Jal.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '15',
			'name' =>  'México',
			'abbrev' =>  'Mex.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '16',
			'name' =>  'Michoacán de Ocampo',
			'abbrev' =>  'Mich.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '17',
			'name' =>  'Morelos',
			'abbrev' =>  'Mor.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '18',
			'name' =>  'Nayarit',
			'abbrev' =>  'Nay.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '19',
			'name' =>  'Nuevo León',
			'abbrev' =>  'NL',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '20',
			'name' =>  'Oaxaca',
			'abbrev' =>  'Oax.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '21',
			'name' =>  'Puebla',
			'abbrev' =>  'Pue.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '22',
			'name' =>  'Querétaro',
			'abbrev' =>  'Qro.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '23',
			'name' =>  'Quintana Roo',
			'abbrev' =>  'Q. Roo',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '24',
			'name' =>  'San Luis Potosí',
			'abbrev' =>  'SLP',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '25',
			'name' =>  'Sinaloa',
			'abbrev' =>  'Sin.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '26',
			'name' =>  'Sonora',
			'abbrev' =>  'Son.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '27',
			'name' =>  'Tabasco',
			'abbrev' =>  'Tab.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '28',
			'name' =>  'Tamaulipas',
			'abbrev' =>  'Tamps.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '29',
			'name' =>  'Tlaxcala',
			'abbrev' =>  'Tlax.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '30',
			'name' =>  'Veracruz de Ignacio de la Llave',
			'abbrev' =>  'Ver.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '31',
			'name' =>  'Yucatán',
			'abbrev' =>  'Yuc.',
			'country' =>  'MX'

		]);
		DB::table('entidades')->insert([
			'id' => '32',
			'name' =>  'Zacatecas',
			'abbrev' =>  'Zac.',
			'country' =>  'MX'
		]);
    }
}
