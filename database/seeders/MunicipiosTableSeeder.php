<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('municipios')->insert([
            'nombre' =>  'Aguascalientes',
            'estado_id' => '01',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asientos',
            'estado_id' => '01',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calvillo',
            'estado_id' => '01',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosío',
            'estado_id' => '01',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jesús María',
            'estado_id' => '01',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pabellón de Arteaga',
            'estado_id' => '01',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rincón de Romos',
            'estado_id' => '01',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José de Gracia',
            'estado_id' => '01',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepezalá',
            'estado_id' => '01',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Llano',
            'estado_id' => '01',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco de los Romo',
            'estado_id' => '01',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ensenada',
            'estado_id' => '02',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mexicali',
            'estado_id' => '02',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecate',
            'estado_id' => '02',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tijuana',
            'estado_id' => '02',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Playas de Rosarito',
            'estado_id' => '02',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comondú',
            'estado_id' => '03',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mulegé',
            'estado_id' => '03',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Paz',
            'estado_id' => '03',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Cabos',
            'estado_id' => '03',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Loreto',
            'estado_id' => '03',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calkiní',
            'estado_id' => '04',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Campeche',
            'estado_id' => '04',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carmen',
            'estado_id' => '04',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Champotón',
            'estado_id' => '04',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hecelchakán',
            'estado_id' => '04',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hopelchén',
            'estado_id' => '04',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Palizada',
            'estado_id' => '04',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenabo',
            'estado_id' => '04',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Escárcega',
            'estado_id' => '04',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calakmul',
            'estado_id' => '04',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Candelaria',
            'estado_id' => '04',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abasolo',
            'estado_id' => '05',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acuña',
            'estado_id' => '05',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Allende',
            'estado_id' => '05',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arteaga',
            'estado_id' => '05',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Candela',
            'estado_id' => '05',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Castaños',
            'estado_id' => '05',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuatro Ciénegas',
            'estado_id' => '05',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Escobedo',
            'estado_id' => '05',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Francisco I. Madero',
            'estado_id' => '05',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Frontera',
            'estado_id' => '05',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Cepeda',
            'estado_id' => '05',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guerrero',
            'estado_id' => '05',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo',
            'estado_id' => '05',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiménez',
            'estado_id' => '05',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez',
            'estado_id' => '05',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lamadrid',
            'estado_id' => '05',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matamoros',
            'estado_id' => '05',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Monclova',
            'estado_id' => '05',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelos',
            'estado_id' => '05',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Múzquiz',
            'estado_id' => '05',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nadadores',
            'estado_id' => '05',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nava',
            'estado_id' => '05',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '05',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Parras',
            'estado_id' => '05',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Piedras Negras',
            'estado_id' => '05',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Progreso',
            'estado_id' => '05',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ramos Arizpe',
            'estado_id' => '05',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sabinas',
            'estado_id' => '05',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sacramento',
            'estado_id' => '05',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Saltillo',
            'estado_id' => '05',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Buenaventura',
            'estado_id' => '05',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan de Sabinas',
            'estado_id' => '05',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro',
            'estado_id' => '05',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sierra Mojada',
            'estado_id' => '05',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Torreón',
            'estado_id' => '05',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Viesca',
            'estado_id' => '05',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Unión',
            'estado_id' => '05',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zaragoza',
            'estado_id' => '05',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Armería',
            'estado_id' => '06',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Colima',
            'estado_id' => '06',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comala',
            'estado_id' => '06',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coquimatlán',
            'estado_id' => '06',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '06',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlahuacán',
            'estado_id' => '06',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Manzanillo',
            'estado_id' => '06',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Minatitlán',
            'estado_id' => '06',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecomán',
            'estado_id' => '06',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Álvarez',
            'estado_id' => '06',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acacoyagua',
            'estado_id' => '07',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acala',
            'estado_id' => '07',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acapetahua',
            'estado_id' => '07',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Altamirano',
            'estado_id' => '07',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatán',
            'estado_id' => '07',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatenango de la Frontera',
            'estado_id' => '07',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatenango del Valle',
            'estado_id' => '07',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Angel Albino Corzo',
            'estado_id' => '07',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arriaga',
            'estado_id' => '07',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bejucal de Ocampo',
            'estado_id' => '07',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bella Vista',
            'estado_id' => '07',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Berriozábal',
            'estado_id' => '07',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bochil',
            'estado_id' => '07',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Bosque',
            'estado_id' => '07',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cacahoatán',
            'estado_id' => '07',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Catazajá',
            'estado_id' => '07',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cintalapa',
            'estado_id' => '07',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coapilla',
            'estado_id' => '07',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comitán de Domínguez',
            'estado_id' => '07',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Concordia',
            'estado_id' => '07',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Copainalá',
            'estado_id' => '07',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalchihuitán',
            'estado_id' => '07',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chamula',
            'estado_id' => '07',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chanal',
            'estado_id' => '07',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapultenango',
            'estado_id' => '07',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chenalhó',
            'estado_id' => '07',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiapa de Corzo',
            'estado_id' => '07',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiapilla',
            'estado_id' => '07',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chicoasén',
            'estado_id' => '07',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chicomuselo',
            'estado_id' => '07',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilón',
            'estado_id' => '07',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Escuintla',
            'estado_id' => '07',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Francisco León',
            'estado_id' => '07',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Frontera Comalapa',
            'estado_id' => '07',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Frontera Hidalgo',
            'estado_id' => '07',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Grandeza',
            'estado_id' => '07',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetán',
            'estado_id' => '07',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huixtán',
            'estado_id' => '07',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huitiupán',
            'estado_id' => '07',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huixtla',
            'estado_id' => '07',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Independencia',
            'estado_id' => '07',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuatán',
            'estado_id' => '07',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtacomitán',
            'estado_id' => '07',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtapa',
            'estado_id' => '07',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtapangajoya',
            'estado_id' => '07',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiquipilas',
            'estado_id' => '07',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jitotol',
            'estado_id' => '07',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez',
            'estado_id' => '07',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Larráinzar',
            'estado_id' => '07',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Libertad',
            'estado_id' => '07',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mapastepec',
            'estado_id' => '07',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Las Margaritas',
            'estado_id' => '07',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazapa de Madero',
            'estado_id' => '07',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatán',
            'estado_id' => '07',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Metapa',
            'estado_id' => '07',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mitontic',
            'estado_id' => '07',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Motozintla',
            'estado_id' => '07',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nicolás Ruíz',
            'estado_id' => '07',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocosingo',
            'estado_id' => '07',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocotepec',
            'estado_id' => '07',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocozocoautla de Espinosa',
            'estado_id' => '07',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ostuacán',
            'estado_id' => '07',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Osumacinta',
            'estado_id' => '07',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oxchuc',
            'estado_id' => '07',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Palenque',
            'estado_id' => '07',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pantelhó',
            'estado_id' => '07',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pantepec',
            'estado_id' => '07',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pichucalco',
            'estado_id' => '07',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pijijiapan',
            'estado_id' => '07',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Porvenir',
            'estado_id' => '07',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Comaltitlán',
            'estado_id' => '07',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pueblo Nuevo Solistahuacán',
            'estado_id' => '07',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rayón',
            'estado_id' => '07',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Reforma',
            'estado_id' => '07',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Las Rosas',
            'estado_id' => '07',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sabanilla',
            'estado_id' => '07',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salto de Agua',
            'estado_id' => '07',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal de las Casas',
            'estado_id' => '07',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Fernando',
            'estado_id' => '07',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Siltepec',
            'estado_id' => '07',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Simojovel',
            'estado_id' => '07',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sitalá',
            'estado_id' => '07',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Socoltenango',
            'estado_id' => '07',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Solosuchiapa',
            'estado_id' => '07',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soyaló',
            'estado_id' => '07',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Suchiapa',
            'estado_id' => '07',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Suchiate',
            'estado_id' => '07',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sunuapa',
            'estado_id' => '07',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tapachula',
            'estado_id' => '07',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tapalapa',
            'estado_id' => '07',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tapilula',
            'estado_id' => '07',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecpatán',
            'estado_id' => '07',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenejapa',
            'estado_id' => '07',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teopisca',
            'estado_id' => '07',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tila',
            'estado_id' => '07',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonalá',
            'estado_id' => '07',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totolapa',
            'estado_id' => '07',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Trinitaria',
            'estado_id' => '07',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tumbalá',
            'estado_id' => '07',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxtla Gutiérrez',
            'estado_id' => '07',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxtla Chico',
            'estado_id' => '07',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuzantán',
            'estado_id' => '07',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzimol',
            'estado_id' => '07',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Unión Juárez',
            'estado_id' => '07',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '07',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Corzo',
            'estado_id' => '07',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villaflores',
            'estado_id' => '07',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yajalón',
            'estado_id' => '07',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas',
            'estado_id' => '07',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zinacantán',
            'estado_id' => '07',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Cancuc',
            'estado_id' => '07',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aldama',
            'estado_id' => '07',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benemérito de las Américas',
            'estado_id' => '07',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maravilla Tenejapa',
            'estado_id' => '07',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Marqués de Comillas',
            'estado_id' => '07',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Montecristo de Guerrero',
            'estado_id' => '07',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Duraznal',
            'estado_id' => '07',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago el Pinar',
            'estado_id' => '07',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahumada',
            'estado_id' => '08',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aldama',
            'estado_id' => '08',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Allende',
            'estado_id' => '08',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aquiles Serdán',
            'estado_id' => '08',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ascensión',
            'estado_id' => '08',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bachíniva',
            'estado_id' => '08',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Balleza',
            'estado_id' => '08',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Batopilas',
            'estado_id' => '08',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bocoyna',
            'estado_id' => '08',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Buenaventura',
            'estado_id' => '08',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Camargo',
            'estado_id' => '08',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carichí',
            'estado_id' => '08',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Casas Grandes',
            'estado_id' => '08',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coronado',
            'estado_id' => '08',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyame del Sotol',
            'estado_id' => '08',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Cruz',
            'estado_id' => '08',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '08',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cusihuiriachi',
            'estado_id' => '08',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chihuahua',
            'estado_id' => '08',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chínipas',
            'estado_id' => '08',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Delicias',
            'estado_id' => '08',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dr. Belisario Domínguez',
            'estado_id' => '08',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Galeana',
            'estado_id' => '08',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Isabel',
            'estado_id' => '08',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '08',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gran Morelos',
            'estado_id' => '08',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guachochi',
            'estado_id' => '08',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe',
            'estado_id' => '08',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe y Calvo',
            'estado_id' => '08',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guazapares',
            'estado_id' => '08',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guerrero',
            'estado_id' => '08',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo del Parral',
            'estado_id' => '08',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huejotitán',
            'estado_id' => '08',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ignacio Zaragoza',
            'estado_id' => '08',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Janos',
            'estado_id' => '08',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiménez',
            'estado_id' => '08',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez',
            'estado_id' => '08',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Julimes',
            'estado_id' => '08',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'López',
            'estado_id' => '08',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Madera',
            'estado_id' => '08',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maguarichi',
            'estado_id' => '08',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Manuel Benavides',
            'estado_id' => '08',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matachí',
            'estado_id' => '08',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matamoros',
            'estado_id' => '08',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Meoqui',
            'estado_id' => '08',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelos',
            'estado_id' => '08',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moris',
            'estado_id' => '08',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Namiquipa',
            'estado_id' => '08',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nonoava',
            'estado_id' => '08',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Casas Grandes',
            'estado_id' => '08',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '08',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ojinaga',
            'estado_id' => '08',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Praxedis G. Guerrero',
            'estado_id' => '08',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Riva Palacio',
            'estado_id' => '08',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rosales',
            'estado_id' => '08',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rosario',
            'estado_id' => '08',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco de Borja',
            'estado_id' => '08',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco de Conchos',
            'estado_id' => '08',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco del Oro',
            'estado_id' => '08',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Bárbara',
            'estado_id' => '08',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Satevó',
            'estado_id' => '08',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Saucillo',
            'estado_id' => '08',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temósachic',
            'estado_id' => '08',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Tule',
            'estado_id' => '08',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Urique',
            'estado_id' => '08',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Uruachi',
            'estado_id' => '08',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Zaragoza',
            'estado_id' => '08',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Azcapotzalco',
            'estado_id' => '09',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyoacán',
            'estado_id' => '09',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuajimalpa de Morelos',
            'estado_id' => '09',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gustavo A. Madero',
            'estado_id' => '09',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Iztacalco',
            'estado_id' => '09',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Iztapalapa',
            'estado_id' => '09',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Magdalena Contreras',
            'estado_id' => '09',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Milpa Alta',
            'estado_id' => '09',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Álvaro Obregón',
            'estado_id' => '09',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tláhuac',
            'estado_id' => '09',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalpan',
            'estado_id' => '09',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochimilco',
            'estado_id' => '09',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '09',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '09',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miguel Hidalgo',
            'estado_id' => '09',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '09',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Canatlán',
            'estado_id' => '10',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Canelas',
            'estado_id' => '10',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coneto de Comonfort',
            'estado_id' => '10',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuencamé',
            'estado_id' => '10',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Durango',
            'estado_id' => '10',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Simón Bolívar',
            'estado_id' => '10',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gómez Palacio',
            'estado_id' => '10',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe Victoria',
            'estado_id' => '10',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guanaceví',
            'estado_id' => '10',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo',
            'estado_id' => '10',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Indé',
            'estado_id' => '10',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lerdo',
            'estado_id' => '10',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mapimí',
            'estado_id' => '10',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mezquital',
            'estado_id' => '10',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nazas',
            'estado_id' => '10',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nombre de Dios',
            'estado_id' => '10',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '10',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Oro',
            'estado_id' => '10',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Otáez',
            'estado_id' => '10',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pánuco de Coronado',
            'estado_id' => '10',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Peñón Blanco',
            'estado_id' => '10',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Poanas',
            'estado_id' => '10',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pueblo Nuevo',
            'estado_id' => '10',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rodeo',
            'estado_id' => '10',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bernardo',
            'estado_id' => '10',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Dimas',
            'estado_id' => '10',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan de Guadalupe',
            'estado_id' => '10',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '10',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis del Cordero',
            'estado_id' => '10',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro del Gallo',
            'estado_id' => '10',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Clara',
            'estado_id' => '10',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Papasquiaro',
            'estado_id' => '10',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Súchil',
            'estado_id' => '10',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamazula',
            'estado_id' => '10',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepehuanes',
            'estado_id' => '10',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlahualilo',
            'estado_id' => '10',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Topia',
            'estado_id' => '10',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vicente Guerrero',
            'estado_id' => '10',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Ideal',
            'estado_id' => '10',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abasolo',
            'estado_id' => '11',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acámbaro',
            'estado_id' => '11',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel de Allende',
            'estado_id' => '11',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apaseo el Alto',
            'estado_id' => '11',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apaseo el Grande',
            'estado_id' => '11',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atarjea',
            'estado_id' => '11',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Celaya',
            'estado_id' => '11',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Manuel Doblado',
            'estado_id' => '11',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comonfort',
            'estado_id' => '11',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coroneo',
            'estado_id' => '11',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cortazar',
            'estado_id' => '11',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuerámaro',
            'estado_id' => '11',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Doctor Mora',
            'estado_id' => '11',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'estado_id' => '11',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guanajuato',
            'estado_id' => '11',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huanímaro',
            'estado_id' => '11',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Irapuato',
            'estado_id' => '11',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jaral del Progreso',
            'estado_id' => '11',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jerécuaro',
            'estado_id' => '11',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'León',
            'estado_id' => '11',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moroleón',
            'estado_id' => '11',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '11',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pénjamo',
            'estado_id' => '11',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pueblo Nuevo',
            'estado_id' => '11',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Purísima del Rincón',
            'estado_id' => '11',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Romita',
            'estado_id' => '11',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salamanca',
            'estado_id' => '11',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salvatierra',
            'estado_id' => '11',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Diego de la Unión',
            'estado_id' => '11',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe',
            'estado_id' => '11',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco del Rincón',
            'estado_id' => '11',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Iturbide',
            'estado_id' => '11',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis de la Paz',
            'estado_id' => '11',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '11',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz de Juventino Rosas',
            'estado_id' => '11',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Maravatío',
            'estado_id' => '11',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Silao de la Victoria',
            'estado_id' => '11',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tarandacuao',
            'estado_id' => '11',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tarimoro',
            'estado_id' => '11',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tierra Blanca',
            'estado_id' => '11',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Uriangato',
            'estado_id' => '11',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Santiago',
            'estado_id' => '11',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Victoria',
            'estado_id' => '11',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villagrán',
            'estado_id' => '11',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xichú',
            'estado_id' => '11',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yuriria',
            'estado_id' => '11',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acapulco de Juárez',
            'estado_id' => '12',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuacuotzingo',
            'estado_id' => '12',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ajuchitlán del Progreso',
            'estado_id' => '12',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alcozauca de Guerrero',
            'estado_id' => '12',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alpoyeca',
            'estado_id' => '12',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apaxtla',
            'estado_id' => '12',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arcelia',
            'estado_id' => '12',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atenango del Río',
            'estado_id' => '12',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlamajalcingo del Monte',
            'estado_id' => '12',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlixtac',
            'estado_id' => '12',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atoyac de Álvarez',
            'estado_id' => '12',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayutla de los Libres',
            'estado_id' => '12',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Azoyú',
            'estado_id' => '12',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '12',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Buenavista de Cuéllar',
            'estado_id' => '12',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coahuayutla de José María Izazaga',
            'estado_id' => '12',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cocula',
            'estado_id' => '12',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Copala',
            'estado_id' => '12',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Copalillo',
            'estado_id' => '12',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Copanatoyac',
            'estado_id' => '12',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyuca de Benítez',
            'estado_id' => '12',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyuca de Catalán',
            'estado_id' => '12',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuajinicuilapa',
            'estado_id' => '12',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cualác',
            'estado_id' => '12',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautepec',
            'estado_id' => '12',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuetzala del Progreso',
            'estado_id' => '12',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cutzamala de Pinzón',
            'estado_id' => '12',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilapa de Álvarez',
            'estado_id' => '12',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilpancingo de los Bravo',
            'estado_id' => '12',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Florencio Villarreal',
            'estado_id' => '12',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Canuto A. Neri',
            'estado_id' => '12',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Heliodoro Castillo',
            'estado_id' => '12',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huamuxtitlán',
            'estado_id' => '12',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huitzuco de los Figueroa',
            'estado_id' => '12',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Iguala de la Independencia',
            'estado_id' => '12',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Igualapa',
            'estado_id' => '12',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixcateopan de Cuauhtémoc',
            'estado_id' => '12',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zihuatanejo de Azueta',
            'estado_id' => '12',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan R. Escudero',
            'estado_id' => '12',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Leonardo Bravo',
            'estado_id' => '12',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Malinaltepec',
            'estado_id' => '12',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mártir de Cuilapan',
            'estado_id' => '12',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Metlatónoc',
            'estado_id' => '12',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mochitlán',
            'estado_id' => '12',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Olinalá',
            'estado_id' => '12',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ometepec',
            'estado_id' => '12',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pedro Ascencio Alquisiras',
            'estado_id' => '12',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Petatlán',
            'estado_id' => '12',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pilcaya',
            'estado_id' => '12',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pungarabato',
            'estado_id' => '12',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quechultenango',
            'estado_id' => '12',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis Acatlán',
            'estado_id' => '12',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Marcos',
            'estado_id' => '12',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Totolapan',
            'estado_id' => '12',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Taxco de Alarcón',
            'estado_id' => '12',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecoanapa',
            'estado_id' => '12',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Técpan de Galeana',
            'estado_id' => '12',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teloloapan',
            'estado_id' => '12',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepecoacuilco de Trujano',
            'estado_id' => '12',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetipac',
            'estado_id' => '12',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tixtla de Guerrero',
            'estado_id' => '12',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacoachistlahuaca',
            'estado_id' => '12',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacoapa',
            'estado_id' => '12',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalchapa',
            'estado_id' => '12',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalixtaquilla de Maldonado',
            'estado_id' => '12',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlapa de Comonfort',
            'estado_id' => '12',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlapehuala',
            'estado_id' => '12',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Unión de Isidoro Montes de Oca',
            'estado_id' => '12',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xalpatláhuac',
            'estado_id' => '12',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochihuehuetlán',
            'estado_id' => '12',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochistlahuaca',
            'estado_id' => '12',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán Tablas',
            'estado_id' => '12',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zirándaro',
            'estado_id' => '12',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zitlala',
            'estado_id' => '12',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Eduardo Neri',
            'estado_id' => '12',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatepec',
            'estado_id' => '12',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Marquelia',
            'estado_id' => '12',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cochoapa el Grande',
            'estado_id' => '12',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'José Joaquín de Herrera',
            'estado_id' => '12',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juchitán',
            'estado_id' => '12',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Iliatenco',
            'estado_id' => '12',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatlán',
            'estado_id' => '13',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acaxochitlán',
            'estado_id' => '13',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Actopan',
            'estado_id' => '13',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Agua Blanca de Iturbide',
            'estado_id' => '13',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ajacuba',
            'estado_id' => '13',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alfajayucan',
            'estado_id' => '13',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Almoloya',
            'estado_id' => '13',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apan',
            'estado_id' => '13',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Arenal',
            'estado_id' => '13',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atitalaquia',
            'estado_id' => '13',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlapexco',
            'estado_id' => '13',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atotonilco el Grande',
            'estado_id' => '13',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atotonilco de Tula',
            'estado_id' => '13',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calnali',
            'estado_id' => '13',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cardonal',
            'estado_id' => '13',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautepec de Hinojosa',
            'estado_id' => '13',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapantongo',
            'estado_id' => '13',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapulhuacán',
            'estado_id' => '13',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilcuautla',
            'estado_id' => '13',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Eloxochitlán',
            'estado_id' => '13',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '13',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Epazoyucan',
            'estado_id' => '13',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Francisco I. Madero',
            'estado_id' => '13',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huasca de Ocampo',
            'estado_id' => '13',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huautla',
            'estado_id' => '13',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huazalingo',
            'estado_id' => '13',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetla',
            'estado_id' => '13',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huejutla de Reyes',
            'estado_id' => '13',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huichapan',
            'estado_id' => '13',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixmiquilpan',
            'estado_id' => '13',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jacala de Ledezma',
            'estado_id' => '13',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jaltocán',
            'estado_id' => '13',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez Hidalgo',
            'estado_id' => '13',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lolotla',
            'estado_id' => '13',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Metepec',
            'estado_id' => '13',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Metzquititlán',
            'estado_id' => '13',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Metztitlán',
            'estado_id' => '13',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mineral del Chico',
            'estado_id' => '13',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mineral del Monte',
            'estado_id' => '13',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Misión',
            'estado_id' => '13',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mixquiahuala de Juárez',
            'estado_id' => '13',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Molango de Escamilla',
            'estado_id' => '13',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nicolás Flores',
            'estado_id' => '13',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nopala de Villagrán',
            'estado_id' => '13',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Omitlán de Juárez',
            'estado_id' => '13',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Orizatlán',
            'estado_id' => '13',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pacula',
            'estado_id' => '13',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pachuca de Soto',
            'estado_id' => '13',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pisaflores',
            'estado_id' => '13',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Progreso de Obregón',
            'estado_id' => '13',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mineral de la Reforma',
            'estado_id' => '13',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Tlaxiaca',
            'estado_id' => '13',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolo Tutotepec',
            'estado_id' => '13',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Salvador',
            'estado_id' => '13',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago de Anaya',
            'estado_id' => '13',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tulantepec de Lugo Guerrero',
            'estado_id' => '13',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Singuilucan',
            'estado_id' => '13',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tasquillo',
            'estado_id' => '13',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecozautla',
            'estado_id' => '13',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenango de Doria',
            'estado_id' => '13',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeapulco',
            'estado_id' => '13',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepehuacán de Guerrero',
            'estado_id' => '13',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeji del Río de Ocampo',
            'estado_id' => '13',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetitlán',
            'estado_id' => '13',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetepango',
            'estado_id' => '13',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Tezontepec',
            'estado_id' => '13',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tezontepec de Aldama',
            'estado_id' => '13',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tianguistengo',
            'estado_id' => '13',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tizayuca',
            'estado_id' => '13',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlahuelilpan',
            'estado_id' => '13',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlahuiltepa',
            'estado_id' => '13',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlanalapa',
            'estado_id' => '13',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlanchinol',
            'estado_id' => '13',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaxcoapan',
            'estado_id' => '13',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tolcayuca',
            'estado_id' => '13',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tula de Allende',
            'estado_id' => '13',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tulancingo de Bravo',
            'estado_id' => '13',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochiatipan',
            'estado_id' => '13',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochicoatlán',
            'estado_id' => '13',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yahualica',
            'estado_id' => '13',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacualtipán de Ángeles',
            'estado_id' => '13',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotlán de Juárez',
            'estado_id' => '13',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zempoala',
            'estado_id' => '13',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zimapán',
            'estado_id' => '13',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatic',
            'estado_id' => '14',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatlán de Juárez',
            'estado_id' => '14',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahualulco de Mercado',
            'estado_id' => '14',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amacueca',
            'estado_id' => '14',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatitán',
            'estado_id' => '14',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ameca',
            'estado_id' => '14',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juanito de Escobedo',
            'estado_id' => '14',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arandas',
            'estado_id' => '14',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Arenal',
            'estado_id' => '14',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atemajac de Brizuela',
            'estado_id' => '14',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atengo',
            'estado_id' => '14',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atenguillo',
            'estado_id' => '14',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atotonilco el Alto',
            'estado_id' => '14',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atoyac',
            'estado_id' => '14',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Autlán de Navarro',
            'estado_id' => '14',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayotlán',
            'estado_id' => '14',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayutla',
            'estado_id' => '14',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Barca',
            'estado_id' => '14',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bolaños',
            'estado_id' => '14',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cabo Corrientes',
            'estado_id' => '14',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Casimiro Castillo',
            'estado_id' => '14',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cihuatlán',
            'estado_id' => '14',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotlán el Grande',
            'estado_id' => '14',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cocula',
            'estado_id' => '14',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Colotlán',
            'estado_id' => '14',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Concepción de Buenos Aires',
            'estado_id' => '14',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautitlán de García Barragán',
            'estado_id' => '14',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautla',
            'estado_id' => '14',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuquío',
            'estado_id' => '14',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapala',
            'estado_id' => '14',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chimaltitán',
            'estado_id' => '14',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiquilistlán',
            'estado_id' => '14',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Degollado',
            'estado_id' => '14',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ejutla',
            'estado_id' => '14',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Encarnación de Díaz',
            'estado_id' => '14',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Etzatlán',
            'estado_id' => '14',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Grullo',
            'estado_id' => '14',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guachinango',
            'estado_id' => '14',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalajara',
            'estado_id' => '14',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hostotipaquillo',
            'estado_id' => '14',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huejúcar',
            'estado_id' => '14',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huejuquilla el Alto',
            'estado_id' => '14',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Huerta',
            'estado_id' => '14',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlahuacán de los Membrillos',
            'estado_id' => '14',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlahuacán del Río',
            'estado_id' => '14',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalostotitlán',
            'estado_id' => '14',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jamay',
            'estado_id' => '14',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jesús María',
            'estado_id' => '14',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jilotlán de los Dolores',
            'estado_id' => '14',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jocotepec',
            'estado_id' => '14',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juanacatlán',
            'estado_id' => '14',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juchitlán',
            'estado_id' => '14',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lagos de Moreno',
            'estado_id' => '14',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Limón',
            'estado_id' => '14',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena',
            'estado_id' => '14',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María del Oro',
            'estado_id' => '14',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Manzanilla de la Paz',
            'estado_id' => '14',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mascota',
            'estado_id' => '14',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazamitla',
            'estado_id' => '14',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mexticacán',
            'estado_id' => '14',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mezquitic',
            'estado_id' => '14',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mixtlán',
            'estado_id' => '14',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocotlán',
            'estado_id' => '14',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ojuelos de Jalisco',
            'estado_id' => '14',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pihuamo',
            'estado_id' => '14',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Poncitlán',
            'estado_id' => '14',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puerto Vallarta',
            'estado_id' => '14',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Purificación',
            'estado_id' => '14',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quitupan',
            'estado_id' => '14',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Salto',
            'estado_id' => '14',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal de la Barranca',
            'estado_id' => '14',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Diego de Alejandría',
            'estado_id' => '14',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan de los Lagos',
            'estado_id' => '14',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Julián',
            'estado_id' => '14',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Marcos',
            'estado_id' => '14',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín de Bolaños',
            'estado_id' => '14',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Hidalgo',
            'estado_id' => '14',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel el Alto',
            'estado_id' => '14',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '14',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián del Oeste',
            'estado_id' => '14',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María de los Ángeles',
            'estado_id' => '14',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sayula',
            'estado_id' => '14',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tala',
            'estado_id' => '14',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Talpa de Allende',
            'estado_id' => '14',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamazula de Gordiano',
            'estado_id' => '14',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tapalpa',
            'estado_id' => '14',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecalitlán',
            'estado_id' => '14',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecolotlán',
            'estado_id' => '14',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Techaluta de Montenegro',
            'estado_id' => '14',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenamaxtlán',
            'estado_id' => '14',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teocaltiche',
            'estado_id' => '14',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teocuitatlán de Corona',
            'estado_id' => '14',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepatitlán de Morelos',
            'estado_id' => '14',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tequila',
            'estado_id' => '14',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teuchitlán',
            'estado_id' => '14',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tizapán el Alto',
            'estado_id' => '14',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlajomulco de Zúñiga',
            'estado_id' => '14',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Tlaquepaque',
            'estado_id' => '14',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tolimán',
            'estado_id' => '14',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tomatlán',
            'estado_id' => '14',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonalá',
            'estado_id' => '14',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonaya',
            'estado_id' => '14',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonila',
            'estado_id' => '14',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totatiche',
            'estado_id' => '14',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tototlán',
            'estado_id' => '14',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxcacuesco',
            'estado_id' => '14',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxcueca',
            'estado_id' => '14',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxpan',
            'estado_id' => '14',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Unión de San Antonio',
            'estado_id' => '14',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Unión de Tula',
            'estado_id' => '14',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Guadalupe',
            'estado_id' => '14',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Juárez',
            'estado_id' => '14',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Gabriel',
            'estado_id' => '14',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Corona',
            'estado_id' => '14',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Guerrero',
            'estado_id' => '14',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '14',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cañadas de Obregón',
            'estado_id' => '14',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yahualica de González Gallo',
            'estado_id' => '14',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacoalco de Torres',
            'estado_id' => '14',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapopan',
            'estado_id' => '14',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotiltic',
            'estado_id' => '14',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán de Vadillo',
            'estado_id' => '14',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotlán del Rey',
            'estado_id' => '14',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotlanejo',
            'estado_id' => '14',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ignacio Cerro Gordo',
            'estado_id' => '14',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acambay de Ruíz Castañeda',
            'estado_id' => '15',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acolman',
            'estado_id' => '15',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aculco',
            'estado_id' => '15',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Almoloya de Alquisiras',
            'estado_id' => '15',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Almoloya de Juárez',
            'estado_id' => '15',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Almoloya del Río',
            'estado_id' => '15',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amanalco',
            'estado_id' => '15',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatepec',
            'estado_id' => '15',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amecameca',
            'estado_id' => '15',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apaxco',
            'estado_id' => '15',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atenco',
            'estado_id' => '15',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atizapán',
            'estado_id' => '15',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atizapán de Zaragoza',
            'estado_id' => '15',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlacomulco',
            'estado_id' => '15',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlautla',
            'estado_id' => '15',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Axapusco',
            'estado_id' => '15',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayapango',
            'estado_id' => '15',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calimaya',
            'estado_id' => '15',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Capulhuac',
            'estado_id' => '15',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coacalco de Berriozábal',
            'estado_id' => '15',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatepec Harinas',
            'estado_id' => '15',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cocotitlán',
            'estado_id' => '15',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyotepec',
            'estado_id' => '15',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautitlán',
            'estado_id' => '15',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalco',
            'estado_id' => '15',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapa de Mota',
            'estado_id' => '15',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapultepec',
            'estado_id' => '15',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiautla',
            'estado_id' => '15',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chicoloapan',
            'estado_id' => '15',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiconcuac',
            'estado_id' => '15',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chimalhuacán',
            'estado_id' => '15',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Donato Guerra',
            'estado_id' => '15',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ecatepec de Morelos',
            'estado_id' => '15',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ecatzingo',
            'estado_id' => '15',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetoca',
            'estado_id' => '15',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueypoxtla',
            'estado_id' => '15',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huixquilucan',
            'estado_id' => '15',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Isidro Fabela',
            'estado_id' => '15',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtapaluca',
            'estado_id' => '15',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtapan de la Sal',
            'estado_id' => '15',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtapan del Oro',
            'estado_id' => '15',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlahuaca',
            'estado_id' => '15',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xalatlaco',
            'estado_id' => '15',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jaltenco',
            'estado_id' => '15',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jilotepec',
            'estado_id' => '15',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jilotzingo',
            'estado_id' => '15',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiquipilco',
            'estado_id' => '15',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jocotitlán',
            'estado_id' => '15',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Joquicingo',
            'estado_id' => '15',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juchitepec',
            'estado_id' => '15',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lerma',
            'estado_id' => '15',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Malinalco',
            'estado_id' => '15',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '15',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Metepec',
            'estado_id' => '15',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mexicaltzingo',
            'estado_id' => '15',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelos',
            'estado_id' => '15',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naucalpan de Juárez',
            'estado_id' => '15',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nezahualcóyotl',
            'estado_id' => '15',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nextlalpan',
            'estado_id' => '15',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nicolás Romero',
            'estado_id' => '15',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nopaltepec',
            'estado_id' => '15',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocoyoacac',
            'estado_id' => '15',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocuilan',
            'estado_id' => '15',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Oro',
            'estado_id' => '15',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Otumba',
            'estado_id' => '15',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Otzoloapan',
            'estado_id' => '15',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Otzolotepec',
            'estado_id' => '15',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ozumba',
            'estado_id' => '15',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Papalotla',
            'estado_id' => '15',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Paz',
            'estado_id' => '15',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Polotitlán',
            'estado_id' => '15',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rayón',
            'estado_id' => '15',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio la Isla',
            'estado_id' => '15',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe del Progreso',
            'estado_id' => '15',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín de las Pirámides',
            'estado_id' => '15',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Atenco',
            'estado_id' => '15',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Simón de Guerrero',
            'estado_id' => '15',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás',
            'estado_id' => '15',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soyaniquilpan de Juárez',
            'estado_id' => '15',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sultepec',
            'estado_id' => '15',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecámac',
            'estado_id' => '15',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tejupilco',
            'estado_id' => '15',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temamatla',
            'estado_id' => '15',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temascalapa',
            'estado_id' => '15',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temascalcingo',
            'estado_id' => '15',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temascaltepec',
            'estado_id' => '15',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temoaya',
            'estado_id' => '15',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenancingo',
            'estado_id' => '15',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenango del Aire',
            'estado_id' => '15',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenango del Valle',
            'estado_id' => '15',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teoloyucan',
            'estado_id' => '15',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teotihuacán',
            'estado_id' => '15',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetlaoxtoc',
            'estado_id' => '15',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetlixpa',
            'estado_id' => '15',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepotzotlán',
            'estado_id' => '15',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tequixquiac',
            'estado_id' => '15',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texcaltitlán',
            'estado_id' => '15',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texcalyacac',
            'estado_id' => '15',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texcoco',
            'estado_id' => '15',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tezoyuca',
            'estado_id' => '15',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tianguistenco',
            'estado_id' => '15',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Timilpan',
            'estado_id' => '15',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalmanalco',
            'estado_id' => '15',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalnepantla de Baz',
            'estado_id' => '15',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlatlaya',
            'estado_id' => '15',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Toluca',
            'estado_id' => '15',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonatico',
            'estado_id' => '15',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tultepec',
            'estado_id' => '15',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tultitlán',
            'estado_id' => '15',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Bravo',
            'estado_id' => '15',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Allende',
            'estado_id' => '15',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa del Carbón',
            'estado_id' => '15',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Guerrero',
            'estado_id' => '15',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Victoria',
            'estado_id' => '15',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xonacatlán',
            'estado_id' => '15',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacazonapan',
            'estado_id' => '15',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacualpan',
            'estado_id' => '15',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zinacantepec',
            'estado_id' => '15',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zumpahuacán',
            'estado_id' => '15',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zumpango',
            'estado_id' => '15',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautitlán Izcalli',
            'estado_id' => '15',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle de Chalco Solidaridad',
            'estado_id' => '15',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Luvianos',
            'estado_id' => '15',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José del Rincón',
            'estado_id' => '15',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonanitla',
            'estado_id' => '15',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acuitzio',
            'estado_id' => '16',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aguililla',
            'estado_id' => '16',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Álvaro Obregón',
            'estado_id' => '16',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Angamacutiro',
            'estado_id' => '16',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Angangueo',
            'estado_id' => '16',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apatzingán',
            'estado_id' => '16',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aporo',
            'estado_id' => '16',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aquila',
            'estado_id' => '16',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ario',
            'estado_id' => '16',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arteaga',
            'estado_id' => '16',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Briseñas',
            'estado_id' => '16',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Buenavista',
            'estado_id' => '16',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carácuaro',
            'estado_id' => '16',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coahuayana',
            'estado_id' => '16',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coalcomán de Vázquez Pallares',
            'estado_id' => '16',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coeneo',
            'estado_id' => '16',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Contepec',
            'estado_id' => '16',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Copándaro',
            'estado_id' => '16',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cotija',
            'estado_id' => '16',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuitzeo',
            'estado_id' => '16',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Charapan',
            'estado_id' => '16',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Charo',
            'estado_id' => '16',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chavinda',
            'estado_id' => '16',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cherán',
            'estado_id' => '16',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilchota',
            'estado_id' => '16',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chinicuila',
            'estado_id' => '16',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chucándiro',
            'estado_id' => '16',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Churintzio',
            'estado_id' => '16',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Churumuco',
            'estado_id' => '16',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ecuandureo',
            'estado_id' => '16',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Epitacio Huerta',
            'estado_id' => '16',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Erongarícuaro',
            'estado_id' => '16',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gabriel Zamora',
            'estado_id' => '16',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo',
            'estado_id' => '16',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Huacana',
            'estado_id' => '16',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huandacareo',
            'estado_id' => '16',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huaniqueo',
            'estado_id' => '16',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huetamo',
            'estado_id' => '16',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huiramba',
            'estado_id' => '16',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Indaparapeo',
            'estado_id' => '16',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Irimbo',
            'estado_id' => '16',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlán',
            'estado_id' => '16',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jacona',
            'estado_id' => '16',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiménez',
            'estado_id' => '16',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiquilpan',
            'estado_id' => '16',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez',
            'estado_id' => '16',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jungapeo',
            'estado_id' => '16',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lagunillas',
            'estado_id' => '16',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Madero',
            'estado_id' => '16',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maravatío',
            'estado_id' => '16',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Marcos Castellanos',
            'estado_id' => '16',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '16',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelia',
            'estado_id' => '16',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelos',
            'estado_id' => '16',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Múgica',
            'estado_id' => '16',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nahuatzen',
            'estado_id' => '16',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nocupétaro',
            'estado_id' => '16',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Parangaricutiro',
            'estado_id' => '16',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Urecho',
            'estado_id' => '16',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Numarán',
            'estado_id' => '16',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '16',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pajacuarán',
            'estado_id' => '16',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Panindícuaro',
            'estado_id' => '16',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Parácuaro',
            'estado_id' => '16',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Paracho',
            'estado_id' => '16',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pátzcuaro',
            'estado_id' => '16',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Penjamillo',
            'estado_id' => '16',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Peribán',
            'estado_id' => '16',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Piedad',
            'estado_id' => '16',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Purépero',
            'estado_id' => '16',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puruándiro',
            'estado_id' => '16',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Queréndaro',
            'estado_id' => '16',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quiroga',
            'estado_id' => '16',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cojumatlán de Régules',
            'estado_id' => '16',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Reyes',
            'estado_id' => '16',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sahuayo',
            'estado_id' => '16',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas',
            'estado_id' => '16',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Maya',
            'estado_id' => '16',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salvador Escalante',
            'estado_id' => '16',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Senguio',
            'estado_id' => '16',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Susupuato',
            'estado_id' => '16',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tacámbaro',
            'estado_id' => '16',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tancítaro',
            'estado_id' => '16',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tangamandapio',
            'estado_id' => '16',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tangancícuaro',
            'estado_id' => '16',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tanhuato',
            'estado_id' => '16',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Taretan',
            'estado_id' => '16',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tarímbaro',
            'estado_id' => '16',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepalcatepec',
            'estado_id' => '16',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tingambato',
            'estado_id' => '16',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tingüindín',
            'estado_id' => '16',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tiquicheo de Nicolás Romero',
            'estado_id' => '16',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalpujahua',
            'estado_id' => '16',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlazazalca',
            'estado_id' => '16',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tocumbo',
            'estado_id' => '16',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tumbiscatío',
            'estado_id' => '16',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Turicato',
            'estado_id' => '16',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxpan',
            'estado_id' => '16',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuzantla',
            'estado_id' => '16',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzintzuntzan',
            'estado_id' => '16',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzitzio',
            'estado_id' => '16',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Uruapan',
            'estado_id' => '16',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '16',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villamar',
            'estado_id' => '16',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vista Hermosa',
            'estado_id' => '16',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yurécuaro',
            'estado_id' => '16',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacapu',
            'estado_id' => '16',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zamora',
            'estado_id' => '16',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zináparo',
            'estado_id' => '16',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zinapécuaro',
            'estado_id' => '16',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ziracuaretiro',
            'estado_id' => '16',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zitácuaro',
            'estado_id' => '16',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'José Sixto Verduzco',
            'estado_id' => '16',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amacuzac',
            'estado_id' => '17',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlatlahucan',
            'estado_id' => '17',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Axochiapan',
            'estado_id' => '17',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayala',
            'estado_id' => '17',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatlán del Río',
            'estado_id' => '17',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautla',
            'estado_id' => '17',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuernavaca',
            'estado_id' => '17',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '17',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huitzilac',
            'estado_id' => '17',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jantetelco',
            'estado_id' => '17',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiutepec',
            'estado_id' => '17',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jojutla',
            'estado_id' => '17',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jonacatepec',
            'estado_id' => '17',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatepec',
            'estado_id' => '17',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miacatlán',
            'estado_id' => '17',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocuituco',
            'estado_id' => '17',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puente de Ixtla',
            'estado_id' => '17',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temixco',
            'estado_id' => '17',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepalcingo',
            'estado_id' => '17',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepoztlán',
            'estado_id' => '17',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetecala',
            'estado_id' => '17',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetela del Volcán',
            'estado_id' => '17',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalnepantla',
            'estado_id' => '17',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaltizapán de Zapata',
            'estado_id' => '17',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaquiltenango',
            'estado_id' => '17',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlayacapan',
            'estado_id' => '17',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totolapan',
            'estado_id' => '17',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochitepec',
            'estado_id' => '17',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yautepec',
            'estado_id' => '17',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yecapixtla',
            'estado_id' => '17',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacatepec',
            'estado_id' => '17',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacualpan de Amilpas',
            'estado_id' => '17',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temoac',
            'estado_id' => '17',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acaponeta',
            'estado_id' => '18',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuacatlán',
            'estado_id' => '18',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatlán de Cañas',
            'estado_id' => '18',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Compostela',
            'estado_id' => '18',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huajicori',
            'estado_id' => '18',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlán del Río',
            'estado_id' => '18',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jala',
            'estado_id' => '18',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xalisco',
            'estado_id' => '18',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Del Nayar',
            'estado_id' => '18',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rosamorada',
            'estado_id' => '18',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ruíz',
            'estado_id' => '18',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Blas',
            'estado_id' => '18',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Lagunillas',
            'estado_id' => '18',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María del Oro',
            'estado_id' => '18',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Ixcuintla',
            'estado_id' => '18',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecuala',
            'estado_id' => '18',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepic',
            'estado_id' => '18',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxpan',
            'estado_id' => '18',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Yesca',
            'estado_id' => '18',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bahía de Banderas',
            'estado_id' => '18',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abasolo',
            'estado_id' => '19',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Agualeguas',
            'estado_id' => '19',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Aldamas',
            'estado_id' => '19',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Allende',
            'estado_id' => '19',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Anáhuac',
            'estado_id' => '19',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apodaca',
            'estado_id' => '19',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aramberri',
            'estado_id' => '19',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bustamante',
            'estado_id' => '19',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cadereyta Jiménez',
            'estado_id' => '19',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Carmen',
            'estado_id' => '19',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cerralvo',
            'estado_id' => '19',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciénega de Flores',
            'estado_id' => '19',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'China',
            'estado_id' => '19',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Doctor Arroyo',
            'estado_id' => '19',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Doctor Coss',
            'estado_id' => '19',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Doctor González',
            'estado_id' => '19',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Galeana',
            'estado_id' => '19',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'García',
            'estado_id' => '19',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Garza García',
            'estado_id' => '19',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Bravo',
            'estado_id' => '19',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Escobedo',
            'estado_id' => '19',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Terán',
            'estado_id' => '19',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Treviño',
            'estado_id' => '19',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Zaragoza',
            'estado_id' => '19',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Zuazua',
            'estado_id' => '19',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe',
            'estado_id' => '19',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Herreras',
            'estado_id' => '19',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Higueras',
            'estado_id' => '19',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hualahuises',
            'estado_id' => '19',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Iturbide',
            'estado_id' => '19',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juárez',
            'estado_id' => '19',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lampazos de Naranjo',
            'estado_id' => '19',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Linares',
            'estado_id' => '19',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Marín',
            'estado_id' => '19',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '19',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mier y Noriega',
            'estado_id' => '19',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mina',
            'estado_id' => '19',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Montemorelos',
            'estado_id' => '19',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Monterrey',
            'estado_id' => '19',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Parás',
            'estado_id' => '19',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pesquería',
            'estado_id' => '19',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Ramones',
            'estado_id' => '19',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rayones',
            'estado_id' => '19',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sabinas Hidalgo',
            'estado_id' => '19',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salinas Victoria',
            'estado_id' => '19',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás de los Garza',
            'estado_id' => '19',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo',
            'estado_id' => '19',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '19',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago',
            'estado_id' => '19',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vallecillo',
            'estado_id' => '19',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villaldama',
            'estado_id' => '19',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abejones',
            'estado_id' => '20',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatlán de Pérez Figueroa',
            'estado_id' => '20',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Cacalotepec',
            'estado_id' => '20',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Cuyotepeji',
            'estado_id' => '20',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Ixtaltepec',
            'estado_id' => '20',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Nochixtlán',
            'estado_id' => '20',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Ocotlán',
            'estado_id' => '20',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Asunción Tlacolulita',
            'estado_id' => '20',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayotzintepec',
            'estado_id' => '20',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Barrio de la Soledad',
            'estado_id' => '20',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calihualá',
            'estado_id' => '20',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Candelaria Loxicha',
            'estado_id' => '20',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciénega de Zimatlán',
            'estado_id' => '20',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciudad Ixtepec',
            'estado_id' => '20',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatecas Altas',
            'estado_id' => '20',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coicoyán de las Flores',
            'estado_id' => '20',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Compañía',
            'estado_id' => '20',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Concepción Buenavista',
            'estado_id' => '20',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Concepción Pápalo',
            'estado_id' => '20',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Constancia del Rosario',
            'estado_id' => '20',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosolapa',
            'estado_id' => '20',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosoltepec',
            'estado_id' => '20',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuilápam de Guerrero',
            'estado_id' => '20',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuyamecalco Villa de Zaragoza',
            'estado_id' => '20',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chahuites',
            'estado_id' => '20',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalcatongo de Hidalgo',
            'estado_id' => '20',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiquihuitlán de Benito Juárez',
            'estado_id' => '20',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Heroica Ciudad de Ejutla de Crespo',
            'estado_id' => '20',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Eloxochitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Espinal',
            'estado_id' => '20',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamazulápam del Espíritu Santo',
            'estado_id' => '20',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Fresnillo de Trujano',
            'estado_id' => '20',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe Etla',
            'estado_id' => '20',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe de Ramírez',
            'estado_id' => '20',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guelatao de Juárez',
            'estado_id' => '20',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guevea de Humboldt',
            'estado_id' => '20',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mesones Hidalgo',
            'estado_id' => '20',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '20',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Heroica Ciudad de Huajuapan de León',
            'estado_id' => '20',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huautepec',
            'estado_id' => '20',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huautla de Jiménez',
            'estado_id' => '20',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtlán de Juárez',
            'estado_id' => '20',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'estado_id' => '20',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Loma Bonita',
            'estado_id' => '20',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Apasco',
            'estado_id' => '20',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Jaltepec',
            'estado_id' => '20',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Magdalena Jicotlán',
            'estado_id' => '20',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Mixtepec',
            'estado_id' => '20',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Ocotlán',
            'estado_id' => '20',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Peñasco',
            'estado_id' => '20',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Teitipac',
            'estado_id' => '20',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Tequisistlán',
            'estado_id' => '20',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Tlacotepec',
            'estado_id' => '20',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Zahuatlán',
            'estado_id' => '20',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mariscala de Juárez',
            'estado_id' => '20',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mártires de Tacubaya',
            'estado_id' => '20',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matías Romero Avendaño',
            'estado_id' => '20',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatlán Villa de Flores',
            'estado_id' => '20',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miahuatlán de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mixistlán de la Reforma',
            'estado_id' => '20',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Monjas',
            'estado_id' => '20',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Natividad',
            'estado_id' => '20',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nazareno Etla',
            'estado_id' => '20',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nejapa de Madero',
            'estado_id' => '20',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixpantepec Nieves',
            'estado_id' => '20',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Niltepec',
            'estado_id' => '20',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oaxaca de Juárez',
            'estado_id' => '20',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocotlán de Morelos',
            'estado_id' => '20',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Pe',
            'estado_id' => '20',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pinotepa de Don Luis',
            'estado_id' => '20',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pluma Hidalgo',
            'estado_id' => '20',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José del Progreso',
            'estado_id' => '20',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Putla Villa de Guerrero',
            'estado_id' => '20',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Quioquitani',
            'estado_id' => '20',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Reforma de Pineda',
            'estado_id' => '20',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Reforma',
            'estado_id' => '20',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Reyes Etla',
            'estado_id' => '20',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rojas de Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salina Cruz',
            'estado_id' => '20',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Amatengo',
            'estado_id' => '20',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Atenango',
            'estado_id' => '20',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Chayuco',
            'estado_id' => '20',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín de las Juntas',
            'estado_id' => '20',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Etla',
            'estado_id' => '20',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Loxicha',
            'estado_id' => '20',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Tlacotepec',
            'estado_id' => '20',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Agustín Yatareni',
            'estado_id' => '20',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Cabecera Nueva',
            'estado_id' => '20',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Dinicuiti',
            'estado_id' => '20',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Huaxpaltepec',
            'estado_id' => '20',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Huayápam',
            'estado_id' => '20',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Lagunas',
            'estado_id' => '20',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Nuxiño',
            'estado_id' => '20',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Paxtlán',
            'estado_id' => '20',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Sinaxtla',
            'estado_id' => '20',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Solaga',
            'estado_id' => '20',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Teotilálpam',
            'estado_id' => '20',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Tepetlapa',
            'estado_id' => '20',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Yaá',
            'estado_id' => '20',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Zabache',
            'estado_id' => '20',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Zautla',
            'estado_id' => '20',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonino Castillo Velasco',
            'estado_id' => '20',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonino el Alto',
            'estado_id' => '20',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonino Monte Verde',
            'estado_id' => '20',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Acutla',
            'estado_id' => '20',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio de la Cal',
            'estado_id' => '20',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Huitepec',
            'estado_id' => '20',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Nanahuatípam',
            'estado_id' => '20',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Sinicahua',
            'estado_id' => '20',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Tepetlapa',
            'estado_id' => '20',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Baltazar Chichicápam',
            'estado_id' => '20',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Baltazar Loxicha',
            'estado_id' => '20',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Baltazar Yatzachi el Bajo',
            'estado_id' => '20',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolo Coyotepec',
            'estado_id' => '20',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolomé Ayautla',
            'estado_id' => '20',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolomé Loxicha',
            'estado_id' => '20',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolomé Quialana',
            'estado_id' => '20',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolomé Yucuañe',
            'estado_id' => '20',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolomé Zoogocho',
            'estado_id' => '20',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolo Soyaltepec',
            'estado_id' => '20',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bartolo Yautepec',
            'estado_id' => '20',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Bernardo Mixtepec',
            'estado_id' => '20',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Blas Atempa',
            'estado_id' => '20',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Carlos Yautepec',
            'estado_id' => '20',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal Amatlán',
            'estado_id' => '20',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal Amoltepec',
            'estado_id' => '20',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal Lachirioag',
            'estado_id' => '20',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Cristóbal Suchixtlahuaca',
            'estado_id' => '20',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Dionisio del Mar',
            'estado_id' => '20',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Dionisio Ocotepec',
            'estado_id' => '20',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Dionisio Ocotlán',
            'estado_id' => '20',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Esteban Atatlahuca',
            'estado_id' => '20',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Jalapa de Díaz',
            'estado_id' => '20',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Tejalápam',
            'estado_id' => '20',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Usila',
            'estado_id' => '20',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Cahuacuá',
            'estado_id' => '20',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Cajonos',
            'estado_id' => '20',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Chapulapa',
            'estado_id' => '20',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Chindúa',
            'estado_id' => '20',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco del Mar',
            'estado_id' => '20',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Huehuetlán',
            'estado_id' => '20',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Ixhuatán',
            'estado_id' => '20',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Lachigoló',
            'estado_id' => '20',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Logueche',
            'estado_id' => '20',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Nuxaño',
            'estado_id' => '20',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Ozolotepec',
            'estado_id' => '20',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Sola',
            'estado_id' => '20',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Telixtlahuaca',
            'estado_id' => '20',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Teopan',
            'estado_id' => '20',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Tlapancingo',
            'estado_id' => '20',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Gabriel Mixtepec',
            'estado_id' => '20',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ildefonso Amatlán',
            'estado_id' => '20',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ildefonso Sola',
            'estado_id' => '20',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ildefonso Villa Alta',
            'estado_id' => '20',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jacinto Amilpas',
            'estado_id' => '20',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jacinto Tlacotepec',
            'estado_id' => '20',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Coatlán',
            'estado_id' => '20',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Silacayoapilla',
            'estado_id' => '20',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Sosola',
            'estado_id' => '20',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Taviche',
            'estado_id' => '20',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Tecóatl',
            'estado_id' => '20',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jorge Nuchita',
            'estado_id' => '20',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Ayuquila',
            'estado_id' => '20',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Chiltepec',
            'estado_id' => '20',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José del Peñasco',
            'estado_id' => '20',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Estancia Grande',
            'estado_id' => '20',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Independencia',
            'estado_id' => '20',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Lachiguiri',
            'estado_id' => '20',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Tenango',
            'estado_id' => '20',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Achiutla',
            'estado_id' => '20',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Atepec',
            'estado_id' => '20',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ánimas Trujano',
            'estado_id' => '20',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Atatlahuca',
            'estado_id' => '20',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Coixtlahuaca',
            'estado_id' => '20',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Cuicatlán',
            'estado_id' => '20',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Guelache',
            'estado_id' => '20',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Jayacatlán',
            'estado_id' => '20',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Lo de Soto',
            'estado_id' => '20',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Suchitepec',
            'estado_id' => '20',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Tlacoatzintepec',
            'estado_id' => '20',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Tlachichilco',
            'estado_id' => '20',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Tuxtepec',
            'estado_id' => '20',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Cacahuatepec',
            'estado_id' => '20',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Cieneguilla',
            'estado_id' => '20',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Coatzóspam',
            'estado_id' => '20',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Colorado',
            'estado_id' => '20',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Comaltepec',
            'estado_id' => '20',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Cotzocón',
            'estado_id' => '20',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Chicomezúchil',
            'estado_id' => '20',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Chilateca',
            'estado_id' => '20',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan del Estado',
            'estado_id' => '20',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '20',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Diuxi',
            'estado_id' => '20',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Evangelista Analco',
            'estado_id' => '20',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Guelavía',
            'estado_id' => '20',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Guichicovi',
            'estado_id' => '20',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Ihualtepec',
            'estado_id' => '20',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Juquila Mixes',
            'estado_id' => '20',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Juquila Vijanos',
            'estado_id' => '20',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Lachao',
            'estado_id' => '20',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Lachigalla',
            'estado_id' => '20',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Lajarcia',
            'estado_id' => '20',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Lalana',
            'estado_id' => '20',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan de los Cués',
            'estado_id' => '20',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Mazatlán',
            'estado_id' => '20',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Mixtepec',
            'estado_id' => '20',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Ñumí',
            'estado_id' => '20',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Ozolotepec',
            'estado_id' => '20',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Petlapa',
            'estado_id' => '20',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Quiahije',
            'estado_id' => '20',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Quiotepec',
            'estado_id' => '20',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Sayultepec',
            'estado_id' => '20',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Tabaá',
            'estado_id' => '20',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Tamazola',
            'estado_id' => '20',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Teita',
            'estado_id' => '20',
            'number' =>  '218',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Teitipac',
            'estado_id' => '20',
            'number' =>  '219',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Tepeuxila',
            'estado_id' => '20',
            'number' =>  '220',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Teposcolula',
            'estado_id' => '20',
            'number' =>  '221',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Yaeé',
            'estado_id' => '20',
            'number' =>  '222',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Yatzona',
            'estado_id' => '20',
            'number' =>  '223',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Yucuita',
            'estado_id' => '20',
            'number' =>  '224',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo',
            'estado_id' => '20',
            'number' =>  '225',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Albarradas',
            'estado_id' => '20',
            'number' =>  '226',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Cacaotepec',
            'estado_id' => '20',
            'number' =>  '227',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Cuaunecuiltitla',
            'estado_id' => '20',
            'number' =>  '228',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Texmelúcan',
            'estado_id' => '20',
            'number' =>  '229',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Victoria',
            'estado_id' => '20',
            'number' =>  '230',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas Camotlán',
            'estado_id' => '20',
            'number' =>  '231',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas Ojitlán',
            'estado_id' => '20',
            'number' =>  '232',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas Quiaviní',
            'estado_id' => '20',
            'number' =>  '233',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas Zoquiápam',
            'estado_id' => '20',
            'number' =>  '234',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis Amatlán',
            'estado_id' => '20',
            'number' =>  '235',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Marcial Ozolotepec',
            'estado_id' => '20',
            'number' =>  '236',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Marcos Arteaga',
            'estado_id' => '20',
            'number' =>  '237',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín de los Cansecos',
            'estado_id' => '20',
            'number' =>  '238',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Huamelúlpam',
            'estado_id' => '20',
            'number' =>  '239',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Itunyoso',
            'estado_id' => '20',
            'number' =>  '240',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Lachilá',
            'estado_id' => '20',
            'number' =>  '241',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Peras',
            'estado_id' => '20',
            'number' =>  '242',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Tilcajete',
            'estado_id' => '20',
            'number' =>  '243',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Toxpalan',
            'estado_id' => '20',
            'number' =>  '244',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Zacatepec',
            'estado_id' => '20',
            'number' =>  '245',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Cajonos',
            'estado_id' => '20',
            'number' =>  '246',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Capulálpam de Méndez',
            'estado_id' => '20',
            'number' =>  '247',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo del Mar',
            'estado_id' => '20',
            'number' =>  '248',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Yoloxochitlán',
            'estado_id' => '20',
            'number' =>  '249',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Etlatongo',
            'estado_id' => '20',
            'number' =>  '250',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Nejápam',
            'estado_id' => '20',
            'number' =>  '251',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Peñasco',
            'estado_id' => '20',
            'number' =>  '252',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Piñas',
            'estado_id' => '20',
            'number' =>  '253',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Río Hondo',
            'estado_id' => '20',
            'number' =>  '254',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Sindihui',
            'estado_id' => '20',
            'number' =>  '255',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Tlapiltepec',
            'estado_id' => '20',
            'number' =>  '256',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Melchor Betaza',
            'estado_id' => '20',
            'number' =>  '257',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Achiutla',
            'estado_id' => '20',
            'number' =>  '258',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Ahuehuetitlán',
            'estado_id' => '20',
            'number' =>  '259',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Aloápam',
            'estado_id' => '20',
            'number' =>  '260',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Amatitlán',
            'estado_id' => '20',
            'number' =>  '261',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Amatlán',
            'estado_id' => '20',
            'number' =>  '262',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Coatlán',
            'estado_id' => '20',
            'number' =>  '263',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Chicahua',
            'estado_id' => '20',
            'number' =>  '264',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Chimalapa',
            'estado_id' => '20',
            'number' =>  '265',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel del Puerto',
            'estado_id' => '20',
            'number' =>  '266',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel del Río',
            'estado_id' => '20',
            'number' =>  '267',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Ejutla',
            'estado_id' => '20',
            'number' =>  '268',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel el Grande',
            'estado_id' => '20',
            'number' =>  '269',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Huautla',
            'estado_id' => '20',
            'number' =>  '270',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Mixtepec',
            'estado_id' => '20',
            'number' =>  '271',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Panixtlahuaca',
            'estado_id' => '20',
            'number' =>  '272',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Peras',
            'estado_id' => '20',
            'number' =>  '273',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Piedras',
            'estado_id' => '20',
            'number' =>  '274',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Quetzaltepec',
            'estado_id' => '20',
            'number' =>  '275',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Santa Flor',
            'estado_id' => '20',
            'number' =>  '276',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Sola de Vega',
            'estado_id' => '20',
            'number' =>  '277',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Soyaltepec',
            'estado_id' => '20',
            'number' =>  '278',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Suchixtepec',
            'estado_id' => '20',
            'number' =>  '279',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Talea de Castro',
            'estado_id' => '20',
            'number' =>  '280',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tecomatlán',
            'estado_id' => '20',
            'number' =>  '281',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tenango',
            'estado_id' => '20',
            'number' =>  '282',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tequixtepec',
            'estado_id' => '20',
            'number' =>  '283',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tilquiápam',
            'estado_id' => '20',
            'number' =>  '284',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tlacamama',
            'estado_id' => '20',
            'number' =>  '285',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tlacotepec',
            'estado_id' => '20',
            'number' =>  '286',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Tulancingo',
            'estado_id' => '20',
            'number' =>  '287',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Yotao',
            'estado_id' => '20',
            'number' =>  '288',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás',
            'estado_id' => '20',
            'number' =>  '289',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás Hidalgo',
            'estado_id' => '20',
            'number' =>  '290',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Coatlán',
            'estado_id' => '20',
            'number' =>  '291',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Cuatro Venados',
            'estado_id' => '20',
            'number' =>  '292',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Etla',
            'estado_id' => '20',
            'number' =>  '293',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Huitzo',
            'estado_id' => '20',
            'number' =>  '294',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Huixtepec',
            'estado_id' => '20',
            'number' =>  '295',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Macuiltianguis',
            'estado_id' => '20',
            'number' =>  '296',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Tijaltepec',
            'estado_id' => '20',
            'number' =>  '297',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Villa de Mitla',
            'estado_id' => '20',
            'number' =>  '298',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Yaganiza',
            'estado_id' => '20',
            'number' =>  '299',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Amuzgos',
            'estado_id' => '20',
            'number' =>  '300',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Apóstol',
            'estado_id' => '20',
            'number' =>  '301',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Atoyac',
            'estado_id' => '20',
            'number' =>  '302',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Cajonos',
            'estado_id' => '20',
            'number' =>  '303',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Coxcaltepec Cántaros',
            'estado_id' => '20',
            'number' =>  '304',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Comitancillo',
            'estado_id' => '20',
            'number' =>  '305',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro el Alto',
            'estado_id' => '20',
            'number' =>  '306',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Huamelula',
            'estado_id' => '20',
            'number' =>  '307',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Huilotepec',
            'estado_id' => '20',
            'number' =>  '308',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Ixcatlán',
            'estado_id' => '20',
            'number' =>  '309',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Ixtlahuaca',
            'estado_id' => '20',
            'number' =>  '310',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Jaltepetongo',
            'estado_id' => '20',
            'number' =>  '311',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Jicayán',
            'estado_id' => '20',
            'number' =>  '312',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Jocotipac',
            'estado_id' => '20',
            'number' =>  '313',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Juchatengo',
            'estado_id' => '20',
            'number' =>  '314',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Mártir',
            'estado_id' => '20',
            'number' =>  '315',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Mártir Quiechapa',
            'estado_id' => '20',
            'number' =>  '316',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Mártir Yucuxaco',
            'estado_id' => '20',
            'number' =>  '317',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '318',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Mixtepec',
            'estado_id' => '20',
            'number' =>  '319',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Molinos',
            'estado_id' => '20',
            'number' =>  '320',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Nopala',
            'estado_id' => '20',
            'number' =>  '321',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Ocopetatillo',
            'estado_id' => '20',
            'number' =>  '322',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Ocotepec',
            'estado_id' => '20',
            'number' =>  '323',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Pochutla',
            'estado_id' => '20',
            'number' =>  '324',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Quiatoni',
            'estado_id' => '20',
            'number' =>  '325',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Sochiápam',
            'estado_id' => '20',
            'number' =>  '326',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Tapanatepec',
            'estado_id' => '20',
            'number' =>  '327',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Taviche',
            'estado_id' => '20',
            'number' =>  '328',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Teozacoalco',
            'estado_id' => '20',
            'number' =>  '329',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Teutila',
            'estado_id' => '20',
            'number' =>  '330',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Tidaá',
            'estado_id' => '20',
            'number' =>  '331',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Topiltepec',
            'estado_id' => '20',
            'number' =>  '332',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Totolápam',
            'estado_id' => '20',
            'number' =>  '333',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Tututepec de Melchor Ocampo',
            'estado_id' => '20',
            'number' =>  '334',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Yaneri',
            'estado_id' => '20',
            'number' =>  '335',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Yólox',
            'estado_id' => '20',
            'number' =>  '336',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro y San Pablo Ayutla',
            'estado_id' => '20',
            'number' =>  '337',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Etla',
            'estado_id' => '20',
            'number' =>  '338',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro y San Pablo Teposcolula',
            'estado_id' => '20',
            'number' =>  '339',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro y San Pablo Tequixtepec',
            'estado_id' => '20',
            'number' =>  '340',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Yucunama',
            'estado_id' => '20',
            'number' =>  '341',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Raymundo Jalpan',
            'estado_id' => '20',
            'number' =>  '342',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Abasolo',
            'estado_id' => '20',
            'number' =>  '343',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Coatlán',
            'estado_id' => '20',
            'number' =>  '344',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Ixcapa',
            'estado_id' => '20',
            'number' =>  '345',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Nicananduta',
            'estado_id' => '20',
            'number' =>  '346',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Río Hondo',
            'estado_id' => '20',
            'number' =>  '347',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Tecomaxtlahuaca',
            'estado_id' => '20',
            'number' =>  '348',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Teitipac',
            'estado_id' => '20',
            'number' =>  '349',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Tutla',
            'estado_id' => '20',
            'number' =>  '350',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Simón Almolongas',
            'estado_id' => '20',
            'number' =>  '351',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Simón Zahuatlán',
            'estado_id' => '20',
            'number' =>  '352',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana',
            'estado_id' => '20',
            'number' =>  '353',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Ateixtlahuaca',
            'estado_id' => '20',
            'number' =>  '354',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Cuauhtémoc',
            'estado_id' => '20',
            'number' =>  '355',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana del Valle',
            'estado_id' => '20',
            'number' =>  '356',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Tavela',
            'estado_id' => '20',
            'number' =>  '357',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Tlapacoyan',
            'estado_id' => '20',
            'number' =>  '358',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Yareni',
            'estado_id' => '20',
            'number' =>  '359',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Zegache',
            'estado_id' => '20',
            'number' =>  '360',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catalina Quierí',
            'estado_id' => '20',
            'number' =>  '361',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Cuixtla',
            'estado_id' => '20',
            'number' =>  '362',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Ixtepeji',
            'estado_id' => '20',
            'number' =>  '363',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Juquila',
            'estado_id' => '20',
            'number' =>  '364',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Lachatao',
            'estado_id' => '20',
            'number' =>  '365',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Loxicha',
            'estado_id' => '20',
            'number' =>  '366',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Mechoacán',
            'estado_id' => '20',
            'number' =>  '367',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Minas',
            'estado_id' => '20',
            'number' =>  '368',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Quiané',
            'estado_id' => '20',
            'number' =>  '369',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Tayata',
            'estado_id' => '20',
            'number' =>  '370',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Ticuá',
            'estado_id' => '20',
            'number' =>  '371',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Yosonotú',
            'estado_id' => '20',
            'number' =>  '372',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Zapoquila',
            'estado_id' => '20',
            'number' =>  '373',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Acatepec',
            'estado_id' => '20',
            'number' =>  '374',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Amilpas',
            'estado_id' => '20',
            'number' =>  '375',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz de Bravo',
            'estado_id' => '20',
            'number' =>  '376',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Itundujia',
            'estado_id' => '20',
            'number' =>  '377',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Mixtepec',
            'estado_id' => '20',
            'number' =>  '378',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Nundaco',
            'estado_id' => '20',
            'number' =>  '379',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Papalutla',
            'estado_id' => '20',
            'number' =>  '380',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Tacache de Mina',
            'estado_id' => '20',
            'number' =>  '381',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Tacahua',
            'estado_id' => '20',
            'number' =>  '382',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Tayata',
            'estado_id' => '20',
            'number' =>  '383',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Xitla',
            'estado_id' => '20',
            'number' =>  '384',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Xoxocotlán',
            'estado_id' => '20',
            'number' =>  '385',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Zenzontepec',
            'estado_id' => '20',
            'number' =>  '386',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Gertrudis',
            'estado_id' => '20',
            'number' =>  '387',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Inés del Monte',
            'estado_id' => '20',
            'number' =>  '388',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Inés Yatzeche',
            'estado_id' => '20',
            'number' =>  '389',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Lucía del Camino',
            'estado_id' => '20',
            'number' =>  '390',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Lucía Miahuatlán',
            'estado_id' => '20',
            'number' =>  '391',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Lucía Monteverde',
            'estado_id' => '20',
            'number' =>  '392',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Lucía Ocotlán',
            'estado_id' => '20',
            'number' =>  '393',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Alotepec',
            'estado_id' => '20',
            'number' =>  '394',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Apazco',
            'estado_id' => '20',
            'number' =>  '395',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María la Asunción',
            'estado_id' => '20',
            'number' =>  '396',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Heroica Ciudad de Tlaxiaco',
            'estado_id' => '20',
            'number' =>  '397',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayoquezco de Aldama',
            'estado_id' => '20',
            'number' =>  '398',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Atzompa',
            'estado_id' => '20',
            'number' =>  '399',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Camotlán',
            'estado_id' => '20',
            'number' =>  '400',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Colotepec',
            'estado_id' => '20',
            'number' =>  '401',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Cortijo',
            'estado_id' => '20',
            'number' =>  '402',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Coyotepec',
            'estado_id' => '20',
            'number' =>  '403',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Chachoápam',
            'estado_id' => '20',
            'number' =>  '404',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Chilapa de Díaz',
            'estado_id' => '20',
            'number' =>  '405',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Chilchotla',
            'estado_id' => '20',
            'number' =>  '406',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Chimalapa',
            'estado_id' => '20',
            'number' =>  '407',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María del Rosario',
            'estado_id' => '20',
            'number' =>  '408',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María del Tule',
            'estado_id' => '20',
            'number' =>  '409',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Ecatepec',
            'estado_id' => '20',
            'number' =>  '410',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Guelacé',
            'estado_id' => '20',
            'number' =>  '411',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Guienagati',
            'estado_id' => '20',
            'number' =>  '412',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Huatulco',
            'estado_id' => '20',
            'number' =>  '413',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Huazolotitlán',
            'estado_id' => '20',
            'number' =>  '414',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Ipalapa',
            'estado_id' => '20',
            'number' =>  '415',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Ixcatlán',
            'estado_id' => '20',
            'number' =>  '416',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Jacatepec',
            'estado_id' => '20',
            'number' =>  '417',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Jalapa del Marqués',
            'estado_id' => '20',
            'number' =>  '418',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Jaltianguis',
            'estado_id' => '20',
            'number' =>  '419',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Lachixío',
            'estado_id' => '20',
            'number' =>  '420',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Mixtequilla',
            'estado_id' => '20',
            'number' =>  '421',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Nativitas',
            'estado_id' => '20',
            'number' =>  '422',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Nduayaco',
            'estado_id' => '20',
            'number' =>  '423',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Ozolotepec',
            'estado_id' => '20',
            'number' =>  '424',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Pápalo',
            'estado_id' => '20',
            'number' =>  '425',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Peñoles',
            'estado_id' => '20',
            'number' =>  '426',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Petapa',
            'estado_id' => '20',
            'number' =>  '427',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Quiegolani',
            'estado_id' => '20',
            'number' =>  '428',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Sola',
            'estado_id' => '20',
            'number' =>  '429',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tataltepec',
            'estado_id' => '20',
            'number' =>  '430',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tecomavaca',
            'estado_id' => '20',
            'number' =>  '431',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Temaxcalapa',
            'estado_id' => '20',
            'number' =>  '432',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Temaxcaltepec',
            'estado_id' => '20',
            'number' =>  '433',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Teopoxco',
            'estado_id' => '20',
            'number' =>  '434',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tepantlali',
            'estado_id' => '20',
            'number' =>  '435',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Texcatitlán',
            'estado_id' => '20',
            'number' =>  '436',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tlahuitoltepec',
            'estado_id' => '20',
            'number' =>  '437',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tlalixtac',
            'estado_id' => '20',
            'number' =>  '438',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Tonombreca',
            'estado_id' => '20',
            'number' =>  '439',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Totolapilla',
            'estado_id' => '20',
            'number' =>  '440',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Xadani',
            'estado_id' => '20',
            'number' =>  '441',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Yalina',
            'estado_id' => '20',
            'number' =>  '442',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Yavesía',
            'estado_id' => '20',
            'number' =>  '443',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Yolotepec',
            'estado_id' => '20',
            'number' =>  '444',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Yosoyúa',
            'estado_id' => '20',
            'number' =>  '445',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Yucuhiti',
            'estado_id' => '20',
            'number' =>  '446',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Zacatepec',
            'estado_id' => '20',
            'number' =>  '447',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Zaniza',
            'estado_id' => '20',
            'number' =>  '448',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María Zoquitlán',
            'estado_id' => '20',
            'number' =>  '449',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Amoltepec',
            'estado_id' => '20',
            'number' =>  '450',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Apoala',
            'estado_id' => '20',
            'number' =>  '451',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Apóstol',
            'estado_id' => '20',
            'number' =>  '452',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Astata',
            'estado_id' => '20',
            'number' =>  '453',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Atitlán',
            'estado_id' => '20',
            'number' =>  '454',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Ayuquililla',
            'estado_id' => '20',
            'number' =>  '455',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Cacaloxtepec',
            'estado_id' => '20',
            'number' =>  '456',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Camotlán',
            'estado_id' => '20',
            'number' =>  '457',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Comaltepec',
            'estado_id' => '20',
            'number' =>  '458',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Chazumba',
            'estado_id' => '20',
            'number' =>  '459',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Choápam',
            'estado_id' => '20',
            'number' =>  '460',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago del Río',
            'estado_id' => '20',
            'number' =>  '461',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Huajolotitlán',
            'estado_id' => '20',
            'number' =>  '462',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Huauclilla',
            'estado_id' => '20',
            'number' =>  '463',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Ihuitlán Plumas',
            'estado_id' => '20',
            'number' =>  '464',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Ixcuintepec',
            'estado_id' => '20',
            'number' =>  '465',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Ixtayutla',
            'estado_id' => '20',
            'number' =>  '466',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Jamiltepec',
            'estado_id' => '20',
            'number' =>  '467',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Jocotepec',
            'estado_id' => '20',
            'number' =>  '468',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Juxtlahuaca',
            'estado_id' => '20',
            'number' =>  '469',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Lachiguiri',
            'estado_id' => '20',
            'number' =>  '470',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Lalopa',
            'estado_id' => '20',
            'number' =>  '471',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Laollaga',
            'estado_id' => '20',
            'number' =>  '472',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Laxopa',
            'estado_id' => '20',
            'number' =>  '473',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Llano Grande',
            'estado_id' => '20',
            'number' =>  '474',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Matatlán',
            'estado_id' => '20',
            'number' =>  '475',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Miltepec',
            'estado_id' => '20',
            'number' =>  '476',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Minas',
            'estado_id' => '20',
            'number' =>  '477',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Nacaltepec',
            'estado_id' => '20',
            'number' =>  '478',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Nejapilla',
            'estado_id' => '20',
            'number' =>  '479',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Nundiche',
            'estado_id' => '20',
            'number' =>  '480',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Nuyoó',
            'estado_id' => '20',
            'number' =>  '481',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Pinotepa Nacional',
            'estado_id' => '20',
            'number' =>  '482',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Suchilquitongo',
            'estado_id' => '20',
            'number' =>  '483',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tamazola',
            'estado_id' => '20',
            'number' =>  '484',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tapextla',
            'estado_id' => '20',
            'number' =>  '485',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Tejúpam de la Unión',
            'estado_id' => '20',
            'number' =>  '486',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tenango',
            'estado_id' => '20',
            'number' =>  '487',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tepetlapa',
            'estado_id' => '20',
            'number' =>  '488',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tetepec',
            'estado_id' => '20',
            'number' =>  '489',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Texcalcingo',
            'estado_id' => '20',
            'number' =>  '490',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Textitlán',
            'estado_id' => '20',
            'number' =>  '491',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tilantongo',
            'estado_id' => '20',
            'number' =>  '492',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tillo',
            'estado_id' => '20',
            'number' =>  '493',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tlazoyaltepec',
            'estado_id' => '20',
            'number' =>  '494',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Xanica',
            'estado_id' => '20',
            'number' =>  '495',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Xiacuí',
            'estado_id' => '20',
            'number' =>  '496',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Yaitepec',
            'estado_id' => '20',
            'number' =>  '497',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Yaveo',
            'estado_id' => '20',
            'number' =>  '498',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Yolomécatl',
            'estado_id' => '20',
            'number' =>  '499',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Yosondúa',
            'estado_id' => '20',
            'number' =>  '500',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Yucuyachi',
            'estado_id' => '20',
            'number' =>  '501',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Zacatepec',
            'estado_id' => '20',
            'number' =>  '502',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Zoochila',
            'estado_id' => '20',
            'number' =>  '503',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Zoquiápam',
            'estado_id' => '20',
            'number' =>  '504',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Ingenio',
            'estado_id' => '20',
            'number' =>  '505',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Albarradas',
            'estado_id' => '20',
            'number' =>  '506',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Armenta',
            'estado_id' => '20',
            'number' =>  '507',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Chihuitán',
            'estado_id' => '20',
            'number' =>  '508',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo de Morelos',
            'estado_id' => '20',
            'number' =>  '509',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Ixcatlán',
            'estado_id' => '20',
            'number' =>  '510',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Nuxaá',
            'estado_id' => '20',
            'number' =>  '511',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Ozolotepec',
            'estado_id' => '20',
            'number' =>  '512',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Petapa',
            'estado_id' => '20',
            'number' =>  '513',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Roayaga',
            'estado_id' => '20',
            'number' =>  '514',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tehuantepec',
            'estado_id' => '20',
            'number' =>  '515',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Teojomulco',
            'estado_id' => '20',
            'number' =>  '516',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tepuxtepec',
            'estado_id' => '20',
            'number' =>  '517',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tlatayápam',
            'estado_id' => '20',
            'number' =>  '518',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tomaltepec',
            'estado_id' => '20',
            'number' =>  '519',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tonalá',
            'estado_id' => '20',
            'number' =>  '520',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Tonaltepec',
            'estado_id' => '20',
            'number' =>  '521',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Xagacía',
            'estado_id' => '20',
            'number' =>  '522',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Yanhuitlán',
            'estado_id' => '20',
            'number' =>  '523',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Yodohino',
            'estado_id' => '20',
            'number' =>  '524',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo Zanatepec',
            'estado_id' => '20',
            'number' =>  '525',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santos Reyes Nopala',
            'estado_id' => '20',
            'number' =>  '526',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santos Reyes Pápalo',
            'estado_id' => '20',
            'number' =>  '527',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santos Reyes Tepejillo',
            'estado_id' => '20',
            'number' =>  '528',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santos Reyes Yucuná',
            'estado_id' => '20',
            'number' =>  '529',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás Jalieza',
            'estado_id' => '20',
            'number' =>  '530',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás Mazaltepec',
            'estado_id' => '20',
            'number' =>  '531',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás Ocotepec',
            'estado_id' => '20',
            'number' =>  '532',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás Tamazulapan',
            'estado_id' => '20',
            'number' =>  '533',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Vicente Coatlán',
            'estado_id' => '20',
            'number' =>  '534',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Vicente Lachixío',
            'estado_id' => '20',
            'number' =>  '535',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Vicente Nuñú',
            'estado_id' => '20',
            'number' =>  '536',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Silacayoápam',
            'estado_id' => '20',
            'number' =>  '537',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sitio de Xitlapehua',
            'estado_id' => '20',
            'number' =>  '538',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soledad Etla',
            'estado_id' => '20',
            'number' =>  '539',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Tamazulápam del Progreso',
            'estado_id' => '20',
            'number' =>  '540',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tanetze de Zaragoza',
            'estado_id' => '20',
            'number' =>  '541',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Taniche',
            'estado_id' => '20',
            'number' =>  '542',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tataltepec de Valdés',
            'estado_id' => '20',
            'number' =>  '543',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teococuilco de Marcos Pérez',
            'estado_id' => '20',
            'number' =>  '544',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teotitlán de Flores Magón',
            'estado_id' => '20',
            'number' =>  '545',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teotitlán del Valle',
            'estado_id' => '20',
            'number' =>  '546',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teotongo',
            'estado_id' => '20',
            'number' =>  '547',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepelmeme Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '548',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'estado_id' => '20',
            'number' =>  '549',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Tlacochahuaya',
            'estado_id' => '20',
            'number' =>  '550',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacolula de Matamoros',
            'estado_id' => '20',
            'number' =>  '551',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacotepec Plumas',
            'estado_id' => '20',
            'number' =>  '552',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalixtac de Cabrera',
            'estado_id' => '20',
            'number' =>  '553',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totontepec Villa de Morelos',
            'estado_id' => '20',
            'number' =>  '554',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Trinidad Zaachila',
            'estado_id' => '20',
            'number' =>  '555',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Trinidad Vista Hermosa',
            'estado_id' => '20',
            'number' =>  '556',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Unión Hidalgo',
            'estado_id' => '20',
            'number' =>  '557',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valerio Trujano',
            'estado_id' => '20',
            'number' =>  '558',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Bautista Valle Nacional',
            'estado_id' => '20',
            'number' =>  '559',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Díaz Ordaz',
            'estado_id' => '20',
            'number' =>  '560',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yaxe',
            'estado_id' => '20',
            'number' =>  '561',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena Yodocono de Porfirio Díaz',
            'estado_id' => '20',
            'number' =>  '562',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yogana',
            'estado_id' => '20',
            'number' =>  '563',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yutanduchi de Guerrero',
            'estado_id' => '20',
            'number' =>  '564',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Zaachila',
            'estado_id' => '20',
            'number' =>  '565',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Mateo Yucutindoo',
            'estado_id' => '20',
            'number' =>  '566',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán Lagunas',
            'estado_id' => '20',
            'number' =>  '567',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán Palmas',
            'estado_id' => '20',
            'number' =>  '568',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Inés de Zaragoza',
            'estado_id' => '20',
            'number' =>  '569',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zimatlán de Álvarez',
            'estado_id' => '20',
            'number' =>  '570',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acajete',
            'estado_id' => '21',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acateno',
            'estado_id' => '21',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatlán',
            'estado_id' => '21',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatzingo',
            'estado_id' => '21',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acteopan',
            'estado_id' => '21',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuacatlán',
            'estado_id' => '21',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuatlán',
            'estado_id' => '21',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuazotepec',
            'estado_id' => '21',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahuehuetitla',
            'estado_id' => '21',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ajalpan',
            'estado_id' => '21',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Albino Zertuche',
            'estado_id' => '21',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aljojuca',
            'estado_id' => '21',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Altepexi',
            'estado_id' => '21',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amixtlán',
            'estado_id' => '21',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amozoc',
            'estado_id' => '21',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aquixtla',
            'estado_id' => '21',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atempan',
            'estado_id' => '21',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atexcal',
            'estado_id' => '21',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlixco',
            'estado_id' => '21',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atoyatempan',
            'estado_id' => '21',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atzala',
            'estado_id' => '21',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atzitzihuacán',
            'estado_id' => '21',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atzitzintla',
            'estado_id' => '21',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Axutla',
            'estado_id' => '21',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayotoxco de Guerrero',
            'estado_id' => '21',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calpan',
            'estado_id' => '21',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Caltepec',
            'estado_id' => '21',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Camocuautla',
            'estado_id' => '21',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Caxhuacan',
            'estado_id' => '21',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatepec',
            'estado_id' => '21',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatzingo',
            'estado_id' => '21',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cohetzala',
            'estado_id' => '21',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cohuecan',
            'estado_id' => '21',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coronango',
            'estado_id' => '21',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coxcatlán',
            'estado_id' => '21',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyomeapan',
            'estado_id' => '21',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyotepec',
            'estado_id' => '21',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuapiaxtla de Madero',
            'estado_id' => '21',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautempan',
            'estado_id' => '21',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautinchán',
            'estado_id' => '21',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuautlancingo',
            'estado_id' => '21',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuayuca de Andrade',
            'estado_id' => '21',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuetzalan del Progreso',
            'estado_id' => '21',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuyoaco',
            'estado_id' => '21',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalchicomula de Sesma',
            'estado_id' => '21',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapulco',
            'estado_id' => '21',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiautla',
            'estado_id' => '21',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiautzingo',
            'estado_id' => '21',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiconcuautla',
            'estado_id' => '21',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chichiquila',
            'estado_id' => '21',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chietla',
            'estado_id' => '21',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chigmecatitlán',
            'estado_id' => '21',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chignahuapan',
            'estado_id' => '21',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chignautla',
            'estado_id' => '21',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chila',
            'estado_id' => '21',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chila de la Sal',
            'estado_id' => '21',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Honey',
            'estado_id' => '21',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chilchotla',
            'estado_id' => '21',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chinantla',
            'estado_id' => '21',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Domingo Arenas',
            'estado_id' => '21',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Eloxochitlán',
            'estado_id' => '21',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Epatlán',
            'estado_id' => '21',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Esperanza',
            'estado_id' => '21',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Francisco Z. Mena',
            'estado_id' => '21',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Felipe Ángeles',
            'estado_id' => '21',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe',
            'estado_id' => '21',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe Victoria',
            'estado_id' => '21',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hermenegildo Galeana',
            'estado_id' => '21',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huaquechula',
            'estado_id' => '21',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huatlatlauca',
            'estado_id' => '21',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huauchinango',
            'estado_id' => '21',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetla',
            'estado_id' => '21',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetlán el Chico',
            'estado_id' => '21',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huejotzingo',
            'estado_id' => '21',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueyapan',
            'estado_id' => '21',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueytamalco',
            'estado_id' => '21',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueytlalpan',
            'estado_id' => '21',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huitzilan de Serdán',
            'estado_id' => '21',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huitziltepec',
            'estado_id' => '21',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlequizayan',
            'estado_id' => '21',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixcamilpa de Guerrero',
            'estado_id' => '21',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixcaquixtla',
            'estado_id' => '21',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtacamaxtitlán',
            'estado_id' => '21',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtepec',
            'estado_id' => '21',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Izúcar de Matamoros',
            'estado_id' => '21',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalpan',
            'estado_id' => '21',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jolalpan',
            'estado_id' => '21',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jonotla',
            'estado_id' => '21',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jopala',
            'estado_id' => '21',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan C. Bonilla',
            'estado_id' => '21',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan Galindo',
            'estado_id' => '21',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan N. Méndez',
            'estado_id' => '21',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lafragua',
            'estado_id' => '21',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Libres',
            'estado_id' => '21',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Magdalena Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazapiltepec de Juárez',
            'estado_id' => '21',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mixtla',
            'estado_id' => '21',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Molcaxac',
            'estado_id' => '21',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cañada Morelos',
            'estado_id' => '21',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naupan',
            'estado_id' => '21',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nauzontla',
            'estado_id' => '21',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nealtican',
            'estado_id' => '21',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nicolás Bravo',
            'estado_id' => '21',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nopalucan',
            'estado_id' => '21',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocotepec',
            'estado_id' => '21',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocoyucan',
            'estado_id' => '21',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Olintla',
            'estado_id' => '21',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oriental',
            'estado_id' => '21',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pahuatlán',
            'estado_id' => '21',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Palmar de Bravo',
            'estado_id' => '21',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pantepec',
            'estado_id' => '21',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Petlalcingo',
            'estado_id' => '21',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Piaxtla',
            'estado_id' => '21',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puebla',
            'estado_id' => '21',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quecholac',
            'estado_id' => '21',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quimixtlán',
            'estado_id' => '21',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rafael Lara Grajales',
            'estado_id' => '21',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Reyes de Juárez',
            'estado_id' => '21',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Cholula',
            'estado_id' => '21',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio Cañada',
            'estado_id' => '21',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Diego la Mesa Tochimiltzingo',
            'estado_id' => '21',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Teotlalcingo',
            'estado_id' => '21',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe Tepatlán',
            'estado_id' => '21',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Gabriel Chilac',
            'estado_id' => '21',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Gregorio Atzompa',
            'estado_id' => '21',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Tecuanipan',
            'estado_id' => '21',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Xayacatlán',
            'estado_id' => '21',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Chiapa',
            'estado_id' => '21',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Miahuatlán',
            'estado_id' => '21',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Atenco',
            'estado_id' => '21',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Atzompa',
            'estado_id' => '21',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Texmelucan',
            'estado_id' => '21',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Totoltepec',
            'estado_id' => '21',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Matías Tlalancaleca',
            'estado_id' => '21',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Ixitlán',
            'estado_id' => '21',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel Xoxtla',
            'estado_id' => '21',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás Buenos Aires',
            'estado_id' => '21',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás de los Ranchos',
            'estado_id' => '21',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo Anicano',
            'estado_id' => '21',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Cholula',
            'estado_id' => '21',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro Yeloixtlahuaca',
            'estado_id' => '21',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Salvador el Seco',
            'estado_id' => '21',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Salvador el Verde',
            'estado_id' => '21',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Salvador Huixcolotla',
            'estado_id' => '21',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Sebastián Tlacotepec',
            'estado_id' => '21',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Tlaltempan',
            'estado_id' => '21',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Inés Ahuatempan',
            'estado_id' => '21',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Isabel Cholula',
            'estado_id' => '21',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Miahuatlán',
            'estado_id' => '21',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetlán el Grande',
            'estado_id' => '21',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Tomás Hueyotlipan',
            'estado_id' => '21',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soltepec',
            'estado_id' => '21',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecali de Herrera',
            'estado_id' => '21',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecamachalco',
            'estado_id' => '21',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecomatlán',
            'estado_id' => '21',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tehuacán',
            'estado_id' => '21',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tehuitzingo',
            'estado_id' => '21',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenampulco',
            'estado_id' => '21',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teopantlán',
            'estado_id' => '21',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teotlalco',
            'estado_id' => '21',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepanco de López',
            'estado_id' => '21',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepango de Rodríguez',
            'estado_id' => '21',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepatlaxco de Hidalgo',
            'estado_id' => '21',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeaca',
            'estado_id' => '21',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepemaxalco',
            'estado_id' => '21',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeojuma',
            'estado_id' => '21',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetzintla',
            'estado_id' => '21',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepexco',
            'estado_id' => '21',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepexi de Rodríguez',
            'estado_id' => '21',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeyahualco',
            'estado_id' => '21',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeyahualco de Cuauhtémoc',
            'estado_id' => '21',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetela de Ocampo',
            'estado_id' => '21',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teteles de Avila Castillo',
            'estado_id' => '21',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teziutlán',
            'estado_id' => '21',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tianguismanalco',
            'estado_id' => '21',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tilapa',
            'estado_id' => '21',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacotepec de Benito Juárez',
            'estado_id' => '21',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacuilotepec',
            'estado_id' => '21',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlachichuca',
            'estado_id' => '21',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlahuapan',
            'estado_id' => '21',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaltenango',
            'estado_id' => '21',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlanepantla',
            'estado_id' => '21',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaola',
            'estado_id' => '21',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlapacoya',
            'estado_id' => '21',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlapanalá',
            'estado_id' => '21',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlatlauquitepec',
            'estado_id' => '21',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaxco',
            'estado_id' => '21',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tochimilco',
            'estado_id' => '21',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tochtepec',
            'estado_id' => '21',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totoltepec de Guerrero',
            'estado_id' => '21',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tulcingo',
            'estado_id' => '21',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuzamapan de Galeana',
            'estado_id' => '21',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzicatlacoyan',
            'estado_id' => '21',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Venustiano Carranza',
            'estado_id' => '21',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vicente Guerrero',
            'estado_id' => '21',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xayacatlán de Bravo',
            'estado_id' => '21',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xicotepec',
            'estado_id' => '21',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xicotlán',
            'estado_id' => '21',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xiutetelco',
            'estado_id' => '21',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochiapulco',
            'estado_id' => '21',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochiltepec',
            'estado_id' => '21',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochitlán de Vicente Suárez',
            'estado_id' => '21',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xochitlán Todos Santos',
            'estado_id' => '21',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yaonáhuac',
            'estado_id' => '21',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yehualtepec',
            'estado_id' => '21',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacapala',
            'estado_id' => '21',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacapoaxtla',
            'estado_id' => '21',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacatlán',
            'estado_id' => '21',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán',
            'estado_id' => '21',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zapotitlán de Méndez',
            'estado_id' => '21',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zaragoza',
            'estado_id' => '21',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zautla',
            'estado_id' => '21',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zihuateutla',
            'estado_id' => '21',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zinacatepec',
            'estado_id' => '21',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zongozotla',
            'estado_id' => '21',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zoquiapan',
            'estado_id' => '21',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zoquitlán',
            'estado_id' => '21',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amealco de Bonfil',
            'estado_id' => '22',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pinal de Amoles',
            'estado_id' => '22',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arroyo Seco',
            'estado_id' => '22',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cadereyta de Montes',
            'estado_id' => '22',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Colón',
            'estado_id' => '22',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Corregidora',
            'estado_id' => '22',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ezequiel Montes',
            'estado_id' => '22',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huimilpan',
            'estado_id' => '22',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalpan de Serra',
            'estado_id' => '22',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Landa de Matamoros',
            'estado_id' => '22',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Marqués',
            'estado_id' => '22',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pedro Escobedo',
            'estado_id' => '22',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Peñamiller',
            'estado_id' => '22',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Querétaro',
            'estado_id' => '22',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Joaquín',
            'estado_id' => '22',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan del Río',
            'estado_id' => '22',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tequisquiapan',
            'estado_id' => '22',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tolimán',
            'estado_id' => '22',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cozumel',
            'estado_id' => '23',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Felipe Carrillo Puerto',
            'estado_id' => '23',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Isla Mujeres',
            'estado_id' => '23',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Othón P. Blanco',
            'estado_id' => '23',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '23',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'José María Morelos',
            'estado_id' => '23',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '23',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Solidaridad',
            'estado_id' => '23',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tulum',
            'estado_id' => '23',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bacalar',
            'estado_id' => '23',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahualulco',
            'estado_id' => '24',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alaquines',
            'estado_id' => '24',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aquismón',
            'estado_id' => '24',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Armadillo de los Infante',
            'estado_id' => '24',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cárdenas',
            'estado_id' => '24',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Catorce',
            'estado_id' => '24',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cedral',
            'estado_id' => '24',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cerritos',
            'estado_id' => '24',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cerro de San Pedro',
            'estado_id' => '24',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciudad del Maíz',
            'estado_id' => '24',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciudad Fernández',
            'estado_id' => '24',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tancanhuitz',
            'estado_id' => '24',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciudad Valles',
            'estado_id' => '24',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coxcatlán',
            'estado_id' => '24',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Charcas',
            'estado_id' => '24',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ebano',
            'estado_id' => '24',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalcázar',
            'estado_id' => '24',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huehuetlán',
            'estado_id' => '24',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lagunillas',
            'estado_id' => '24',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matehuala',
            'estado_id' => '24',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mexquitic de Carmona',
            'estado_id' => '24',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moctezuma',
            'estado_id' => '24',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rayón',
            'estado_id' => '24',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rioverde',
            'estado_id' => '24',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salinas',
            'estado_id' => '24',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Antonio',
            'estado_id' => '24',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ciro de Acosta',
            'estado_id' => '24',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis Potosí',
            'estado_id' => '24',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Martín Chalchicuautla',
            'estado_id' => '24',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás Tolentino',
            'estado_id' => '24',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina',
            'estado_id' => '24',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María del Río',
            'estado_id' => '24',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santo Domingo',
            'estado_id' => '24',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Vicente Tancuayalab',
            'estado_id' => '24',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soledad de Graciano Sánchez',
            'estado_id' => '24',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamasopo',
            'estado_id' => '24',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamazunchale',
            'estado_id' => '24',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tampacán',
            'estado_id' => '24',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tampamolón Corona',
            'estado_id' => '24',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamuín',
            'estado_id' => '24',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tanlajás',
            'estado_id' => '24',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tanquián de Escobedo',
            'estado_id' => '24',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tierra Nueva',
            'estado_id' => '24',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vanegas',
            'estado_id' => '24',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Venado',
            'estado_id' => '24',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Arriaga',
            'estado_id' => '24',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Guadalupe',
            'estado_id' => '24',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de la Paz',
            'estado_id' => '24',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Ramos',
            'estado_id' => '24',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Reyes',
            'estado_id' => '24',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '24',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Juárez',
            'estado_id' => '24',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Axtla de Terrazas',
            'estado_id' => '24',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xilitla',
            'estado_id' => '24',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zaragoza',
            'estado_id' => '24',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Arista',
            'estado_id' => '24',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matlapa',
            'estado_id' => '24',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Naranjo',
            'estado_id' => '24',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ahome',
            'estado_id' => '25',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Angostura',
            'estado_id' => '25',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Badiraguato',
            'estado_id' => '25',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Concordia',
            'estado_id' => '25',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosalá',
            'estado_id' => '25',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Culiacán',
            'estado_id' => '25',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Choix',
            'estado_id' => '25',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Elota',
            'estado_id' => '25',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Escuinapa',
            'estado_id' => '25',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Fuerte',
            'estado_id' => '25',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guasave',
            'estado_id' => '25',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatlán',
            'estado_id' => '25',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mocorito',
            'estado_id' => '25',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rosario',
            'estado_id' => '25',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Salvador Alvarado',
            'estado_id' => '25',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ignacio',
            'estado_id' => '25',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sinaloa',
            'estado_id' => '25',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Navolato',
            'estado_id' => '25',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aconchi',
            'estado_id' => '26',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Agua Prieta',
            'estado_id' => '26',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alamos',
            'estado_id' => '26',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Altar',
            'estado_id' => '26',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arivechi',
            'estado_id' => '26',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Arizpe',
            'estado_id' => '26',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atil',
            'estado_id' => '26',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bacadéhuachi',
            'estado_id' => '26',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bacanora',
            'estado_id' => '26',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bacerac',
            'estado_id' => '26',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bacoachi',
            'estado_id' => '26',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bácum',
            'estado_id' => '26',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Banámichi',
            'estado_id' => '26',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Baviácora',
            'estado_id' => '26',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bavispe',
            'estado_id' => '26',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benjamín Hill',
            'estado_id' => '26',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Caborca',
            'estado_id' => '26',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cajeme',
            'estado_id' => '26',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cananea',
            'estado_id' => '26',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carbó',
            'estado_id' => '26',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Colorada',
            'estado_id' => '26',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cucurpe',
            'estado_id' => '26',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cumpas',
            'estado_id' => '26',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Divisaderos',
            'estado_id' => '26',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Empalme',
            'estado_id' => '26',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Etchojoa',
            'estado_id' => '26',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Fronteras',
            'estado_id' => '26',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Granados',
            'estado_id' => '26',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guaymas',
            'estado_id' => '26',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hermosillo',
            'estado_id' => '26',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huachinera',
            'estado_id' => '26',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huásabas',
            'estado_id' => '26',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huatabampo',
            'estado_id' => '26',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huépac',
            'estado_id' => '26',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Imuris',
            'estado_id' => '26',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena',
            'estado_id' => '26',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatán',
            'estado_id' => '26',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moctezuma',
            'estado_id' => '26',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naco',
            'estado_id' => '26',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nácori Chico',
            'estado_id' => '26',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nacozari de García',
            'estado_id' => '26',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Navojoa',
            'estado_id' => '26',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nogales',
            'estado_id' => '26',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Onavas',
            'estado_id' => '26',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Opodepe',
            'estado_id' => '26',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oquitoa',
            'estado_id' => '26',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pitiquito',
            'estado_id' => '26',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puerto Peñasco',
            'estado_id' => '26',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quiriego',
            'estado_id' => '26',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rayón',
            'estado_id' => '26',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rosario',
            'estado_id' => '26',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sahuaripa',
            'estado_id' => '26',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe de Jesús',
            'estado_id' => '26',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Javier',
            'estado_id' => '26',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Luis Río Colorado',
            'estado_id' => '26',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Miguel de Horcasitas',
            'estado_id' => '26',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pedro de la Cueva',
            'estado_id' => '26',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana',
            'estado_id' => '26',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz',
            'estado_id' => '26',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sáric',
            'estado_id' => '26',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soyopa',
            'estado_id' => '26',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Suaqui Grande',
            'estado_id' => '26',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepache',
            'estado_id' => '26',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Trincheras',
            'estado_id' => '26',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tubutama',
            'estado_id' => '26',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ures',
            'estado_id' => '26',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '26',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Pesqueira',
            'estado_id' => '26',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yécora',
            'estado_id' => '26',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Plutarco Elías Calles',
            'estado_id' => '26',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '26',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Ignacio Río Muerto',
            'estado_id' => '26',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Balancán',
            'estado_id' => '27',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cárdenas',
            'estado_id' => '27',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Centla',
            'estado_id' => '27',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Centro',
            'estado_id' => '27',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comalcalco',
            'estado_id' => '27',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cunduacán',
            'estado_id' => '27',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '27',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huimanguillo',
            'estado_id' => '27',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalapa',
            'estado_id' => '27',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalpa de Méndez',
            'estado_id' => '27',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jonuta',
            'estado_id' => '27',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Macuspana',
            'estado_id' => '27',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nacajuca',
            'estado_id' => '27',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Paraíso',
            'estado_id' => '27',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tacotalpa',
            'estado_id' => '27',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teapa',
            'estado_id' => '27',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenosique',
            'estado_id' => '27',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abasolo',
            'estado_id' => '28',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aldama',
            'estado_id' => '28',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Altamira',
            'estado_id' => '28',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Antiguo Morelos',
            'estado_id' => '28',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Burgos',
            'estado_id' => '28',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bustamante',
            'estado_id' => '28',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Camargo',
            'estado_id' => '28',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Casas',
            'estado_id' => '28',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ciudad Madero',
            'estado_id' => '28',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cruillas',
            'estado_id' => '28',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gómez Farías',
            'estado_id' => '28',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'González',
            'estado_id' => '28',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Güémez',
            'estado_id' => '28',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guerrero',
            'estado_id' => '28',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gustavo Díaz Ordaz',
            'estado_id' => '28',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgo',
            'estado_id' => '28',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jaumave',
            'estado_id' => '28',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiménez',
            'estado_id' => '28',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Llera',
            'estado_id' => '28',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mainero',
            'estado_id' => '28',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Mante',
            'estado_id' => '28',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Matamoros',
            'estado_id' => '28',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Méndez',
            'estado_id' => '28',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mier',
            'estado_id' => '28',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miguel Alemán',
            'estado_id' => '28',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miquihuana',
            'estado_id' => '28',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Laredo',
            'estado_id' => '28',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nuevo Morelos',
            'estado_id' => '28',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ocampo',
            'estado_id' => '28',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Padilla',
            'estado_id' => '28',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Palmillas',
            'estado_id' => '28',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Reynosa',
            'estado_id' => '28',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Río Bravo',
            'estado_id' => '28',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Carlos',
            'estado_id' => '28',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Fernando',
            'estado_id' => '28',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Nicolás',
            'estado_id' => '28',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soto la Marina',
            'estado_id' => '28',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tampico',
            'estado_id' => '28',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tula',
            'estado_id' => '28',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valle Hermoso',
            'estado_id' => '28',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Victoria',
            'estado_id' => '28',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villagrán',
            'estado_id' => '28',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xicoténcatl',
            'estado_id' => '28',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amaxac de Guerrero',
            'estado_id' => '29',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apetatitlán de Antonio Carvajal',
            'estado_id' => '29',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlangatepec',
            'estado_id' => '29',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atltzayanca',
            'estado_id' => '29',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apizaco',
            'estado_id' => '29',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calpulalpan',
            'estado_id' => '29',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Carmen Tequexquitla',
            'estado_id' => '29',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuapiaxtla',
            'estado_id' => '29',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuaxomulco',
            'estado_id' => '29',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiautempan',
            'estado_id' => '29',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Muñoz de Domingo Arenas',
            'estado_id' => '29',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Españita',
            'estado_id' => '29',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huamantla',
            'estado_id' => '29',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueyotlipan',
            'estado_id' => '29',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtacuixtla de Mariano Matamoros',
            'estado_id' => '29',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtenco',
            'estado_id' => '29',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazatecochco de José María Morelos',
            'estado_id' => '29',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Contla de Juan Cuamatzi',
            'estado_id' => '29',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetitla de Lardizábal',
            'estado_id' => '29',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sanctórum de Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nanacamilpa de Mariano Arista',
            'estado_id' => '29',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acuamanala de Miguel Hidalgo',
            'estado_id' => '29',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Natívitas',
            'estado_id' => '29',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Panotla',
            'estado_id' => '29',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Pablo del Monte',
            'estado_id' => '29',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Tlaxcala',
            'estado_id' => '29',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenancingo',
            'estado_id' => '29',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teolocholco',
            'estado_id' => '29',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepeyanco',
            'estado_id' => '29',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Terrenate',
            'estado_id' => '29',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetla de la Solidaridad',
            'estado_id' => '29',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetlatlahuca',
            'estado_id' => '29',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaxcala',
            'estado_id' => '29',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaxco',
            'estado_id' => '29',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tocatlán',
            'estado_id' => '29',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totolac',
            'estado_id' => '29',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'estado_id' => '29',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzompantepec',
            'estado_id' => '29',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xaloztoc',
            'estado_id' => '29',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xaltocan',
            'estado_id' => '29',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Papalotla de Xicohténcatl',
            'estado_id' => '29',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xicohtzinco',
            'estado_id' => '29',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yauhquemehcan',
            'estado_id' => '29',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacatelco',
            'estado_id' => '29',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '29',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '29',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lázaro Cárdenas',
            'estado_id' => '29',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Magdalena Tlaltelulco',
            'estado_id' => '29',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Damián Texóloc',
            'estado_id' => '29',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Francisco Tetlanohcan',
            'estado_id' => '29',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Jerónimo Zacualpan',
            'estado_id' => '29',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San José Teacalco',
            'estado_id' => '29',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Huactzinco',
            'estado_id' => '29',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lorenzo Axocomanitla',
            'estado_id' => '29',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Lucas Tecopilco',
            'estado_id' => '29',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Ana Nopalucan',
            'estado_id' => '29',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Apolonia Teacalco',
            'estado_id' => '29',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Catarina Ayometla',
            'estado_id' => '29',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Cruz Quilehtla',
            'estado_id' => '29',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Isabel Xiloxoxtla',
            'estado_id' => '29',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acajete',
            'estado_id' => '30',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acatlán',
            'estado_id' => '30',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acayucan',
            'estado_id' => '30',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Actopan',
            'estado_id' => '30',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acula',
            'estado_id' => '30',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acultzingo',
            'estado_id' => '30',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Camarón de Tejeda',
            'estado_id' => '30',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alpatláhuac',
            'estado_id' => '30',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alto Lucero de Gutiérrez Barrios',
            'estado_id' => '30',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Altotonga',
            'estado_id' => '30',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Alvarado',
            'estado_id' => '30',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatitlán',
            'estado_id' => '30',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naranjos Amatlán',
            'estado_id' => '30',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Amatlán de los Reyes',
            'estado_id' => '30',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Angel R. Cabada',
            'estado_id' => '30',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Antigua',
            'estado_id' => '30',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apazapan',
            'estado_id' => '30',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Aquila',
            'estado_id' => '30',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Astacinga',
            'estado_id' => '30',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atlahuilco',
            'estado_id' => '30',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atoyac',
            'estado_id' => '30',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atzacan',
            'estado_id' => '30',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atzalan',
            'estado_id' => '30',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaltetela',
            'estado_id' => '30',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ayahualulco',
            'estado_id' => '30',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Banderilla',
            'estado_id' => '30',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '30',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Boca del Río',
            'estado_id' => '30',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calcahualco',
            'estado_id' => '30',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Camerino Z. Mendoza',
            'estado_id' => '30',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carrillo Puerto',
            'estado_id' => '30',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Catemaco',
            'estado_id' => '30',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cazones de Herrera',
            'estado_id' => '30',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cerro Azul',
            'estado_id' => '30',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Citlaltépetl',
            'estado_id' => '30',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coacoatzintla',
            'estado_id' => '30',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coahuitlán',
            'estado_id' => '30',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatepec',
            'estado_id' => '30',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatzacoalcos',
            'estado_id' => '30',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coatzintla',
            'estado_id' => '30',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coetzala',
            'estado_id' => '30',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Colipa',
            'estado_id' => '30',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Comapa',
            'estado_id' => '30',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Córdoba',
            'estado_id' => '30',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosamaloapan de Carpio',
            'estado_id' => '30',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosautlán de Carvajal',
            'estado_id' => '30',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coscomatepec',
            'estado_id' => '30',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cosoleacaque',
            'estado_id' => '30',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cotaxtla',
            'estado_id' => '30',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coxquihui',
            'estado_id' => '30',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Coyutla',
            'estado_id' => '30',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuichapa',
            'estado_id' => '30',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuitláhuac',
            'estado_id' => '30',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chacaltianguis',
            'estado_id' => '30',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalma',
            'estado_id' => '30',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiconombrel',
            'estado_id' => '30',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chiconquiaco',
            'estado_id' => '30',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chicontepec',
            'estado_id' => '30',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chinombreca',
            'estado_id' => '30',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chinampa de Gorostiza',
            'estado_id' => '30',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Las Choapas',
            'estado_id' => '30',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chocamán',
            'estado_id' => '30',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chontla',
            'estado_id' => '30',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chumatlán',
            'estado_id' => '30',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Emiliano Zapata',
            'estado_id' => '30',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Espinal',
            'estado_id' => '30',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Filomeno Mata',
            'estado_id' => '30',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Fortín',
            'estado_id' => '30',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Gutiérrez Zamora',
            'estado_id' => '30',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hidalgotitlán',
            'estado_id' => '30',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huatusco',
            'estado_id' => '30',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huayacocotla',
            'estado_id' => '30',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hueyapan de Ocampo',
            'estado_id' => '30',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huiloapan de Cuauhtémoc',
            'estado_id' => '30',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ignacio de la Llave',
            'estado_id' => '30',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ilamatlán',
            'estado_id' => '30',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Isla',
            'estado_id' => '30',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixcatepec',
            'estado_id' => '30',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuacán de los Reyes',
            'estado_id' => '30',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuatlán del Café',
            'estado_id' => '30',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuatlancillo',
            'estado_id' => '30',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuatlán del Sureste',
            'estado_id' => '30',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixhuatlán de Madero',
            'estado_id' => '30',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixmatlahuacan',
            'estado_id' => '30',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixtaczoquitlán',
            'estado_id' => '30',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalacingo',
            'estado_id' => '30',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xalapa',
            'estado_id' => '30',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalcomulco',
            'estado_id' => '30',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jáltipan',
            'estado_id' => '30',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jamapa',
            'estado_id' => '30',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jesús Carranza',
            'estado_id' => '30',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xico',
            'estado_id' => '30',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jilotepec',
            'estado_id' => '30',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan Rodríguez Clara',
            'estado_id' => '30',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juchique de Ferrer',
            'estado_id' => '30',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Landero y Coss',
            'estado_id' => '30',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Lerdo de Tejada',
            'estado_id' => '30',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Magdalena',
            'estado_id' => '30',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maltrata',
            'estado_id' => '30',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Manlio Fabio Altamirano',
            'estado_id' => '30',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mariano Escobedo',
            'estado_id' => '30',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Martínez de la Torre',
            'estado_id' => '30',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mecatlán',
            'estado_id' => '30',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mecayapan',
            'estado_id' => '30',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Medellín de Bravo',
            'estado_id' => '30',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miahuatlán',
            'estado_id' => '30',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Las Minas',
            'estado_id' => '30',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Minatitlán',
            'estado_id' => '30',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Misantla',
            'estado_id' => '30',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mixtla de Altamirano',
            'estado_id' => '30',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moloacán',
            'estado_id' => '30',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naolinco',
            'estado_id' => '30',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Naranjal',
            'estado_id' => '30',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nautla',
            'estado_id' => '30',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nogales',
            'estado_id' => '30',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oluta',
            'estado_id' => '30',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Omealca',
            'estado_id' => '30',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Orizaba',
            'estado_id' => '30',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Otatitlán',
            'estado_id' => '30',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oteapan',
            'estado_id' => '30',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ozuluama de Mascareñas',
            'estado_id' => '30',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pajapan',
            'estado_id' => '30',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pánuco',
            'estado_id' => '30',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Papantla',
            'estado_id' => '30',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Paso del Macho',
            'estado_id' => '30',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Paso de Ovejas',
            'estado_id' => '30',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'La Perla',
            'estado_id' => '30',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Perote',
            'estado_id' => '30',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Platón Sánchez',
            'estado_id' => '30',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Playa Vicente',
            'estado_id' => '30',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Poza Rica de Hidalgo',
            'estado_id' => '30',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Las Vigas de Ramírez',
            'estado_id' => '30',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pueblo Viejo',
            'estado_id' => '30',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Puente Nacional',
            'estado_id' => '30',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rafael Delgado',
            'estado_id' => '30',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Rafael Lucio',
            'estado_id' => '30',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Los Reyes',
            'estado_id' => '30',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Río Blanco',
            'estado_id' => '30',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Saltabarranca',
            'estado_id' => '30',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Tenejapan',
            'estado_id' => '30',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Andrés Tuxtla',
            'estado_id' => '30',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Juan Evangelista',
            'estado_id' => '30',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Tuxtla',
            'estado_id' => '30',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sayula de Alemán',
            'estado_id' => '30',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soconusco',
            'estado_id' => '30',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sochiapa',
            'estado_id' => '30',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soledad Atzompa',
            'estado_id' => '30',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soledad de Doblado',
            'estado_id' => '30',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Soteapan',
            'estado_id' => '30',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamalín',
            'estado_id' => '30',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tamiahua',
            'estado_id' => '30',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tampico Alto',
            'estado_id' => '30',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tancoco',
            'estado_id' => '30',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tantima',
            'estado_id' => '30',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tantoyuca',
            'estado_id' => '30',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tatatila',
            'estado_id' => '30',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Castillo de Teayo',
            'estado_id' => '30',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecolutla',
            'estado_id' => '30',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tehuipango',
            'estado_id' => '30',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Álamo Temapache',
            'estado_id' => '30',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tempoal',
            'estado_id' => '30',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenampa',
            'estado_id' => '30',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tenochtitlán',
            'estado_id' => '30',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teocelo',
            'estado_id' => '30',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepatlaxco',
            'estado_id' => '30',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetlán',
            'estado_id' => '30',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetzintla',
            'estado_id' => '30',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tequila',
            'estado_id' => '30',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'José Azueta',
            'estado_id' => '30',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texcatepec',
            'estado_id' => '30',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texhuacán',
            'estado_id' => '30',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Texistepec',
            'estado_id' => '30',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tezonapa',
            'estado_id' => '30',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tierra Blanca',
            'estado_id' => '30',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tihuatlán',
            'estado_id' => '30',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacojalpan',
            'estado_id' => '30',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacolulan',
            'estado_id' => '30',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacotalpan',
            'estado_id' => '30',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlacotepec de Mejía',
            'estado_id' => '30',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlachichilco',
            'estado_id' => '30',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalixcoyan',
            'estado_id' => '30',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlalnelhuayocan',
            'estado_id' => '30',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlapacoyan',
            'estado_id' => '30',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaquilpa',
            'estado_id' => '30',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlilapan',
            'estado_id' => '30',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tomatlán',
            'estado_id' => '30',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tonayán',
            'estado_id' => '30',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Totutla',
            'estado_id' => '30',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxpan',
            'estado_id' => '30',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tuxtilla',
            'estado_id' => '30',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ursulo Galván',
            'estado_id' => '30',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vega de Alatorre',
            'estado_id' => '30',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Veracruz',
            'estado_id' => '30',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Aldama',
            'estado_id' => '30',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xoxocotla',
            'estado_id' => '30',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yanga',
            'estado_id' => '30',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yecuatla',
            'estado_id' => '30',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacualpan',
            'estado_id' => '30',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zaragoza',
            'estado_id' => '30',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zentla',
            'estado_id' => '30',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zongolica',
            'estado_id' => '30',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zontecomatlán de López y Fuentes',
            'estado_id' => '30',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zozocolco de Hidalgo',
            'estado_id' => '30',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Agua Dulce',
            'estado_id' => '30',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Higo',
            'estado_id' => '30',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nanchital de Lázaro Cárdenas del Río',
            'estado_id' => '30',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tres Valles',
            'estado_id' => '30',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Carlos A. Carrillo',
            'estado_id' => '30',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tatahuicapan de Juárez',
            'estado_id' => '30',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Uxpanapa',
            'estado_id' => '30',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Rafael',
            'estado_id' => '30',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santiago Sochiapan',
            'estado_id' => '30',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Abalá',
            'estado_id' => '31',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Acanceh',
            'estado_id' => '31',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Akil',
            'estado_id' => '31',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Baca',
            'estado_id' => '31',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Bokobá',
            'estado_id' => '31',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Buctzotz',
            'estado_id' => '31',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cacalchén',
            'estado_id' => '31',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calotmul',
            'estado_id' => '31',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cansahcab',
            'estado_id' => '31',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cantamayec',
            'estado_id' => '31',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Celestún',
            'estado_id' => '31',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cenotillo',
            'estado_id' => '31',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Conkal',
            'estado_id' => '31',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuncunul',
            'estado_id' => '31',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuzamá',
            'estado_id' => '31',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chacsinkín',
            'estado_id' => '31',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chankom',
            'estado_id' => '31',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chapab',
            'estado_id' => '31',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chemax',
            'estado_id' => '31',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chicxulub Pueblo',
            'estado_id' => '31',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chichimilá',
            'estado_id' => '31',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chikindzonot',
            'estado_id' => '31',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chocholá',
            'estado_id' => '31',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chumayel',
            'estado_id' => '31',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzán',
            'estado_id' => '31',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzemul',
            'estado_id' => '31',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzidzantún',
            'estado_id' => '31',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzilam de Bravo',
            'estado_id' => '31',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzilam González',
            'estado_id' => '31',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzitás',
            'estado_id' => '31',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Dzoncauich',
            'estado_id' => '31',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Espita',
            'estado_id' => '31',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Halachó',
            'estado_id' => '31',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hocabá',
            'estado_id' => '31',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hoctún',
            'estado_id' => '31',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Homún',
            'estado_id' => '31',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huhí',
            'estado_id' => '31',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Hunucmá',
            'estado_id' => '31',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ixil',
            'estado_id' => '31',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Izamal',
            'estado_id' => '31',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Kanasín',
            'estado_id' => '31',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Kantunil',
            'estado_id' => '31',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Kaua',
            'estado_id' => '31',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Kinchil',
            'estado_id' => '31',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Kopomá',
            'estado_id' => '31',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mama',
            'estado_id' => '31',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maní',
            'estado_id' => '31',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Maxcanú',
            'estado_id' => '31',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mayapán',
            'estado_id' => '31',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mérida',
            'estado_id' => '31',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mocochá',
            'estado_id' => '31',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Motul',
            'estado_id' => '31',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Muna',
            'estado_id' => '31',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Muxupip',
            'estado_id' => '31',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Opichén',
            'estado_id' => '31',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Oxkutzcab',
            'estado_id' => '31',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Panabá',
            'estado_id' => '31',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Peto',
            'estado_id' => '31',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Progreso',
            'estado_id' => '31',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Quintana Roo',
            'estado_id' => '31',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Río Lagartos',
            'estado_id' => '31',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sacalum',
            'estado_id' => '31',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Samahil',
            'estado_id' => '31',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sanahcat',
            'estado_id' => '31',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'San Felipe',
            'estado_id' => '31',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa Elena',
            'estado_id' => '31',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Seyé',
            'estado_id' => '31',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sinanché',
            'estado_id' => '31',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sotuta',
            'estado_id' => '31',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sucilá',
            'estado_id' => '31',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sudzal',
            'estado_id' => '31',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Suma',
            'estado_id' => '31',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tahdziú',
            'estado_id' => '31',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tahmek',
            'estado_id' => '31',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teabo',
            'estado_id' => '31',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tecoh',
            'estado_id' => '31',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tekal de Venegas',
            'estado_id' => '31',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tekantó',
            'estado_id' => '31',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tekax',
            'estado_id' => '31',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tekit',
            'estado_id' => '31',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tekom',
            'estado_id' => '31',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Telchac Pueblo',
            'estado_id' => '31',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Telchac Puerto',
            'estado_id' => '31',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temax',
            'estado_id' => '31',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Temozón',
            'estado_id' => '31',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepakán',
            'estado_id' => '31',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tetiz',
            'estado_id' => '31',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teya',
            'estado_id' => '31',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ticul',
            'estado_id' => '31',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Timucuy',
            'estado_id' => '31',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tinum',
            'estado_id' => '31',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tixcacalcupul',
            'estado_id' => '31',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tixkokob',
            'estado_id' => '31',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tixmehuac',
            'estado_id' => '31',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tixpéhual',
            'estado_id' => '31',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tizimín',
            'estado_id' => '31',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tunkás',
            'estado_id' => '31',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tzucacab',
            'estado_id' => '31',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Uayma',
            'estado_id' => '31',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ucú',
            'estado_id' => '31',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Umán',
            'estado_id' => '31',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valladolid',
            'estado_id' => '31',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Xocchel',
            'estado_id' => '31',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yaxcabá',
            'estado_id' => '31',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yaxkukul',
            'estado_id' => '31',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Yobaín',
            'estado_id' => '31',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apozol',
            'estado_id' => '32',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Apulco',
            'estado_id' => '32',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Atolinga',
            'estado_id' => '32',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Benito Juárez',
            'estado_id' => '32',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Calera',
            'estado_id' => '32',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cañitas de Felipe Pescador',
            'estado_id' => '32',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Concepción del Oro',
            'estado_id' => '32',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Cuauhtémoc',
            'estado_id' => '32',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Chalchihuites',
            'estado_id' => '32',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Fresnillo',
            'estado_id' => '32',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Trinidad García de la Cadena',
            'estado_id' => '32',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Genaro Codina',
            'estado_id' => '32',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Enrique Estrada',
            'estado_id' => '32',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Francisco R. Murguía',
            'estado_id' => '32',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Plateado de Joaquín Amaro',
            'estado_id' => '32',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'General Pánfilo Natera',
            'estado_id' => '32',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Guadalupe',
            'estado_id' => '32',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Huanusco',
            'estado_id' => '32',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jalpa',
            'estado_id' => '32',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jerez',
            'estado_id' => '32',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Jiménez del Teul',
            'estado_id' => '32',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juan Aldama',
            'estado_id' => '32',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Juchipila',
            'estado_id' => '32',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Loreto',
            'estado_id' => '32',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Luis Moya',
            'estado_id' => '32',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mazapil',
            'estado_id' => '32',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Melchor Ocampo',
            'estado_id' => '32',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Mezquital del Oro',
            'estado_id' => '32',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Miguel Auza',
            'estado_id' => '32',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Momax',
            'estado_id' => '32',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Monte Escobedo',
            'estado_id' => '32',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Morelos',
            'estado_id' => '32',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Moyahua de Estrada',
            'estado_id' => '32',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Nochistlán de Mejía',
            'estado_id' => '32',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Noria de Ángeles',
            'estado_id' => '32',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Ojocaliente',
            'estado_id' => '32',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pánuco',
            'estado_id' => '32',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Pinos',
            'estado_id' => '32',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Río Grande',
            'estado_id' => '32',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sain Alto',
            'estado_id' => '32',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'El Salvador',
            'estado_id' => '32',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Sombrerete',
            'estado_id' => '32',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Susticacán',
            'estado_id' => '32',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tabasco',
            'estado_id' => '32',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepechitlán',
            'estado_id' => '32',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tepetongo',
            'estado_id' => '32',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Teúl de González Ortega',
            'estado_id' => '32',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Tlaltenango de Sánchez Román',
            'estado_id' => '32',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Valparaíso',
            'estado_id' => '32',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Vetagrande',
            'estado_id' => '32',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa de Cos',
            'estado_id' => '32',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa García',
            'estado_id' => '32',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa González Ortega',
            'estado_id' => '32',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villa Hidalgo',
            'estado_id' => '32',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Villanueva',
            'estado_id' => '32',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Zacatecas',
            'estado_id' => '32',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Trancoso',
            'estado_id' => '32',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'Santa María de la Paz',
            'estado_id' => '32',
            'number' =>  '058',
        ]);
    }
}
