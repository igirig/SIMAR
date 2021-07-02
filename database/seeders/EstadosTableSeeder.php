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
			'nombre' =>  'AGUASCALIENTES',
			'abbrev' =>  'AGS.'

		]);
		DB::table('estados')->insert([
			'id' => '02',
			'nombre' =>  'BAJA CALIFORNIA',
			'abbrev' =>  'BC'

		]);
		DB::table('estados')->insert([
			'id' => '03',
			'nombre' =>  'BAJA CALIFORNIA SUR',
			'abbrev' =>  'BCS'

		]);
		DB::table('estados')->insert([
			'id' => '04',
			'nombre' =>  'CAMPECHE',
			'abbrev' =>  'CAMP.'

		]);
		DB::table('estados')->insert([
			'id' => '05',
			'nombre' =>  'COAHUILA DE ZARAGOZA',
			'abbrev' =>  'COAH.'

		]);
		DB::table('estados')->insert([
			'id' => '06',
			'nombre' =>  'COLIMA',
			'abbrev' =>  'COL.'

		]);
		DB::table('estados')->insert([
			'id' => '07',
			'nombre' =>  'CHIAPAS',
			'abbrev' =>  'CHIS.'

		]);
		DB::table('estados')->insert([
			'id' => '08',
			'nombre' =>  'CHIHUAHUA',
			'abbrev' =>  'CHIH.'

		]);
		DB::table('estados')->insert([
			'id' => '09',
			'nombre' =>  'CIUDAD DE MÉXICO',
			'abbrev' =>  'CDMX'

		]);
		DB::table('estados')->insert([
			'id' => '10',
			'nombre' =>  'DURANGO',
			'abbrev' =>  'DGO.'

		]);
		DB::table('estados')->insert([
			'id' => '11',
			'nombre' =>  'GUANAJUATO',
			'abbrev' =>  'GTO.'

		]);
		DB::table('estados')->insert([
			'id' => '12',
			'nombre' =>  'GUERRERO',
			'abbrev' =>  'GRO.'

		]);
		DB::table('estados')->insert([
			'id' => '13',
			'nombre' =>  'HIDALGO',
			'abbrev' =>  'HGO.'

		]);
		DB::table('estados')->insert([
			'id' => '14',
			'nombre' =>  'JALISCO',
			'abbrev' =>  'JAL.'

		]);
		DB::table('estados')->insert([
			'id' => '15',
			'nombre' =>  'MÉXICO',
			'abbrev' =>  'MEX.'

		]);
		DB::table('estados')->insert([
			'id' => '16',
			'nombre' =>  'MICHOACÁN DE OCAMPO',
			'abbrev' =>  'MICH.'

		]);
		DB::table('estados')->insert([
			'id' => '17',
			'nombre' =>  'MORELOS',
			'abbrev' =>  'MOR.'

		]);
		DB::table('estados')->insert([
			'id' => '18',
			'nombre' =>  'NAYARIT',
			'abbrev' =>  'NAY.'

		]);
		DB::table('estados')->insert([
			'id' => '19',
			'nombre' =>  'NUEVO LEÓN',
			'abbrev' =>  'NL'

		]);
		DB::table('estados')->insert([
			'id' => '20',
			'nombre' =>  'OAXACA',
			'abbrev' =>  'OAX.'

		]);
		DB::table('estados')->insert([
			'id' => '21',
			'nombre' =>  'PUEBLA',
			'abbrev' =>  'PUE.'

		]);
		DB::table('estados')->insert([
			'id' => '22',
			'nombre' =>  'QUERÉTARO',
			'abbrev' =>  'QRO.'

		]);
		DB::table('estados')->insert([
			'id' => '23',
			'nombre' =>  'QUINTANA ROO',
			'abbrev' =>  'Q. ROO'

		]);
		DB::table('estados')->insert([
			'id' => '24',
			'nombre' =>  'SAN LUIS POTOSÍ',
			'abbrev' =>  'SLP'

		]);
		DB::table('estados')->insert([
			'id' => '25',
			'nombre' =>  'SINALOA',
			'abbrev' =>  'SIN.'

		]);
		DB::table('estados')->insert([
			'id' => '26',
			'nombre' =>  'SONORA',
			'abbrev' =>  'SON.'

		]);
		DB::table('estados')->insert([
			'id' => '27',
			'nombre' =>  'TABASCO',
			'abbrev' =>  'TAB.'

		]);
		DB::table('estados')->insert([
			'id' => '28',
			'nombre' =>  'TAMAULIPAS',
			'abbrev' =>  'TAMPS.'

		]);
		DB::table('estados')->insert([
			'id' => '29',
			'nombre' =>  'TLAXCALA',
			'abbrev' =>  'TLAX.'

		]);
		DB::table('estados')->insert([
			'id' => '30',
			'nombre' =>  'VERACRUZ DE IGNACIO DE LA LLAVE',
			'abbrev' =>  'VER.'

		]);
		DB::table('estados')->insert([
			'id' => '31',
			'nombre' =>  'YUCATÁN',
			'abbrev' =>  'YUC.'

		]);
		DB::table('estados')->insert([
			'id' => '32',
			'nombre' =>  'ZACATECAS',
			'abbrev' =>  'ZAC.'
		]);
	}
}
