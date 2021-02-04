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
			'nombre' =>  'Aguascalientes',
			'abbrev' =>  'Ags.'

		]);
		DB::table('estados')->insert([
			'id' => '02',
			'nombre' =>  'Baja California',
			'abbrev' =>  'BC'

		]);
		DB::table('estados')->insert([
			'id' => '03',
			'nombre' =>  'Baja California Sur',
			'abbrev' =>  'BCS'

		]);
		DB::table('estados')->insert([
			'id' => '04',
			'nombre' =>  'Campeche',
			'abbrev' =>  'Camp.'

		]);
		DB::table('estados')->insert([
			'id' => '05',
			'nombre' =>  'Coahuila de Zaragoza',
			'abbrev' =>  'Coah.'

		]);
		DB::table('estados')->insert([
			'id' => '06',
			'nombre' =>  'Colima',
			'abbrev' =>  'Col.'

		]);
		DB::table('estados')->insert([
			'id' => '07',
			'nombre' =>  'Chiapas',
			'abbrev' =>  'Chis.'

		]);
		DB::table('estados')->insert([
			'id' => '08',
			'nombre' =>  'Chihuahua',
			'abbrev' =>  'Chih.'

		]);
		DB::table('estados')->insert([
			'id' => '09',
			'nombre' =>  'Ciudad de México',
			'abbrev' =>  'CDMX'

		]);
		DB::table('estados')->insert([
			'id' => '10',
			'nombre' =>  'Durango',
			'abbrev' =>  'Dgo.'

		]);
		DB::table('estados')->insert([
			'id' => '11',
			'nombre' =>  'Guanajuato',
			'abbrev' =>  'Gto.'

		]);
		DB::table('estados')->insert([
			'id' => '12',
			'nombre' =>  'Guerrero',
			'abbrev' =>  'Gro.'

		]);
		DB::table('estados')->insert([
			'id' => '13',
			'nombre' =>  'Hidalgo',
			'abbrev' =>  'Hgo.'

		]);
		DB::table('estados')->insert([
			'id' => '14',
			'nombre' =>  'Jalisco',
			'abbrev' =>  'Jal.'

		]);
		DB::table('estados')->insert([
			'id' => '15',
			'nombre' =>  'México',
			'abbrev' =>  'Mex.'

		]);
		DB::table('estados')->insert([
			'id' => '16',
			'nombre' =>  'Michoacán de Ocampo',
			'abbrev' =>  'Mich.'

		]);
		DB::table('estados')->insert([
			'id' => '17',
			'nombre' =>  'Morelos',
			'abbrev' =>  'Mor.'

		]);
		DB::table('estados')->insert([
			'id' => '18',
			'nombre' =>  'Nayarit',
			'abbrev' =>  'Nay.'

		]);
		DB::table('estados')->insert([
			'id' => '19',
			'nombre' =>  'Nuevo León',
			'abbrev' =>  'NL'

		]);
		DB::table('estados')->insert([
			'id' => '20',
			'nombre' =>  'Oaxaca',
			'abbrev' =>  'Oax.'

		]);
		DB::table('estados')->insert([
			'id' => '21',
			'nombre' =>  'Puebla',
			'abbrev' =>  'Pue.'

		]);
		DB::table('estados')->insert([
			'id' => '22',
			'nombre' =>  'Querétaro',
			'abbrev' =>  'Qro.'

		]);
		DB::table('estados')->insert([
			'id' => '23',
			'nombre' =>  'Quintana Roo',
			'abbrev' =>  'Q. Roo'

		]);
		DB::table('estados')->insert([
			'id' => '24',
			'nombre' =>  'San Luis Potosí',
			'abbrev' =>  'SLP'

		]);
		DB::table('estados')->insert([
			'id' => '25',
			'nombre' =>  'Sinaloa',
			'abbrev' =>  'Sin.'

		]);
		DB::table('estados')->insert([
			'id' => '26',
			'nombre' =>  'Sonora',
			'abbrev' =>  'Son.'

		]);
		DB::table('estados')->insert([
			'id' => '27',
			'nombre' =>  'Tabasco',
			'abbrev' =>  'Tab.'

		]);
		DB::table('estados')->insert([
			'id' => '28',
			'nombre' =>  'Tamaulipas',
			'abbrev' =>  'Tamps.'

		]);
		DB::table('estados')->insert([
			'id' => '29',
			'nombre' =>  'Tlaxcala',
			'abbrev' =>  'Tlax.'

		]);
		DB::table('estados')->insert([
			'id' => '30',
			'nombre' =>  'Veracruz de Ignacio de la Llave',
			'abbrev' =>  'Ver.'

		]);
		DB::table('estados')->insert([
			'id' => '31',
			'nombre' =>  'Yucatán',
			'abbrev' =>  'Yuc.'

		]);
		DB::table('estados')->insert([
			'id' => '32',
			'nombre' =>  'Zacatecas',
			'abbrev' =>  'Zac.'
		]);
    }
}
