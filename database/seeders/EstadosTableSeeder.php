<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('estados')->insert([
			'id' => '01',
			'name' =>  'Aguascalientes',
			'abbrev' =>  'Ags.'

		]);
		DB::table('estados')->insert([
			'id' => '02',
			'name' =>  'Baja California',
			'abbrev' =>  'BC'

		]);
		DB::table('estados')->insert([
			'id' => '03',
			'name' =>  'Baja California Sur',
			'abbrev' =>  'BCS'

		]);
		DB::table('estados')->insert([
			'id' => '04',
			'name' =>  'Campeche',
			'abbrev' =>  'Camp.'

		]);
		DB::table('estados')->insert([
			'id' => '05',
			'name' =>  'Coahuila de Zaragoza',
			'abbrev' =>  'Coah.'

		]);
		DB::table('estados')->insert([
			'id' => '06',
			'name' =>  'Colima',
			'abbrev' =>  'Col.'

		]);
		DB::table('estados')->insert([
			'id' => '07',
			'name' =>  'Chiapas',
			'abbrev' =>  'Chis.'

		]);
		DB::table('estados')->insert([
			'id' => '08',
			'name' =>  'Chihuahua',
			'abbrev' =>  'Chih.'

		]);
		DB::table('estados')->insert([
			'id' => '09',
			'name' =>  'Ciudad de México',
			'abbrev' =>  'CDMX'

		]);
		DB::table('estados')->insert([
			'id' => '10',
			'name' =>  'Durango',
			'abbrev' =>  'Dgo.'

		]);
		DB::table('estados')->insert([
			'id' => '11',
			'name' =>  'Guanajuato',
			'abbrev' =>  'Gto.'

		]);
		DB::table('estados')->insert([
			'id' => '12',
			'name' =>  'Guerrero',
			'abbrev' =>  'Gro.'

		]);
		DB::table('estados')->insert([
			'id' => '13',
			'name' =>  'Hidalgo',
			'abbrev' =>  'Hgo.'

		]);
		DB::table('estados')->insert([
			'id' => '14',
			'name' =>  'Jalisco',
			'abbrev' =>  'Jal.'

		]);
		DB::table('estados')->insert([
			'id' => '15',
			'name' =>  'México',
			'abbrev' =>  'Mex.'

		]);
		DB::table('estados')->insert([
			'id' => '16',
			'name' =>  'Michoacán de Ocampo',
			'abbrev' =>  'Mich.'

		]);
		DB::table('estados')->insert([
			'id' => '17',
			'name' =>  'Morelos',
			'abbrev' =>  'Mor.'

		]);
		DB::table('estados')->insert([
			'id' => '18',
			'name' =>  'Nayarit',
			'abbrev' =>  'Nay.'

		]);
		DB::table('estados')->insert([
			'id' => '19',
			'name' =>  'Nuevo León',
			'abbrev' =>  'NL'

		]);
		DB::table('estados')->insert([
			'id' => '20',
			'name' =>  'Oaxaca',
			'abbrev' =>  'Oax.'

		]);
		DB::table('estados')->insert([
			'id' => '21',
			'name' =>  'Puebla',
			'abbrev' =>  'Pue.'

		]);
		DB::table('estados')->insert([
			'id' => '22',
			'name' =>  'Querétaro',
			'abbrev' =>  'Qro.'

		]);
		DB::table('estados')->insert([
			'id' => '23',
			'name' =>  'Quintana Roo',
			'abbrev' =>  'Q. Roo'

		]);
		DB::table('estados')->insert([
			'id' => '24',
			'name' =>  'San Luis Potosí',
			'abbrev' =>  'SLP'

		]);
		DB::table('estados')->insert([
			'id' => '25',
			'name' =>  'Sinaloa',
			'abbrev' =>  'Sin.'

		]);
		DB::table('estados')->insert([
			'id' => '26',
			'name' =>  'Sonora',
			'abbrev' =>  'Son.'

		]);
		DB::table('estados')->insert([
			'id' => '27',
			'name' =>  'Tabasco',
			'abbrev' =>  'Tab.'

		]);
		DB::table('estados')->insert([
			'id' => '28',
			'name' =>  'Tamaulipas',
			'abbrev' =>  'Tamps.'

		]);
		DB::table('estados')->insert([
			'id' => '29',
			'name' =>  'Tlaxcala',
			'abbrev' =>  'Tlax.'

		]);
		DB::table('estados')->insert([
			'id' => '30',
			'name' =>  'Veracruz de Ignacio de la Llave',
			'abbrev' =>  'Ver.'

		]);
		DB::table('estados')->insert([
			'id' => '31',
			'name' =>  'Yucatán',
			'abbrev' =>  'Yuc.'

		]);
		DB::table('estados')->insert([
			'id' => '32',
			'name' =>  'Zacatecas',
			'abbrev' =>  'Zac.'
		]);
    }
}
