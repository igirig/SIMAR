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
			'abbrev' =>  'Ags.'

		]);
		DB::table('entidades')->insert([
			'id' => '02',
			'name' =>  'Baja California',
			'abbrev' =>  'BC'

		]);
		DB::table('entidades')->insert([
			'id' => '03',
			'name' =>  'Baja California Sur',
			'abbrev' =>  'BCS'

		]);
		DB::table('entidades')->insert([
			'id' => '04',
			'name' =>  'Campeche',
			'abbrev' =>  'Camp.'

		]);
		DB::table('entidades')->insert([
			'id' => '05',
			'name' =>  'Coahuila de Zaragoza',
			'abbrev' =>  'Coah.'

		]);
		DB::table('entidades')->insert([
			'id' => '06',
			'name' =>  'Colima',
			'abbrev' =>  'Col.'

		]);
		DB::table('entidades')->insert([
			'id' => '07',
			'name' =>  'Chiapas',
			'abbrev' =>  'Chis.'

		]);
		DB::table('entidades')->insert([
			'id' => '08',
			'name' =>  'Chihuahua',
			'abbrev' =>  'Chih.'

		]);
		DB::table('entidades')->insert([
			'id' => '09',
			'name' =>  'Ciudad de México',
			'abbrev' =>  'CDMX'

		]);
		DB::table('entidades')->insert([
			'id' => '10',
			'name' =>  'Durango',
			'abbrev' =>  'Dgo.'

		]);
		DB::table('entidades')->insert([
			'id' => '11',
			'name' =>  'Guanajuato',
			'abbrev' =>  'Gto.'

		]);
		DB::table('entidades')->insert([
			'id' => '12',
			'name' =>  'Guerrero',
			'abbrev' =>  'Gro.'

		]);
		DB::table('entidades')->insert([
			'id' => '13',
			'name' =>  'Hidalgo',
			'abbrev' =>  'Hgo.'

		]);
		DB::table('entidades')->insert([
			'id' => '14',
			'name' =>  'Jalisco',
			'abbrev' =>  'Jal.'

		]);
		DB::table('entidades')->insert([
			'id' => '15',
			'name' =>  'México',
			'abbrev' =>  'Mex.'

		]);
		DB::table('entidades')->insert([
			'id' => '16',
			'name' =>  'Michoacán de Ocampo',
			'abbrev' =>  'Mich.'

		]);
		DB::table('entidades')->insert([
			'id' => '17',
			'name' =>  'Morelos',
			'abbrev' =>  'Mor.'

		]);
		DB::table('entidades')->insert([
			'id' => '18',
			'name' =>  'Nayarit',
			'abbrev' =>  'Nay.'

		]);
		DB::table('entidades')->insert([
			'id' => '19',
			'name' =>  'Nuevo León',
			'abbrev' =>  'NL'

		]);
		DB::table('entidades')->insert([
			'id' => '20',
			'name' =>  'Oaxaca',
			'abbrev' =>  'Oax.'

		]);
		DB::table('entidades')->insert([
			'id' => '21',
			'name' =>  'Puebla',
			'abbrev' =>  'Pue.'

		]);
		DB::table('entidades')->insert([
			'id' => '22',
			'name' =>  'Querétaro',
			'abbrev' =>  'Qro.'

		]);
		DB::table('entidades')->insert([
			'id' => '23',
			'name' =>  'Quintana Roo',
			'abbrev' =>  'Q. Roo'

		]);
		DB::table('entidades')->insert([
			'id' => '24',
			'name' =>  'San Luis Potosí',
			'abbrev' =>  'SLP'

		]);
		DB::table('entidades')->insert([
			'id' => '25',
			'name' =>  'Sinaloa',
			'abbrev' =>  'Sin.'

		]);
		DB::table('entidades')->insert([
			'id' => '26',
			'name' =>  'Sonora',
			'abbrev' =>  'Son.'

		]);
		DB::table('entidades')->insert([
			'id' => '27',
			'name' =>  'Tabasco',
			'abbrev' =>  'Tab.'

		]);
		DB::table('entidades')->insert([
			'id' => '28',
			'name' =>  'Tamaulipas',
			'abbrev' =>  'Tamps.'

		]);
		DB::table('entidades')->insert([
			'id' => '29',
			'name' =>  'Tlaxcala',
			'abbrev' =>  'Tlax.'

		]);
		DB::table('entidades')->insert([
			'id' => '30',
			'name' =>  'Veracruz de Ignacio de la Llave',
			'abbrev' =>  'Ver.'

		]);
		DB::table('entidades')->insert([
			'id' => '31',
			'name' =>  'Yucatán',
			'abbrev' =>  'Yuc.'

		]);
		DB::table('entidades')->insert([
			'id' => '32',
			'name' =>  'Zacatecas',
			'abbrev' =>  'Zac.'
		]);
    }
}
