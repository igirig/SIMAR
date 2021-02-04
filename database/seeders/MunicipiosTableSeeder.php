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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        DB::table('municipios')->insert([
            'name' =>  'Aguascalientes',
            'entidad_id' => '01',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asientos',
            'entidad_id' => '01',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calvillo',
            'entidad_id' => '01',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosío',
            'entidad_id' => '01',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús María',
            'entidad_id' => '01',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pabellón de Arteaga',
            'entidad_id' => '01',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rincón de Romos',
            'entidad_id' => '01',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José de Gracia',
            'entidad_id' => '01',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepezalá',
            'entidad_id' => '01',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Llano',
            'entidad_id' => '01',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de los Romo',
            'entidad_id' => '01',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ensenada',
            'entidad_id' => '02',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexicali',
            'entidad_id' => '02',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecate',
            'entidad_id' => '02',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tijuana',
            'entidad_id' => '02',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Playas de Rosarito',
            'entidad_id' => '02',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comondú',
            'entidad_id' => '03',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mulegé',
            'entidad_id' => '03',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Paz',
            'entidad_id' => '03',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Cabos',
            'entidad_id' => '03',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loreto',
            'entidad_id' => '03',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calkiní',
            'entidad_id' => '04',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Campeche',
            'entidad_id' => '04',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carmen',
            'entidad_id' => '04',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Champotón',
            'entidad_id' => '04',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hecelchakán',
            'entidad_id' => '04',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hopelchén',
            'entidad_id' => '04',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palizada',
            'entidad_id' => '04',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenabo',
            'entidad_id' => '04',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escárcega',
            'entidad_id' => '04',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calakmul',
            'entidad_id' => '04',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candelaria',
            'entidad_id' => '04',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'entidad_id' => '05',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuña',
            'entidad_id' => '05',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'entidad_id' => '05',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arteaga',
            'entidad_id' => '05',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candela',
            'entidad_id' => '05',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Castaños',
            'entidad_id' => '05',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuatro Ciénegas',
            'entidad_id' => '05',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escobedo',
            'entidad_id' => '05',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco I. Madero',
            'entidad_id' => '05',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera',
            'entidad_id' => '05',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Cepeda',
            'entidad_id' => '05',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'entidad_id' => '05',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'entidad_id' => '05',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'entidad_id' => '05',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'entidad_id' => '05',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lamadrid',
            'entidad_id' => '05',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'entidad_id' => '05',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monclova',
            'entidad_id' => '05',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'entidad_id' => '05',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Múzquiz',
            'entidad_id' => '05',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nadadores',
            'entidad_id' => '05',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nava',
            'entidad_id' => '05',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '05',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parras',
            'entidad_id' => '05',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Piedras Negras',
            'entidad_id' => '05',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso',
            'entidad_id' => '05',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ramos Arizpe',
            'entidad_id' => '05',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabinas',
            'entidad_id' => '05',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sacramento',
            'entidad_id' => '05',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saltillo',
            'entidad_id' => '05',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Buenaventura',
            'entidad_id' => '05',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de Sabinas',
            'entidad_id' => '05',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro',
            'entidad_id' => '05',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sierra Mojada',
            'entidad_id' => '05',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Torreón',
            'entidad_id' => '05',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Viesca',
            'entidad_id' => '05',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Unión',
            'entidad_id' => '05',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'entidad_id' => '05',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Armería',
            'entidad_id' => '06',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colima',
            'entidad_id' => '06',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comala',
            'entidad_id' => '06',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coquimatlán',
            'entidad_id' => '06',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'entidad_id' => '06',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán',
            'entidad_id' => '06',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manzanillo',
            'entidad_id' => '06',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Minatitlán',
            'entidad_id' => '06',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecomán',
            'entidad_id' => '06',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Álvarez',
            'entidad_id' => '06',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acacoyagua',
            'entidad_id' => '07',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acala',
            'entidad_id' => '07',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acapetahua',
            'entidad_id' => '07',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altamirano',
            'entidad_id' => '07',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatán',
            'entidad_id' => '07',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatenango de la Frontera',
            'entidad_id' => '07',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatenango del Valle',
            'entidad_id' => '07',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angel Albino Corzo',
            'entidad_id' => '07',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arriaga',
            'entidad_id' => '07',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bejucal de Ocampo',
            'entidad_id' => '07',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bella Vista',
            'entidad_id' => '07',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Berriozábal',
            'entidad_id' => '07',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bochil',
            'entidad_id' => '07',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Bosque',
            'entidad_id' => '07',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cacahoatán',
            'entidad_id' => '07',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catazajá',
            'entidad_id' => '07',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cintalapa',
            'entidad_id' => '07',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coapilla',
            'entidad_id' => '07',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comitán de Domínguez',
            'entidad_id' => '07',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Concordia',
            'entidad_id' => '07',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copainalá',
            'entidad_id' => '07',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchihuitán',
            'entidad_id' => '07',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chamula',
            'entidad_id' => '07',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chanal',
            'entidad_id' => '07',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapultenango',
            'entidad_id' => '07',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chenalhó',
            'entidad_id' => '07',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiapa de Corzo',
            'entidad_id' => '07',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiapilla',
            'entidad_id' => '07',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicoasén',
            'entidad_id' => '07',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicomuselo',
            'entidad_id' => '07',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilón',
            'entidad_id' => '07',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escuintla',
            'entidad_id' => '07',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco León',
            'entidad_id' => '07',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera Comalapa',
            'entidad_id' => '07',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Frontera Hidalgo',
            'entidad_id' => '07',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Grandeza',
            'entidad_id' => '07',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetán',
            'entidad_id' => '07',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixtán',
            'entidad_id' => '07',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitiupán',
            'entidad_id' => '07',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixtla',
            'entidad_id' => '07',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Independencia',
            'entidad_id' => '07',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatán',
            'entidad_id' => '07',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacomitán',
            'entidad_id' => '07',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapa',
            'entidad_id' => '07',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapangajoya',
            'entidad_id' => '07',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquipilas',
            'entidad_id' => '07',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jitotol',
            'entidad_id' => '07',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'entidad_id' => '07',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Larráinzar',
            'entidad_id' => '07',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Libertad',
            'entidad_id' => '07',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mapastepec',
            'entidad_id' => '07',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Margaritas',
            'entidad_id' => '07',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapa de Madero',
            'entidad_id' => '07',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatán',
            'entidad_id' => '07',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metapa',
            'entidad_id' => '07',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mitontic',
            'entidad_id' => '07',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Motozintla',
            'entidad_id' => '07',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Ruíz',
            'entidad_id' => '07',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocosingo',
            'entidad_id' => '07',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotepec',
            'entidad_id' => '07',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocozocoautla de Espinosa',
            'entidad_id' => '07',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ostuacán',
            'entidad_id' => '07',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Osumacinta',
            'entidad_id' => '07',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oxchuc',
            'entidad_id' => '07',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palenque',
            'entidad_id' => '07',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantelhó',
            'entidad_id' => '07',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantepec',
            'entidad_id' => '07',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pichucalco',
            'entidad_id' => '07',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pijijiapan',
            'entidad_id' => '07',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Porvenir',
            'entidad_id' => '07',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Comaltitlán',
            'entidad_id' => '07',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo Solistahuacán',
            'entidad_id' => '07',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'entidad_id' => '07',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reforma',
            'entidad_id' => '07',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Rosas',
            'entidad_id' => '07',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabanilla',
            'entidad_id' => '07',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salto de Agua',
            'entidad_id' => '07',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal de las Casas',
            'entidad_id' => '07',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Fernando',
            'entidad_id' => '07',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Siltepec',
            'entidad_id' => '07',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Simojovel',
            'entidad_id' => '07',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sitalá',
            'entidad_id' => '07',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Socoltenango',
            'entidad_id' => '07',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Solosuchiapa',
            'entidad_id' => '07',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyaló',
            'entidad_id' => '07',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suchiapa',
            'entidad_id' => '07',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suchiate',
            'entidad_id' => '07',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sunuapa',
            'entidad_id' => '07',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapachula',
            'entidad_id' => '07',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapalapa',
            'entidad_id' => '07',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapilula',
            'entidad_id' => '07',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecpatán',
            'entidad_id' => '07',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenejapa',
            'entidad_id' => '07',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teopisca',
            'entidad_id' => '07',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tila',
            'entidad_id' => '07',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonalá',
            'entidad_id' => '07',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolapa',
            'entidad_id' => '07',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Trinitaria',
            'entidad_id' => '07',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tumbalá',
            'entidad_id' => '07',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtla Gutiérrez',
            'entidad_id' => '07',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtla Chico',
            'entidad_id' => '07',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzantán',
            'entidad_id' => '07',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzimol',
            'entidad_id' => '07',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión Juárez',
            'entidad_id' => '07',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'entidad_id' => '07',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Corzo',
            'entidad_id' => '07',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villaflores',
            'entidad_id' => '07',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yajalón',
            'entidad_id' => '07',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas',
            'entidad_id' => '07',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacantán',
            'entidad_id' => '07',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cancuc',
            'entidad_id' => '07',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'entidad_id' => '07',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benemérito de las Américas',
            'entidad_id' => '07',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maravilla Tenejapa',
            'entidad_id' => '07',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marqués de Comillas',
            'entidad_id' => '07',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Montecristo de Guerrero',
            'entidad_id' => '07',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Duraznal',
            'entidad_id' => '07',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago el Pinar',
            'entidad_id' => '07',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahumada',
            'entidad_id' => '08',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'entidad_id' => '08',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'entidad_id' => '08',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquiles Serdán',
            'entidad_id' => '08',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ascensión',
            'entidad_id' => '08',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bachíniva',
            'entidad_id' => '08',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Balleza',
            'entidad_id' => '08',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Batopilas',
            'entidad_id' => '08',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bocoyna',
            'entidad_id' => '08',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenaventura',
            'entidad_id' => '08',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camargo',
            'entidad_id' => '08',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carichí',
            'entidad_id' => '08',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casas Grandes',
            'entidad_id' => '08',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coronado',
            'entidad_id' => '08',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyame del Sotol',
            'entidad_id' => '08',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Cruz',
            'entidad_id' => '08',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'entidad_id' => '08',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cusihuiriachi',
            'entidad_id' => '08',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chihuahua',
            'entidad_id' => '08',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chínipas',
            'entidad_id' => '08',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Delicias',
            'entidad_id' => '08',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dr. Belisario Domínguez',
            'entidad_id' => '08',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Galeana',
            'entidad_id' => '08',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel',
            'entidad_id' => '08',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'entidad_id' => '08',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gran Morelos',
            'entidad_id' => '08',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guachochi',
            'entidad_id' => '08',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'entidad_id' => '08',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe y Calvo',
            'entidad_id' => '08',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guazapares',
            'entidad_id' => '08',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'entidad_id' => '08',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo del Parral',
            'entidad_id' => '08',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejotitán',
            'entidad_id' => '08',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ignacio Zaragoza',
            'entidad_id' => '08',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Janos',
            'entidad_id' => '08',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'entidad_id' => '08',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'entidad_id' => '08',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Julimes',
            'entidad_id' => '08',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'López',
            'entidad_id' => '08',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Madera',
            'entidad_id' => '08',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maguarichi',
            'entidad_id' => '08',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manuel Benavides',
            'entidad_id' => '08',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matachí',
            'entidad_id' => '08',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'entidad_id' => '08',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Meoqui',
            'entidad_id' => '08',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'entidad_id' => '08',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moris',
            'entidad_id' => '08',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Namiquipa',
            'entidad_id' => '08',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nonoava',
            'entidad_id' => '08',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Casas Grandes',
            'entidad_id' => '08',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '08',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojinaga',
            'entidad_id' => '08',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Praxedis G. Guerrero',
            'entidad_id' => '08',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Riva Palacio',
            'entidad_id' => '08',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosales',
            'entidad_id' => '08',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'entidad_id' => '08',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de Borja',
            'entidad_id' => '08',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco de Conchos',
            'entidad_id' => '08',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Oro',
            'entidad_id' => '08',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Bárbara',
            'entidad_id' => '08',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Satevó',
            'entidad_id' => '08',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saucillo',
            'entidad_id' => '08',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temósachic',
            'entidad_id' => '08',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Tule',
            'entidad_id' => '08',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Urique',
            'entidad_id' => '08',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uruachi',
            'entidad_id' => '08',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Zaragoza',
            'entidad_id' => '08',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Azcapotzalco',
            'entidad_id' => '09',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyoacán',
            'entidad_id' => '09',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuajimalpa de Morelos',
            'entidad_id' => '09',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gustavo A. Madero',
            'entidad_id' => '09',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iztacalco',
            'entidad_id' => '09',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iztapalapa',
            'entidad_id' => '09',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Contreras',
            'entidad_id' => '09',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Milpa Alta',
            'entidad_id' => '09',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álvaro Obregón',
            'entidad_id' => '09',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tláhuac',
            'entidad_id' => '09',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalpan',
            'entidad_id' => '09',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochimilco',
            'entidad_id' => '09',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '09',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'entidad_id' => '09',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Hidalgo',
            'entidad_id' => '09',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'entidad_id' => '09',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Canatlán',
            'entidad_id' => '10',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Canelas',
            'entidad_id' => '10',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coneto de Comonfort',
            'entidad_id' => '10',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuencamé',
            'entidad_id' => '10',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Durango',
            'entidad_id' => '10',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Simón Bolívar',
            'entidad_id' => '10',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Palacio',
            'entidad_id' => '10',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Victoria',
            'entidad_id' => '10',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guanaceví',
            'entidad_id' => '10',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'entidad_id' => '10',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Indé',
            'entidad_id' => '10',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerdo',
            'entidad_id' => '10',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mapimí',
            'entidad_id' => '10',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquital',
            'entidad_id' => '10',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nazas',
            'entidad_id' => '10',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nombre de Dios',
            'entidad_id' => '10',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '10',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Oro',
            'entidad_id' => '10',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otáez',
            'entidad_id' => '10',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco de Coronado',
            'entidad_id' => '10',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peñón Blanco',
            'entidad_id' => '10',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poanas',
            'entidad_id' => '10',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo',
            'entidad_id' => '10',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rodeo',
            'entidad_id' => '10',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bernardo',
            'entidad_id' => '10',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dimas',
            'entidad_id' => '10',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de Guadalupe',
            'entidad_id' => '10',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'entidad_id' => '10',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis del Cordero',
            'entidad_id' => '10',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro del Gallo',
            'entidad_id' => '10',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Clara',
            'entidad_id' => '10',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Papasquiaro',
            'entidad_id' => '10',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Súchil',
            'entidad_id' => '10',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazula',
            'entidad_id' => '10',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepehuanes',
            'entidad_id' => '10',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahualilo',
            'entidad_id' => '10',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Topia',
            'entidad_id' => '10',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vicente Guerrero',
            'entidad_id' => '10',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Ideal',
            'entidad_id' => '10',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'entidad_id' => '11',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acámbaro',
            'entidad_id' => '11',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel de Allende',
            'entidad_id' => '11',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaseo el Alto',
            'entidad_id' => '11',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaseo el Grande',
            'entidad_id' => '11',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atarjea',
            'entidad_id' => '11',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Celaya',
            'entidad_id' => '11',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manuel Doblado',
            'entidad_id' => '11',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comonfort',
            'entidad_id' => '11',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coroneo',
            'entidad_id' => '11',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cortazar',
            'entidad_id' => '11',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuerámaro',
            'entidad_id' => '11',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Mora',
            'entidad_id' => '11',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dolores Hidalgo Cuna de la Independencia Nacional',
            'entidad_id' => '11',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guanajuato',
            'entidad_id' => '11',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huanímaro',
            'entidad_id' => '11',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Irapuato',
            'entidad_id' => '11',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaral del Progreso',
            'entidad_id' => '11',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jerécuaro',
            'entidad_id' => '11',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'León',
            'entidad_id' => '11',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moroleón',
            'entidad_id' => '11',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '11',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pénjamo',
            'entidad_id' => '11',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Nuevo',
            'entidad_id' => '11',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Purísima del Rincón',
            'entidad_id' => '11',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Romita',
            'entidad_id' => '11',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salamanca',
            'entidad_id' => '11',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvatierra',
            'entidad_id' => '11',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego de la Unión',
            'entidad_id' => '11',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe',
            'entidad_id' => '11',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Rincón',
            'entidad_id' => '11',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Iturbide',
            'entidad_id' => '11',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis de la Paz',
            'entidad_id' => '11',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'entidad_id' => '11',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz de Juventino Rosas',
            'entidad_id' => '11',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Maravatío',
            'entidad_id' => '11',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Silao de la Victoria',
            'entidad_id' => '11',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarandacuao',
            'entidad_id' => '11',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarimoro',
            'entidad_id' => '11',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Blanca',
            'entidad_id' => '11',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uriangato',
            'entidad_id' => '11',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Santiago',
            'entidad_id' => '11',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Victoria',
            'entidad_id' => '11',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villagrán',
            'entidad_id' => '11',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xichú',
            'entidad_id' => '11',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yuriria',
            'entidad_id' => '11',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acapulco de Juárez',
            'entidad_id' => '12',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacuotzingo',
            'entidad_id' => '12',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajuchitlán del Progreso',
            'entidad_id' => '12',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alcozauca de Guerrero',
            'entidad_id' => '12',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alpoyeca',
            'entidad_id' => '12',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaxtla',
            'entidad_id' => '12',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arcelia',
            'entidad_id' => '12',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenango del Río',
            'entidad_id' => '12',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlamajalcingo del Monte',
            'entidad_id' => '12',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlixtac',
            'entidad_id' => '12',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac de Álvarez',
            'entidad_id' => '12',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayutla de los Libres',
            'entidad_id' => '12',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Azoyú',
            'entidad_id' => '12',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '12',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenavista de Cuéllar',
            'entidad_id' => '12',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuayutla de José María Izazaga',
            'entidad_id' => '12',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocula',
            'entidad_id' => '12',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copala',
            'entidad_id' => '12',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copalillo',
            'entidad_id' => '12',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copanatoyac',
            'entidad_id' => '12',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyuca de Benítez',
            'entidad_id' => '12',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyuca de Catalán',
            'entidad_id' => '12',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuajinicuilapa',
            'entidad_id' => '12',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cualác',
            'entidad_id' => '12',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautepec',
            'entidad_id' => '12',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuetzala del Progreso',
            'entidad_id' => '12',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cutzamala de Pinzón',
            'entidad_id' => '12',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilapa de Álvarez',
            'entidad_id' => '12',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilpancingo de los Bravo',
            'entidad_id' => '12',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Florencio Villarreal',
            'entidad_id' => '12',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Canuto A. Neri',
            'entidad_id' => '12',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Heliodoro Castillo',
            'entidad_id' => '12',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huamuxtitlán',
            'entidad_id' => '12',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzuco de los Figueroa',
            'entidad_id' => '12',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iguala de la Independencia',
            'entidad_id' => '12',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Igualapa',
            'entidad_id' => '12',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcateopan de Cuauhtémoc',
            'entidad_id' => '12',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zihuatanejo de Azueta',
            'entidad_id' => '12',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan R. Escudero',
            'entidad_id' => '12',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Leonardo Bravo',
            'entidad_id' => '12',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Malinaltepec',
            'entidad_id' => '12',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mártir de Cuilapan',
            'entidad_id' => '12',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metlatónoc',
            'entidad_id' => '12',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mochitlán',
            'entidad_id' => '12',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Olinalá',
            'entidad_id' => '12',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ometepec',
            'entidad_id' => '12',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pedro Ascencio Alquisiras',
            'entidad_id' => '12',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Petatlán',
            'entidad_id' => '12',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pilcaya',
            'entidad_id' => '12',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pungarabato',
            'entidad_id' => '12',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quechultenango',
            'entidad_id' => '12',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Acatlán',
            'entidad_id' => '12',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos',
            'entidad_id' => '12',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Totolapan',
            'entidad_id' => '12',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taxco de Alarcón',
            'entidad_id' => '12',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecoanapa',
            'entidad_id' => '12',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Técpan de Galeana',
            'entidad_id' => '12',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teloloapan',
            'entidad_id' => '12',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepecoacuilco de Trujano',
            'entidad_id' => '12',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetipac',
            'entidad_id' => '12',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixtla de Guerrero',
            'entidad_id' => '12',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacoachistlahuaca',
            'entidad_id' => '12',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacoapa',
            'entidad_id' => '12',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalchapa',
            'entidad_id' => '12',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixtaquilla de Maldonado',
            'entidad_id' => '12',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapa de Comonfort',
            'entidad_id' => '12',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapehuala',
            'entidad_id' => '12',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Unión de Isidoro Montes de Oca',
            'entidad_id' => '12',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalpatláhuac',
            'entidad_id' => '12',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochihuehuetlán',
            'entidad_id' => '12',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochistlahuaca',
            'entidad_id' => '12',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Tablas',
            'entidad_id' => '12',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zirándaro',
            'entidad_id' => '12',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zitlala',
            'entidad_id' => '12',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eduardo Neri',
            'entidad_id' => '12',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatepec',
            'entidad_id' => '12',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marquelia',
            'entidad_id' => '12',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cochoapa el Grande',
            'entidad_id' => '12',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Joaquín de Herrera',
            'entidad_id' => '12',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitán',
            'entidad_id' => '12',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iliatenco',
            'entidad_id' => '12',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'entidad_id' => '13',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acaxochitlán',
            'entidad_id' => '13',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Actopan',
            'entidad_id' => '13',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Blanca de Iturbide',
            'entidad_id' => '13',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajacuba',
            'entidad_id' => '13',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alfajayucan',
            'entidad_id' => '13',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya',
            'entidad_id' => '13',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apan',
            'entidad_id' => '13',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Arenal',
            'entidad_id' => '13',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atitalaquia',
            'entidad_id' => '13',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlapexco',
            'entidad_id' => '13',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco el Grande',
            'entidad_id' => '13',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco de Tula',
            'entidad_id' => '13',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calnali',
            'entidad_id' => '13',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cardonal',
            'entidad_id' => '13',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautepec de Hinojosa',
            'entidad_id' => '13',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapantongo',
            'entidad_id' => '13',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapulhuacán',
            'entidad_id' => '13',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilcuautla',
            'entidad_id' => '13',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán',
            'entidad_id' => '13',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'entidad_id' => '13',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epazoyucan',
            'entidad_id' => '13',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco I. Madero',
            'entidad_id' => '13',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huasca de Ocampo',
            'entidad_id' => '13',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautla',
            'entidad_id' => '13',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huazalingo',
            'entidad_id' => '13',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetla',
            'entidad_id' => '13',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejutla de Reyes',
            'entidad_id' => '13',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huichapan',
            'entidad_id' => '13',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixmiquilpan',
            'entidad_id' => '13',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jacala de Ledezma',
            'entidad_id' => '13',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaltocán',
            'entidad_id' => '13',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez Hidalgo',
            'entidad_id' => '13',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lolotla',
            'entidad_id' => '13',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metepec',
            'entidad_id' => '13',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Metzquititlán',
            'entidad_id' => '13',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metztitlán',
            'entidad_id' => '13',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral del Chico',
            'entidad_id' => '13',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral del Monte',
            'entidad_id' => '13',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Misión',
            'entidad_id' => '13',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixquiahuala de Juárez',
            'entidad_id' => '13',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Molango de Escamilla',
            'entidad_id' => '13',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Flores',
            'entidad_id' => '13',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopala de Villagrán',
            'entidad_id' => '13',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Omitlán de Juárez',
            'entidad_id' => '13',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Orizatlán',
            'entidad_id' => '13',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pacula',
            'entidad_id' => '13',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pachuca de Soto',
            'entidad_id' => '13',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pisaflores',
            'entidad_id' => '13',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso de Obregón',
            'entidad_id' => '13',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mineral de la Reforma',
            'entidad_id' => '13',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Tlaxiaca',
            'entidad_id' => '13',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Tutotepec',
            'entidad_id' => '13',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador',
            'entidad_id' => '13',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago de Anaya',
            'entidad_id' => '13',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tulantepec de Lugo Guerrero',
            'entidad_id' => '13',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Singuilucan',
            'entidad_id' => '13',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tasquillo',
            'entidad_id' => '13',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecozautla',
            'entidad_id' => '13',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango de Doria',
            'entidad_id' => '13',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeapulco',
            'entidad_id' => '13',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepehuacán de Guerrero',
            'entidad_id' => '13',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeji del Río de Ocampo',
            'entidad_id' => '13',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetitlán',
            'entidad_id' => '13',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetepango',
            'entidad_id' => '13',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tezontepec',
            'entidad_id' => '13',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezontepec de Aldama',
            'entidad_id' => '13',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguistengo',
            'entidad_id' => '13',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizayuca',
            'entidad_id' => '13',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuelilpan',
            'entidad_id' => '13',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuiltepa',
            'entidad_id' => '13',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanalapa',
            'entidad_id' => '13',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanchinol',
            'entidad_id' => '13',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxcoapan',
            'entidad_id' => '13',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolcayuca',
            'entidad_id' => '13',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tula de Allende',
            'entidad_id' => '13',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulancingo de Bravo',
            'entidad_id' => '13',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiatipan',
            'entidad_id' => '13',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochicoatlán',
            'entidad_id' => '13',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yahualica',
            'entidad_id' => '13',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualtipán de Ángeles',
            'entidad_id' => '13',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán de Juárez',
            'entidad_id' => '13',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zempoala',
            'entidad_id' => '13',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zimapán',
            'entidad_id' => '13',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatic',
            'entidad_id' => '14',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán de Juárez',
            'entidad_id' => '14',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahualulco de Mercado',
            'entidad_id' => '14',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amacueca',
            'entidad_id' => '14',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatitán',
            'entidad_id' => '14',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ameca',
            'entidad_id' => '14',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juanito de Escobedo',
            'entidad_id' => '14',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arandas',
            'entidad_id' => '14',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Arenal',
            'entidad_id' => '14',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atemajac de Brizuela',
            'entidad_id' => '14',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atengo',
            'entidad_id' => '14',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenguillo',
            'entidad_id' => '14',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atotonilco el Alto',
            'entidad_id' => '14',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac',
            'entidad_id' => '14',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Autlán de Navarro',
            'entidad_id' => '14',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotlán',
            'entidad_id' => '14',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayutla',
            'entidad_id' => '14',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Barca',
            'entidad_id' => '14',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bolaños',
            'entidad_id' => '14',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cabo Corrientes',
            'entidad_id' => '14',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casimiro Castillo',
            'entidad_id' => '14',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cihuatlán',
            'entidad_id' => '14',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán el Grande',
            'entidad_id' => '14',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocula',
            'entidad_id' => '14',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colotlán',
            'entidad_id' => '14',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción de Buenos Aires',
            'entidad_id' => '14',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán de García Barragán',
            'entidad_id' => '14',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautla',
            'entidad_id' => '14',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuquío',
            'entidad_id' => '14',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapala',
            'entidad_id' => '14',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chimaltitán',
            'entidad_id' => '14',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiquilistlán',
            'entidad_id' => '14',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Degollado',
            'entidad_id' => '14',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ejutla',
            'entidad_id' => '14',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Encarnación de Díaz',
            'entidad_id' => '14',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Etzatlán',
            'entidad_id' => '14',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Grullo',
            'entidad_id' => '14',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guachinango',
            'entidad_id' => '14',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalajara',
            'entidad_id' => '14',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hostotipaquillo',
            'entidad_id' => '14',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejúcar',
            'entidad_id' => '14',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejuquilla el Alto',
            'entidad_id' => '14',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Huerta',
            'entidad_id' => '14',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán de los Membrillos',
            'entidad_id' => '14',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuacán del Río',
            'entidad_id' => '14',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalostotitlán',
            'entidad_id' => '14',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jamay',
            'entidad_id' => '14',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús María',
            'entidad_id' => '14',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotlán de los Dolores',
            'entidad_id' => '14',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jocotepec',
            'entidad_id' => '14',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juanacatlán',
            'entidad_id' => '14',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitlán',
            'entidad_id' => '14',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagos de Moreno',
            'entidad_id' => '14',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Limón',
            'entidad_id' => '14',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'entidad_id' => '14',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Oro',
            'entidad_id' => '14',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Manzanilla de la Paz',
            'entidad_id' => '14',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mascota',
            'entidad_id' => '14',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazamitla',
            'entidad_id' => '14',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexticacán',
            'entidad_id' => '14',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquitic',
            'entidad_id' => '14',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtlán',
            'entidad_id' => '14',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotlán',
            'entidad_id' => '14',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojuelos de Jalisco',
            'entidad_id' => '14',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pihuamo',
            'entidad_id' => '14',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poncitlán',
            'entidad_id' => '14',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puerto Vallarta',
            'entidad_id' => '14',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Purificación',
            'entidad_id' => '14',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quitupan',
            'entidad_id' => '14',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Salto',
            'entidad_id' => '14',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal de la Barranca',
            'entidad_id' => '14',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego de Alejandría',
            'entidad_id' => '14',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de los Lagos',
            'entidad_id' => '14',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Julián',
            'entidad_id' => '14',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos',
            'entidad_id' => '14',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de Bolaños',
            'entidad_id' => '14',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Hidalgo',
            'entidad_id' => '14',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel el Alto',
            'entidad_id' => '14',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'entidad_id' => '14',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián del Oeste',
            'entidad_id' => '14',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María de los Ángeles',
            'entidad_id' => '14',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sayula',
            'entidad_id' => '14',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tala',
            'entidad_id' => '14',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Talpa de Allende',
            'entidad_id' => '14',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazula de Gordiano',
            'entidad_id' => '14',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tapalpa',
            'entidad_id' => '14',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecalitlán',
            'entidad_id' => '14',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecolotlán',
            'entidad_id' => '14',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Techaluta de Montenegro',
            'entidad_id' => '14',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenamaxtlán',
            'entidad_id' => '14',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocaltiche',
            'entidad_id' => '14',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocuitatlán de Corona',
            'entidad_id' => '14',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatitlán de Morelos',
            'entidad_id' => '14',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequila',
            'entidad_id' => '14',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teuchitlán',
            'entidad_id' => '14',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizapán el Alto',
            'entidad_id' => '14',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlajomulco de Zúñiga',
            'entidad_id' => '14',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tlaquepaque',
            'entidad_id' => '14',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolimán',
            'entidad_id' => '14',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tomatlán',
            'entidad_id' => '14',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonalá',
            'entidad_id' => '14',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonaya',
            'entidad_id' => '14',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonila',
            'entidad_id' => '14',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totatiche',
            'entidad_id' => '14',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tototlán',
            'entidad_id' => '14',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxcacuesco',
            'entidad_id' => '14',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxcueca',
            'entidad_id' => '14',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'entidad_id' => '14',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión de San Antonio',
            'entidad_id' => '14',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión de Tula',
            'entidad_id' => '14',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Guadalupe',
            'entidad_id' => '14',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Juárez',
            'entidad_id' => '14',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel',
            'entidad_id' => '14',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Corona',
            'entidad_id' => '14',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Guerrero',
            'entidad_id' => '14',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'entidad_id' => '14',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañadas de Obregón',
            'entidad_id' => '14',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yahualica de González Gallo',
            'entidad_id' => '14',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacoalco de Torres',
            'entidad_id' => '14',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapopan',
            'entidad_id' => '14',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotiltic',
            'entidad_id' => '14',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán de Vadillo',
            'entidad_id' => '14',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlán del Rey',
            'entidad_id' => '14',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotlanejo',
            'entidad_id' => '14',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio Cerro Gordo',
            'entidad_id' => '14',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acambay de Ruíz Castañeda',
            'entidad_id' => '15',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acolman',
            'entidad_id' => '15',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aculco',
            'entidad_id' => '15',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya de Alquisiras',
            'entidad_id' => '15',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya de Juárez',
            'entidad_id' => '15',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Almoloya del Río',
            'entidad_id' => '15',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amanalco',
            'entidad_id' => '15',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatepec',
            'entidad_id' => '15',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amecameca',
            'entidad_id' => '15',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apaxco',
            'entidad_id' => '15',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atenco',
            'entidad_id' => '15',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atizapán',
            'entidad_id' => '15',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atizapán de Zaragoza',
            'entidad_id' => '15',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlacomulco',
            'entidad_id' => '15',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlautla',
            'entidad_id' => '15',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axapusco',
            'entidad_id' => '15',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayapango',
            'entidad_id' => '15',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calimaya',
            'entidad_id' => '15',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Capulhuac',
            'entidad_id' => '15',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coacalco de Berriozábal',
            'entidad_id' => '15',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec Harinas',
            'entidad_id' => '15',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cocotitlán',
            'entidad_id' => '15',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyotepec',
            'entidad_id' => '15',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán',
            'entidad_id' => '15',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalco',
            'entidad_id' => '15',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapa de Mota',
            'entidad_id' => '15',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapultepec',
            'entidad_id' => '15',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautla',
            'entidad_id' => '15',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicoloapan',
            'entidad_id' => '15',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconcuac',
            'entidad_id' => '15',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chimalhuacán',
            'entidad_id' => '15',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Donato Guerra',
            'entidad_id' => '15',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecatepec de Morelos',
            'entidad_id' => '15',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecatzingo',
            'entidad_id' => '15',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetoca',
            'entidad_id' => '15',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueypoxtla',
            'entidad_id' => '15',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huixquilucan',
            'entidad_id' => '15',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isidro Fabela',
            'entidad_id' => '15',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapaluca',
            'entidad_id' => '15',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapan de la Sal',
            'entidad_id' => '15',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtapan del Oro',
            'entidad_id' => '15',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlahuaca',
            'entidad_id' => '15',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalatlaco',
            'entidad_id' => '15',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaltenco',
            'entidad_id' => '15',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotepec',
            'entidad_id' => '15',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotzingo',
            'entidad_id' => '15',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquipilco',
            'entidad_id' => '15',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jocotitlán',
            'entidad_id' => '15',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Joquicingo',
            'entidad_id' => '15',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchitepec',
            'entidad_id' => '15',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerma',
            'entidad_id' => '15',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Malinalco',
            'entidad_id' => '15',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'entidad_id' => '15',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Metepec',
            'entidad_id' => '15',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexicaltzingo',
            'entidad_id' => '15',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'entidad_id' => '15',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naucalpan de Juárez',
            'entidad_id' => '15',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nezahualcóyotl',
            'entidad_id' => '15',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nextlalpan',
            'entidad_id' => '15',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Romero',
            'entidad_id' => '15',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopaltepec',
            'entidad_id' => '15',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocoyoacac',
            'entidad_id' => '15',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocuilan',
            'entidad_id' => '15',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Oro',
            'entidad_id' => '15',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otumba',
            'entidad_id' => '15',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otzoloapan',
            'entidad_id' => '15',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otzolotepec',
            'entidad_id' => '15',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ozumba',
            'entidad_id' => '15',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papalotla',
            'entidad_id' => '15',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Paz',
            'entidad_id' => '15',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Polotitlán',
            'entidad_id' => '15',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'entidad_id' => '15',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio la Isla',
            'entidad_id' => '15',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe del Progreso',
            'entidad_id' => '15',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de las Pirámides',
            'entidad_id' => '15',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Atenco',
            'entidad_id' => '15',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón de Guerrero',
            'entidad_id' => '15',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás',
            'entidad_id' => '15',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyaniquilpan de Juárez',
            'entidad_id' => '15',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sultepec',
            'entidad_id' => '15',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecámac',
            'entidad_id' => '15',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tejupilco',
            'entidad_id' => '15',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temamatla',
            'entidad_id' => '15',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascalapa',
            'entidad_id' => '15',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascalcingo',
            'entidad_id' => '15',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temascaltepec',
            'entidad_id' => '15',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temoaya',
            'entidad_id' => '15',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenancingo',
            'entidad_id' => '15',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango del Aire',
            'entidad_id' => '15',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenango del Valle',
            'entidad_id' => '15',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teoloyucan',
            'entidad_id' => '15',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotihuacán',
            'entidad_id' => '15',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlaoxtoc',
            'entidad_id' => '15',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlixpa',
            'entidad_id' => '15',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepotzotlán',
            'entidad_id' => '15',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequixquiac',
            'entidad_id' => '15',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcaltitlán',
            'entidad_id' => '15',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcalyacac',
            'entidad_id' => '15',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcoco',
            'entidad_id' => '15',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezoyuca',
            'entidad_id' => '15',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguistenco',
            'entidad_id' => '15',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Timilpan',
            'entidad_id' => '15',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalmanalco',
            'entidad_id' => '15',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnepantla de Baz',
            'entidad_id' => '15',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlatlaya',
            'entidad_id' => '15',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Toluca',
            'entidad_id' => '15',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonatico',
            'entidad_id' => '15',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tultepec',
            'entidad_id' => '15',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tultitlán',
            'entidad_id' => '15',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Bravo',
            'entidad_id' => '15',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Allende',
            'entidad_id' => '15',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa del Carbón',
            'entidad_id' => '15',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Guerrero',
            'entidad_id' => '15',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Victoria',
            'entidad_id' => '15',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xonacatlán',
            'entidad_id' => '15',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacazonapan',
            'entidad_id' => '15',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan',
            'entidad_id' => '15',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacantepec',
            'entidad_id' => '15',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zumpahuacán',
            'entidad_id' => '15',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zumpango',
            'entidad_id' => '15',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautitlán Izcalli',
            'entidad_id' => '15',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle de Chalco Solidaridad',
            'entidad_id' => '15',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Luvianos',
            'entidad_id' => '15',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Rincón',
            'entidad_id' => '15',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonanitla',
            'entidad_id' => '15',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuitzio',
            'entidad_id' => '16',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aguililla',
            'entidad_id' => '16',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álvaro Obregón',
            'entidad_id' => '16',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angamacutiro',
            'entidad_id' => '16',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angangueo',
            'entidad_id' => '16',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apatzingán',
            'entidad_id' => '16',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aporo',
            'entidad_id' => '16',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquila',
            'entidad_id' => '16',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ario',
            'entidad_id' => '16',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arteaga',
            'entidad_id' => '16',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Briseñas',
            'entidad_id' => '16',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buenavista',
            'entidad_id' => '16',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carácuaro',
            'entidad_id' => '16',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuayana',
            'entidad_id' => '16',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coalcomán de Vázquez Pallares',
            'entidad_id' => '16',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coeneo',
            'entidad_id' => '16',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Contepec',
            'entidad_id' => '16',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Copándaro',
            'entidad_id' => '16',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cotija',
            'entidad_id' => '16',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuitzeo',
            'entidad_id' => '16',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charapan',
            'entidad_id' => '16',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charo',
            'entidad_id' => '16',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chavinda',
            'entidad_id' => '16',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cherán',
            'entidad_id' => '16',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilchota',
            'entidad_id' => '16',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinicuila',
            'entidad_id' => '16',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chucándiro',
            'entidad_id' => '16',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Churintzio',
            'entidad_id' => '16',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Churumuco',
            'entidad_id' => '16',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ecuandureo',
            'entidad_id' => '16',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epitacio Huerta',
            'entidad_id' => '16',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Erongarícuaro',
            'entidad_id' => '16',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gabriel Zamora',
            'entidad_id' => '16',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'entidad_id' => '16',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Huacana',
            'entidad_id' => '16',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huandacareo',
            'entidad_id' => '16',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huaniqueo',
            'entidad_id' => '16',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huetamo',
            'entidad_id' => '16',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huiramba',
            'entidad_id' => '16',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Indaparapeo',
            'entidad_id' => '16',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Irimbo',
            'entidad_id' => '16',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán',
            'entidad_id' => '16',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jacona',
            'entidad_id' => '16',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'entidad_id' => '16',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiquilpan',
            'entidad_id' => '16',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'entidad_id' => '16',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jungapeo',
            'entidad_id' => '16',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagunillas',
            'entidad_id' => '16',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Madero',
            'entidad_id' => '16',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maravatío',
            'entidad_id' => '16',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marcos Castellanos',
            'entidad_id' => '16',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'entidad_id' => '16',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelia',
            'entidad_id' => '16',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'entidad_id' => '16',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Múgica',
            'entidad_id' => '16',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nahuatzen',
            'entidad_id' => '16',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nocupétaro',
            'entidad_id' => '16',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Parangaricutiro',
            'entidad_id' => '16',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Urecho',
            'entidad_id' => '16',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Numarán',
            'entidad_id' => '16',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '16',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pajacuarán',
            'entidad_id' => '16',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panindícuaro',
            'entidad_id' => '16',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parácuaro',
            'entidad_id' => '16',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paracho',
            'entidad_id' => '16',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pátzcuaro',
            'entidad_id' => '16',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Penjamillo',
            'entidad_id' => '16',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peribán',
            'entidad_id' => '16',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Piedad',
            'entidad_id' => '16',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Purépero',
            'entidad_id' => '16',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puruándiro',
            'entidad_id' => '16',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Queréndaro',
            'entidad_id' => '16',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quiroga',
            'entidad_id' => '16',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cojumatlán de Régules',
            'entidad_id' => '16',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes',
            'entidad_id' => '16',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sahuayo',
            'entidad_id' => '16',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas',
            'entidad_id' => '16',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Maya',
            'entidad_id' => '16',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvador Escalante',
            'entidad_id' => '16',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Senguio',
            'entidad_id' => '16',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Susupuato',
            'entidad_id' => '16',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tacámbaro',
            'entidad_id' => '16',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancítaro',
            'entidad_id' => '16',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tangamandapio',
            'entidad_id' => '16',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tangancícuaro',
            'entidad_id' => '16',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanhuato',
            'entidad_id' => '16',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taretan',
            'entidad_id' => '16',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tarímbaro',
            'entidad_id' => '16',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepalcatepec',
            'entidad_id' => '16',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tingambato',
            'entidad_id' => '16',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tingüindín',
            'entidad_id' => '16',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tiquicheo de Nicolás Romero',
            'entidad_id' => '16',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalpujahua',
            'entidad_id' => '16',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlazazalca',
            'entidad_id' => '16',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tocumbo',
            'entidad_id' => '16',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tumbiscatío',
            'entidad_id' => '16',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Turicato',
            'entidad_id' => '16',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'entidad_id' => '16',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzantla',
            'entidad_id' => '16',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzintzuntzan',
            'entidad_id' => '16',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzitzio',
            'entidad_id' => '16',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uruapan',
            'entidad_id' => '16',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'entidad_id' => '16',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villamar',
            'entidad_id' => '16',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vista Hermosa',
            'entidad_id' => '16',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yurécuaro',
            'entidad_id' => '16',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapu',
            'entidad_id' => '16',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zamora',
            'entidad_id' => '16',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zináparo',
            'entidad_id' => '16',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinapécuaro',
            'entidad_id' => '16',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ziracuaretiro',
            'entidad_id' => '16',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zitácuaro',
            'entidad_id' => '16',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Sixto Verduzco',
            'entidad_id' => '16',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amacuzac',
            'entidad_id' => '17',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlatlahucan',
            'entidad_id' => '17',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axochiapan',
            'entidad_id' => '17',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayala',
            'entidad_id' => '17',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatlán del Río',
            'entidad_id' => '17',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautla',
            'entidad_id' => '17',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuernavaca',
            'entidad_id' => '17',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'entidad_id' => '17',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzilac',
            'entidad_id' => '17',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jantetelco',
            'entidad_id' => '17',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiutepec',
            'entidad_id' => '17',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jojutla',
            'entidad_id' => '17',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonacatepec',
            'entidad_id' => '17',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatepec',
            'entidad_id' => '17',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miacatlán',
            'entidad_id' => '17',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocuituco',
            'entidad_id' => '17',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puente de Ixtla',
            'entidad_id' => '17',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temixco',
            'entidad_id' => '17',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepalcingo',
            'entidad_id' => '17',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepoztlán',
            'entidad_id' => '17',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetecala',
            'entidad_id' => '17',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetela del Volcán',
            'entidad_id' => '17',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnepantla',
            'entidad_id' => '17',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltizapán de Zapata',
            'entidad_id' => '17',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaquiltenango',
            'entidad_id' => '17',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlayacapan',
            'entidad_id' => '17',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolapan',
            'entidad_id' => '17',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitepec',
            'entidad_id' => '17',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yautepec',
            'entidad_id' => '17',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yecapixtla',
            'entidad_id' => '17',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatepec',
            'entidad_id' => '17',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan de Amilpas',
            'entidad_id' => '17',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temoac',
            'entidad_id' => '17',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acaponeta',
            'entidad_id' => '18',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacatlán',
            'entidad_id' => '18',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatlán de Cañas',
            'entidad_id' => '18',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Compostela',
            'entidad_id' => '18',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huajicori',
            'entidad_id' => '18',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán del Río',
            'entidad_id' => '18',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jala',
            'entidad_id' => '18',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalisco',
            'entidad_id' => '18',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Del Nayar',
            'entidad_id' => '18',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosamorada',
            'entidad_id' => '18',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ruíz',
            'entidad_id' => '18',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Blas',
            'entidad_id' => '18',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Lagunillas',
            'entidad_id' => '18',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Oro',
            'entidad_id' => '18',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixcuintla',
            'entidad_id' => '18',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecuala',
            'entidad_id' => '18',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepic',
            'entidad_id' => '18',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'entidad_id' => '18',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Yesca',
            'entidad_id' => '18',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bahía de Banderas',
            'entidad_id' => '18',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'entidad_id' => '19',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agualeguas',
            'entidad_id' => '19',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Aldamas',
            'entidad_id' => '19',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Allende',
            'entidad_id' => '19',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Anáhuac',
            'entidad_id' => '19',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apodaca',
            'entidad_id' => '19',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aramberri',
            'entidad_id' => '19',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bustamante',
            'entidad_id' => '19',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cadereyta Jiménez',
            'entidad_id' => '19',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Carmen',
            'entidad_id' => '19',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerralvo',
            'entidad_id' => '19',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciénega de Flores',
            'entidad_id' => '19',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'China',
            'entidad_id' => '19',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Arroyo',
            'entidad_id' => '19',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor Coss',
            'entidad_id' => '19',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Doctor González',
            'entidad_id' => '19',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Galeana',
            'entidad_id' => '19',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'García',
            'entidad_id' => '19',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Garza García',
            'entidad_id' => '19',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Bravo',
            'entidad_id' => '19',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Escobedo',
            'entidad_id' => '19',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Terán',
            'entidad_id' => '19',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Treviño',
            'entidad_id' => '19',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Zaragoza',
            'entidad_id' => '19',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Zuazua',
            'entidad_id' => '19',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'entidad_id' => '19',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Herreras',
            'entidad_id' => '19',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Higueras',
            'entidad_id' => '19',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hualahuises',
            'entidad_id' => '19',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Iturbide',
            'entidad_id' => '19',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juárez',
            'entidad_id' => '19',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lampazos de Naranjo',
            'entidad_id' => '19',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Linares',
            'entidad_id' => '19',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Marín',
            'entidad_id' => '19',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'entidad_id' => '19',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mier y Noriega',
            'entidad_id' => '19',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mina',
            'entidad_id' => '19',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Montemorelos',
            'entidad_id' => '19',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monterrey',
            'entidad_id' => '19',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Parás',
            'entidad_id' => '19',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pesquería',
            'entidad_id' => '19',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Ramones',
            'entidad_id' => '19',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayones',
            'entidad_id' => '19',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sabinas Hidalgo',
            'entidad_id' => '19',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salinas Victoria',
            'entidad_id' => '19',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás de los Garza',
            'entidad_id' => '19',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'entidad_id' => '19',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'entidad_id' => '19',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago',
            'entidad_id' => '19',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vallecillo',
            'entidad_id' => '19',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villaldama',
            'entidad_id' => '19',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abejones',
            'entidad_id' => '20',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán de Pérez Figueroa',
            'entidad_id' => '20',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Cacalotepec',
            'entidad_id' => '20',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Cuyotepeji',
            'entidad_id' => '20',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Ixtaltepec',
            'entidad_id' => '20',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Nochixtlán',
            'entidad_id' => '20',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Ocotlán',
            'entidad_id' => '20',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Asunción Tlacolulita',
            'entidad_id' => '20',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotzintepec',
            'entidad_id' => '20',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Barrio de la Soledad',
            'entidad_id' => '20',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calihualá',
            'entidad_id' => '20',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Candelaria Loxicha',
            'entidad_id' => '20',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciénega de Zimatlán',
            'entidad_id' => '20',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Ixtepec',
            'entidad_id' => '20',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatecas Altas',
            'entidad_id' => '20',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coicoyán de las Flores',
            'entidad_id' => '20',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Compañía',
            'entidad_id' => '20',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción Buenavista',
            'entidad_id' => '20',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción Pápalo',
            'entidad_id' => '20',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Constancia del Rosario',
            'entidad_id' => '20',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosolapa',
            'entidad_id' => '20',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosoltepec',
            'entidad_id' => '20',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuilápam de Guerrero',
            'entidad_id' => '20',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuyamecalco Villa de Zaragoza',
            'entidad_id' => '20',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chahuites',
            'entidad_id' => '20',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalcatongo de Hidalgo',
            'entidad_id' => '20',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiquihuitlán de Benito Juárez',
            'entidad_id' => '20',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Ejutla de Crespo',
            'entidad_id' => '20',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán de Flores Magón',
            'entidad_id' => '20',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Espinal',
            'entidad_id' => '20',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazulápam del Espíritu Santo',
            'entidad_id' => '20',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fresnillo de Trujano',
            'entidad_id' => '20',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Etla',
            'entidad_id' => '20',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe de Ramírez',
            'entidad_id' => '20',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guelatao de Juárez',
            'entidad_id' => '20',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guevea de Humboldt',
            'entidad_id' => '20',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mesones Hidalgo',
            'entidad_id' => '20',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'entidad_id' => '20',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Huajuapan de León',
            'entidad_id' => '20',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautepec',
            'entidad_id' => '20',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huautla de Jiménez',
            'entidad_id' => '20',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtlán de Juárez',
            'entidad_id' => '20',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Juchitán de Zaragoza',
            'entidad_id' => '20',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loma Bonita',
            'entidad_id' => '20',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Apasco',
            'entidad_id' => '20',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Jaltepec',
            'entidad_id' => '20',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Magdalena Jicotlán',
            'entidad_id' => '20',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Mixtepec',
            'entidad_id' => '20',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Ocotlán',
            'entidad_id' => '20',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Peñasco',
            'entidad_id' => '20',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Teitipac',
            'entidad_id' => '20',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Tequisistlán',
            'entidad_id' => '20',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Tlacotepec',
            'entidad_id' => '20',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Zahuatlán',
            'entidad_id' => '20',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mariscala de Juárez',
            'entidad_id' => '20',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mártires de Tacubaya',
            'entidad_id' => '20',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matías Romero Avendaño',
            'entidad_id' => '20',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatlán Villa de Flores',
            'entidad_id' => '20',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miahuatlán de Porfirio Díaz',
            'entidad_id' => '20',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixistlán de la Reforma',
            'entidad_id' => '20',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monjas',
            'entidad_id' => '20',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Natividad',
            'entidad_id' => '20',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nazareno Etla',
            'entidad_id' => '20',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nejapa de Madero',
            'entidad_id' => '20',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixpantepec Nieves',
            'entidad_id' => '20',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Niltepec',
            'entidad_id' => '20',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oaxaca de Juárez',
            'entidad_id' => '20',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotlán de Morelos',
            'entidad_id' => '20',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Pe',
            'entidad_id' => '20',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinotepa de Don Luis',
            'entidad_id' => '20',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pluma Hidalgo',
            'entidad_id' => '20',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Progreso',
            'entidad_id' => '20',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Putla Villa de Guerrero',
            'entidad_id' => '20',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Quioquitani',
            'entidad_id' => '20',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reforma de Pineda',
            'entidad_id' => '20',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Reforma',
            'entidad_id' => '20',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reyes Etla',
            'entidad_id' => '20',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rojas de Cuauhtémoc',
            'entidad_id' => '20',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salina Cruz',
            'entidad_id' => '20',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Amatengo',
            'entidad_id' => '20',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Atenango',
            'entidad_id' => '20',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Chayuco',
            'entidad_id' => '20',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín de las Juntas',
            'entidad_id' => '20',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Etla',
            'entidad_id' => '20',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Loxicha',
            'entidad_id' => '20',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Tlacotepec',
            'entidad_id' => '20',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Agustín Yatareni',
            'entidad_id' => '20',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Cabecera Nueva',
            'entidad_id' => '20',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Dinicuiti',
            'entidad_id' => '20',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Huaxpaltepec',
            'entidad_id' => '20',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Huayápam',
            'entidad_id' => '20',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Ixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Lagunas',
            'entidad_id' => '20',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Nuxiño',
            'entidad_id' => '20',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Paxtlán',
            'entidad_id' => '20',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Sinaxtla',
            'entidad_id' => '20',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Solaga',
            'entidad_id' => '20',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Teotilálpam',
            'entidad_id' => '20',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tepetlapa',
            'entidad_id' => '20',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Yaá',
            'entidad_id' => '20',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Zabache',
            'entidad_id' => '20',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Zautla',
            'entidad_id' => '20',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino Castillo Velasco',
            'entidad_id' => '20',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino el Alto',
            'entidad_id' => '20',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonino Monte Verde',
            'entidad_id' => '20',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Acutla',
            'entidad_id' => '20',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio de la Cal',
            'entidad_id' => '20',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Huitepec',
            'entidad_id' => '20',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Nanahuatípam',
            'entidad_id' => '20',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Sinicahua',
            'entidad_id' => '20',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Tepetlapa',
            'entidad_id' => '20',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Chichicápam',
            'entidad_id' => '20',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Loxicha',
            'entidad_id' => '20',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Baltazar Yatzachi el Bajo',
            'entidad_id' => '20',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Coyotepec',
            'entidad_id' => '20',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Ayautla',
            'entidad_id' => '20',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Loxicha',
            'entidad_id' => '20',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Quialana',
            'entidad_id' => '20',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Yucuañe',
            'entidad_id' => '20',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolomé Zoogocho',
            'entidad_id' => '20',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Soyaltepec',
            'entidad_id' => '20',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bartolo Yautepec',
            'entidad_id' => '20',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Bernardo Mixtepec',
            'entidad_id' => '20',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Blas Atempa',
            'entidad_id' => '20',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Carlos Yautepec',
            'entidad_id' => '20',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Amatlán',
            'entidad_id' => '20',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Amoltepec',
            'entidad_id' => '20',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Lachirioag',
            'entidad_id' => '20',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Cristóbal Suchixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio del Mar',
            'entidad_id' => '20',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio Ocotepec',
            'entidad_id' => '20',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Dionisio Ocotlán',
            'entidad_id' => '20',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Esteban Atatlahuca',
            'entidad_id' => '20',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Jalapa de Díaz',
            'entidad_id' => '20',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Tejalápam',
            'entidad_id' => '20',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Usila',
            'entidad_id' => '20',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Cahuacuá',
            'entidad_id' => '20',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Cajonos',
            'entidad_id' => '20',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Chapulapa',
            'entidad_id' => '20',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Chindúa',
            'entidad_id' => '20',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco del Mar',
            'entidad_id' => '20',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Huehuetlán',
            'entidad_id' => '20',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Ixhuatán',
            'entidad_id' => '20',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Jaltepetongo',
            'entidad_id' => '20',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Lachigoló',
            'entidad_id' => '20',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Logueche',
            'entidad_id' => '20',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Nuxaño',
            'entidad_id' => '20',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Ozolotepec',
            'entidad_id' => '20',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Sola',
            'entidad_id' => '20',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Telixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Teopan',
            'entidad_id' => '20',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Tlapancingo',
            'entidad_id' => '20',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel Mixtepec',
            'entidad_id' => '20',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Amatlán',
            'entidad_id' => '20',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Sola',
            'entidad_id' => '20',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ildefonso Villa Alta',
            'entidad_id' => '20',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jacinto Amilpas',
            'entidad_id' => '20',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jacinto Tlacotepec',
            'entidad_id' => '20',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Coatlán',
            'entidad_id' => '20',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Silacayoapilla',
            'entidad_id' => '20',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Sosola',
            'entidad_id' => '20',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Taviche',
            'entidad_id' => '20',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tecóatl',
            'entidad_id' => '20',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jorge Nuchita',
            'entidad_id' => '20',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Ayuquila',
            'entidad_id' => '20',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Chiltepec',
            'entidad_id' => '20',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José del Peñasco',
            'entidad_id' => '20',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Estancia Grande',
            'entidad_id' => '20',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Independencia',
            'entidad_id' => '20',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Lachiguiri',
            'entidad_id' => '20',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Tenango',
            'entidad_id' => '20',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Achiutla',
            'entidad_id' => '20',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atepec',
            'entidad_id' => '20',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ánimas Trujano',
            'entidad_id' => '20',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Atatlahuca',
            'entidad_id' => '20',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Coixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Cuicatlán',
            'entidad_id' => '20',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Guelache',
            'entidad_id' => '20',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Jayacatlán',
            'entidad_id' => '20',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Lo de Soto',
            'entidad_id' => '20',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Suchitepec',
            'entidad_id' => '20',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tlacoatzintepec',
            'entidad_id' => '20',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tlachichilco',
            'entidad_id' => '20',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Tuxtepec',
            'entidad_id' => '20',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cacahuatepec',
            'entidad_id' => '20',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cieneguilla',
            'entidad_id' => '20',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Coatzóspam',
            'entidad_id' => '20',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Colorado',
            'entidad_id' => '20',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Comaltepec',
            'entidad_id' => '20',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Cotzocón',
            'entidad_id' => '20',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Chicomezúchil',
            'entidad_id' => '20',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Chilateca',
            'entidad_id' => '20',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Estado',
            'entidad_id' => '20',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'entidad_id' => '20',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Diuxi',
            'entidad_id' => '20',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Evangelista Analco',
            'entidad_id' => '20',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Guelavía',
            'entidad_id' => '20',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Guichicovi',
            'entidad_id' => '20',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ihualtepec',
            'entidad_id' => '20',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Juquila Mixes',
            'entidad_id' => '20',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Juquila Vijanos',
            'entidad_id' => '20',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lachao',
            'entidad_id' => '20',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lachigalla',
            'entidad_id' => '20',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lajarcia',
            'entidad_id' => '20',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Lalana',
            'entidad_id' => '20',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan de los Cués',
            'entidad_id' => '20',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mazatlán',
            'entidad_id' => '20',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mixtepec',
            'entidad_id' => '20',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Mixtepec',
            'entidad_id' => '20',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ñumí',
            'entidad_id' => '20',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Ozolotepec',
            'entidad_id' => '20',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Petlapa',
            'entidad_id' => '20',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Quiahije',
            'entidad_id' => '20',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Quiotepec',
            'entidad_id' => '20',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Sayultepec',
            'entidad_id' => '20',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tabaá',
            'entidad_id' => '20',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tamazola',
            'entidad_id' => '20',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teita',
            'entidad_id' => '20',
            'number' =>  '218',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teitipac',
            'entidad_id' => '20',
            'number' =>  '219',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Tepeuxila',
            'entidad_id' => '20',
            'number' =>  '220',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Teposcolula',
            'entidad_id' => '20',
            'number' =>  '221',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yaeé',
            'entidad_id' => '20',
            'number' =>  '222',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yatzona',
            'entidad_id' => '20',
            'number' =>  '223',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Yucuita',
            'entidad_id' => '20',
            'number' =>  '224',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo',
            'entidad_id' => '20',
            'number' =>  '225',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Albarradas',
            'entidad_id' => '20',
            'number' =>  '226',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Cacaotepec',
            'entidad_id' => '20',
            'number' =>  '227',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Cuaunecuiltitla',
            'entidad_id' => '20',
            'number' =>  '228',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Texmelúcan',
            'entidad_id' => '20',
            'number' =>  '229',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Victoria',
            'entidad_id' => '20',
            'number' =>  '230',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Camotlán',
            'entidad_id' => '20',
            'number' =>  '231',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Ojitlán',
            'entidad_id' => '20',
            'number' =>  '232',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Quiaviní',
            'entidad_id' => '20',
            'number' =>  '233',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Zoquiápam',
            'entidad_id' => '20',
            'number' =>  '234',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Amatlán',
            'entidad_id' => '20',
            'number' =>  '235',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcial Ozolotepec',
            'entidad_id' => '20',
            'number' =>  '236',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Marcos Arteaga',
            'entidad_id' => '20',
            'number' =>  '237',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín de los Cansecos',
            'entidad_id' => '20',
            'number' =>  '238',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Huamelúlpam',
            'entidad_id' => '20',
            'number' =>  '239',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Itunyoso',
            'entidad_id' => '20',
            'number' =>  '240',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Lachilá',
            'entidad_id' => '20',
            'number' =>  '241',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Peras',
            'entidad_id' => '20',
            'number' =>  '242',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Tilcajete',
            'entidad_id' => '20',
            'number' =>  '243',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Toxpalan',
            'entidad_id' => '20',
            'number' =>  '244',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Zacatepec',
            'entidad_id' => '20',
            'number' =>  '245',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Cajonos',
            'entidad_id' => '20',
            'number' =>  '246',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Capulálpam de Méndez',
            'entidad_id' => '20',
            'number' =>  '247',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo del Mar',
            'entidad_id' => '20',
            'number' =>  '248',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Yoloxochitlán',
            'entidad_id' => '20',
            'number' =>  '249',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Etlatongo',
            'entidad_id' => '20',
            'number' =>  '250',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Nejápam',
            'entidad_id' => '20',
            'number' =>  '251',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Peñasco',
            'entidad_id' => '20',
            'number' =>  '252',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Piñas',
            'entidad_id' => '20',
            'number' =>  '253',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Río Hondo',
            'entidad_id' => '20',
            'number' =>  '254',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Sindihui',
            'entidad_id' => '20',
            'number' =>  '255',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Tlapiltepec',
            'entidad_id' => '20',
            'number' =>  '256',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Melchor Betaza',
            'entidad_id' => '20',
            'number' =>  '257',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Achiutla',
            'entidad_id' => '20',
            'number' =>  '258',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ahuehuetitlán',
            'entidad_id' => '20',
            'number' =>  '259',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Aloápam',
            'entidad_id' => '20',
            'number' =>  '260',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Amatitlán',
            'entidad_id' => '20',
            'number' =>  '261',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Amatlán',
            'entidad_id' => '20',
            'number' =>  '262',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Coatlán',
            'entidad_id' => '20',
            'number' =>  '263',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Chicahua',
            'entidad_id' => '20',
            'number' =>  '264',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Chimalapa',
            'entidad_id' => '20',
            'number' =>  '265',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel del Puerto',
            'entidad_id' => '20',
            'number' =>  '266',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel del Río',
            'entidad_id' => '20',
            'number' =>  '267',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ejutla',
            'entidad_id' => '20',
            'number' =>  '268',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel el Grande',
            'entidad_id' => '20',
            'number' =>  '269',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Huautla',
            'entidad_id' => '20',
            'number' =>  '270',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Mixtepec',
            'entidad_id' => '20',
            'number' =>  '271',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Panixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '272',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Peras',
            'entidad_id' => '20',
            'number' =>  '273',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Piedras',
            'entidad_id' => '20',
            'number' =>  '274',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Quetzaltepec',
            'entidad_id' => '20',
            'number' =>  '275',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Santa Flor',
            'entidad_id' => '20',
            'number' =>  '276',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Sola de Vega',
            'entidad_id' => '20',
            'number' =>  '277',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Soyaltepec',
            'entidad_id' => '20',
            'number' =>  '278',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Suchixtepec',
            'entidad_id' => '20',
            'number' =>  '279',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Talea de Castro',
            'entidad_id' => '20',
            'number' =>  '280',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tecomatlán',
            'entidad_id' => '20',
            'number' =>  '281',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tenango',
            'entidad_id' => '20',
            'number' =>  '282',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tequixtepec',
            'entidad_id' => '20',
            'number' =>  '283',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tilquiápam',
            'entidad_id' => '20',
            'number' =>  '284',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tlacamama',
            'entidad_id' => '20',
            'number' =>  '285',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tlacotepec',
            'entidad_id' => '20',
            'number' =>  '286',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Tulancingo',
            'entidad_id' => '20',
            'number' =>  '287',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Yotao',
            'entidad_id' => '20',
            'number' =>  '288',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás',
            'entidad_id' => '20',
            'number' =>  '289',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Hidalgo',
            'entidad_id' => '20',
            'number' =>  '290',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Coatlán',
            'entidad_id' => '20',
            'number' =>  '291',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Cuatro Venados',
            'entidad_id' => '20',
            'number' =>  '292',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Etla',
            'entidad_id' => '20',
            'number' =>  '293',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Huitzo',
            'entidad_id' => '20',
            'number' =>  '294',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Huixtepec',
            'entidad_id' => '20',
            'number' =>  '295',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Macuiltianguis',
            'entidad_id' => '20',
            'number' =>  '296',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Tijaltepec',
            'entidad_id' => '20',
            'number' =>  '297',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Villa de Mitla',
            'entidad_id' => '20',
            'number' =>  '298',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Yaganiza',
            'entidad_id' => '20',
            'number' =>  '299',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Amuzgos',
            'entidad_id' => '20',
            'number' =>  '300',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Apóstol',
            'entidad_id' => '20',
            'number' =>  '301',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Atoyac',
            'entidad_id' => '20',
            'number' =>  '302',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Cajonos',
            'entidad_id' => '20',
            'number' =>  '303',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Coxcaltepec Cántaros',
            'entidad_id' => '20',
            'number' =>  '304',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Comitancillo',
            'entidad_id' => '20',
            'number' =>  '305',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro el Alto',
            'entidad_id' => '20',
            'number' =>  '306',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Huamelula',
            'entidad_id' => '20',
            'number' =>  '307',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Huilotepec',
            'entidad_id' => '20',
            'number' =>  '308',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ixcatlán',
            'entidad_id' => '20',
            'number' =>  '309',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '310',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jaltepetongo',
            'entidad_id' => '20',
            'number' =>  '311',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jicayán',
            'entidad_id' => '20',
            'number' =>  '312',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Jocotipac',
            'entidad_id' => '20',
            'number' =>  '313',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Juchatengo',
            'entidad_id' => '20',
            'number' =>  '314',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir',
            'entidad_id' => '20',
            'number' =>  '315',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir Quiechapa',
            'entidad_id' => '20',
            'number' =>  '316',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mártir Yucuxaco',
            'entidad_id' => '20',
            'number' =>  '317',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mixtepec',
            'entidad_id' => '20',
            'number' =>  '318',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Mixtepec',
            'entidad_id' => '20',
            'number' =>  '319',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Molinos',
            'entidad_id' => '20',
            'number' =>  '320',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Nopala',
            'entidad_id' => '20',
            'number' =>  '321',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ocopetatillo',
            'entidad_id' => '20',
            'number' =>  '322',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Ocotepec',
            'entidad_id' => '20',
            'number' =>  '323',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Pochutla',
            'entidad_id' => '20',
            'number' =>  '324',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Quiatoni',
            'entidad_id' => '20',
            'number' =>  '325',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Sochiápam',
            'entidad_id' => '20',
            'number' =>  '326',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tapanatepec',
            'entidad_id' => '20',
            'number' =>  '327',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Taviche',
            'entidad_id' => '20',
            'number' =>  '328',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Teozacoalco',
            'entidad_id' => '20',
            'number' =>  '329',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Teutila',
            'entidad_id' => '20',
            'number' =>  '330',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Tidaá',
            'entidad_id' => '20',
            'number' =>  '331',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Topiltepec',
            'entidad_id' => '20',
            'number' =>  '332',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Totolápam',
            'entidad_id' => '20',
            'number' =>  '333',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tututepec de Melchor Ocampo',
            'entidad_id' => '20',
            'number' =>  '334',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yaneri',
            'entidad_id' => '20',
            'number' =>  '335',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yólox',
            'entidad_id' => '20',
            'number' =>  '336',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Ayutla',
            'entidad_id' => '20',
            'number' =>  '337',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Etla',
            'entidad_id' => '20',
            'number' =>  '338',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Teposcolula',
            'entidad_id' => '20',
            'number' =>  '339',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro y San Pablo Tequixtepec',
            'entidad_id' => '20',
            'number' =>  '340',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yucunama',
            'entidad_id' => '20',
            'number' =>  '341',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Raymundo Jalpan',
            'entidad_id' => '20',
            'number' =>  '342',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Abasolo',
            'entidad_id' => '20',
            'number' =>  '343',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Coatlán',
            'entidad_id' => '20',
            'number' =>  '344',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Ixcapa',
            'entidad_id' => '20',
            'number' =>  '345',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Nicananduta',
            'entidad_id' => '20',
            'number' =>  '346',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Río Hondo',
            'entidad_id' => '20',
            'number' =>  '347',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tecomaxtlahuaca',
            'entidad_id' => '20',
            'number' =>  '348',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Teitipac',
            'entidad_id' => '20',
            'number' =>  '349',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tutla',
            'entidad_id' => '20',
            'number' =>  '350',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón Almolongas',
            'entidad_id' => '20',
            'number' =>  '351',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Simón Zahuatlán',
            'entidad_id' => '20',
            'number' =>  '352',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana',
            'entidad_id' => '20',
            'number' =>  '353',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Ateixtlahuaca',
            'entidad_id' => '20',
            'number' =>  '354',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Cuauhtémoc',
            'entidad_id' => '20',
            'number' =>  '355',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana del Valle',
            'entidad_id' => '20',
            'number' =>  '356',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Tavela',
            'entidad_id' => '20',
            'number' =>  '357',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Tlapacoyan',
            'entidad_id' => '20',
            'number' =>  '358',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Yareni',
            'entidad_id' => '20',
            'number' =>  '359',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Zegache',
            'entidad_id' => '20',
            'number' =>  '360',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catalina Quierí',
            'entidad_id' => '20',
            'number' =>  '361',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Cuixtla',
            'entidad_id' => '20',
            'number' =>  '362',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ixtepeji',
            'entidad_id' => '20',
            'number' =>  '363',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Juquila',
            'entidad_id' => '20',
            'number' =>  '364',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Lachatao',
            'entidad_id' => '20',
            'number' =>  '365',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Loxicha',
            'entidad_id' => '20',
            'number' =>  '366',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Mechoacán',
            'entidad_id' => '20',
            'number' =>  '367',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Minas',
            'entidad_id' => '20',
            'number' =>  '368',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Quiané',
            'entidad_id' => '20',
            'number' =>  '369',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Tayata',
            'entidad_id' => '20',
            'number' =>  '370',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ticuá',
            'entidad_id' => '20',
            'number' =>  '371',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Yosonotú',
            'entidad_id' => '20',
            'number' =>  '372',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Zapoquila',
            'entidad_id' => '20',
            'number' =>  '373',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Acatepec',
            'entidad_id' => '20',
            'number' =>  '374',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Amilpas',
            'entidad_id' => '20',
            'number' =>  '375',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz de Bravo',
            'entidad_id' => '20',
            'number' =>  '376',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Itundujia',
            'entidad_id' => '20',
            'number' =>  '377',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Mixtepec',
            'entidad_id' => '20',
            'number' =>  '378',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Nundaco',
            'entidad_id' => '20',
            'number' =>  '379',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Papalutla',
            'entidad_id' => '20',
            'number' =>  '380',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tacache de Mina',
            'entidad_id' => '20',
            'number' =>  '381',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tacahua',
            'entidad_id' => '20',
            'number' =>  '382',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tayata',
            'entidad_id' => '20',
            'number' =>  '383',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Xitla',
            'entidad_id' => '20',
            'number' =>  '384',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Xoxocotlán',
            'entidad_id' => '20',
            'number' =>  '385',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Zenzontepec',
            'entidad_id' => '20',
            'number' =>  '386',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Gertrudis',
            'entidad_id' => '20',
            'number' =>  '387',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés del Monte',
            'entidad_id' => '20',
            'number' =>  '388',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés Yatzeche',
            'entidad_id' => '20',
            'number' =>  '389',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía del Camino',
            'entidad_id' => '20',
            'number' =>  '390',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Miahuatlán',
            'entidad_id' => '20',
            'number' =>  '391',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Monteverde',
            'entidad_id' => '20',
            'number' =>  '392',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Lucía Ocotlán',
            'entidad_id' => '20',
            'number' =>  '393',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Alotepec',
            'entidad_id' => '20',
            'number' =>  '394',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Apazco',
            'entidad_id' => '20',
            'number' =>  '395',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María la Asunción',
            'entidad_id' => '20',
            'number' =>  '396',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Ciudad de Tlaxiaco',
            'entidad_id' => '20',
            'number' =>  '397',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayoquezco de Aldama',
            'entidad_id' => '20',
            'number' =>  '398',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Atzompa',
            'entidad_id' => '20',
            'number' =>  '399',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Camotlán',
            'entidad_id' => '20',
            'number' =>  '400',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Colotepec',
            'entidad_id' => '20',
            'number' =>  '401',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Cortijo',
            'entidad_id' => '20',
            'number' =>  '402',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Coyotepec',
            'entidad_id' => '20',
            'number' =>  '403',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chachoápam',
            'entidad_id' => '20',
            'number' =>  '404',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Chilapa de Díaz',
            'entidad_id' => '20',
            'number' =>  '405',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chilchotla',
            'entidad_id' => '20',
            'number' =>  '406',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Chimalapa',
            'entidad_id' => '20',
            'number' =>  '407',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Rosario',
            'entidad_id' => '20',
            'number' =>  '408',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Tule',
            'entidad_id' => '20',
            'number' =>  '409',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ecatepec',
            'entidad_id' => '20',
            'number' =>  '410',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Guelacé',
            'entidad_id' => '20',
            'number' =>  '411',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Guienagati',
            'entidad_id' => '20',
            'number' =>  '412',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Huatulco',
            'entidad_id' => '20',
            'number' =>  '413',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Huazolotitlán',
            'entidad_id' => '20',
            'number' =>  '414',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ipalapa',
            'entidad_id' => '20',
            'number' =>  '415',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ixcatlán',
            'entidad_id' => '20',
            'number' =>  '416',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jacatepec',
            'entidad_id' => '20',
            'number' =>  '417',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jalapa del Marqués',
            'entidad_id' => '20',
            'number' =>  '418',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Jaltianguis',
            'entidad_id' => '20',
            'number' =>  '419',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Lachixío',
            'entidad_id' => '20',
            'number' =>  '420',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Mixtequilla',
            'entidad_id' => '20',
            'number' =>  '421',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Nativitas',
            'entidad_id' => '20',
            'number' =>  '422',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Nduayaco',
            'entidad_id' => '20',
            'number' =>  '423',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Ozolotepec',
            'entidad_id' => '20',
            'number' =>  '424',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Pápalo',
            'entidad_id' => '20',
            'number' =>  '425',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Peñoles',
            'entidad_id' => '20',
            'number' =>  '426',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Petapa',
            'entidad_id' => '20',
            'number' =>  '427',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Quiegolani',
            'entidad_id' => '20',
            'number' =>  '428',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Sola',
            'entidad_id' => '20',
            'number' =>  '429',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tataltepec',
            'entidad_id' => '20',
            'number' =>  '430',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tecomavaca',
            'entidad_id' => '20',
            'number' =>  '431',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Temaxcalapa',
            'entidad_id' => '20',
            'number' =>  '432',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Temaxcaltepec',
            'entidad_id' => '20',
            'number' =>  '433',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Teopoxco',
            'entidad_id' => '20',
            'number' =>  '434',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tepantlali',
            'entidad_id' => '20',
            'number' =>  '435',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Texcatitlán',
            'entidad_id' => '20',
            'number' =>  '436',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tlahuitoltepec',
            'entidad_id' => '20',
            'number' =>  '437',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tlalixtac',
            'entidad_id' => '20',
            'number' =>  '438',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Tonameca',
            'entidad_id' => '20',
            'number' =>  '439',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Totolapilla',
            'entidad_id' => '20',
            'number' =>  '440',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Xadani',
            'entidad_id' => '20',
            'number' =>  '441',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yalina',
            'entidad_id' => '20',
            'number' =>  '442',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yavesía',
            'entidad_id' => '20',
            'number' =>  '443',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yolotepec',
            'entidad_id' => '20',
            'number' =>  '444',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yosoyúa',
            'entidad_id' => '20',
            'number' =>  '445',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Yucuhiti',
            'entidad_id' => '20',
            'number' =>  '446',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zacatepec',
            'entidad_id' => '20',
            'number' =>  '447',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zaniza',
            'entidad_id' => '20',
            'number' =>  '448',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María Zoquitlán',
            'entidad_id' => '20',
            'number' =>  '449',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Amoltepec',
            'entidad_id' => '20',
            'number' =>  '450',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Apoala',
            'entidad_id' => '20',
            'number' =>  '451',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Apóstol',
            'entidad_id' => '20',
            'number' =>  '452',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Astata',
            'entidad_id' => '20',
            'number' =>  '453',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Atitlán',
            'entidad_id' => '20',
            'number' =>  '454',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ayuquililla',
            'entidad_id' => '20',
            'number' =>  '455',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Cacaloxtepec',
            'entidad_id' => '20',
            'number' =>  '456',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Camotlán',
            'entidad_id' => '20',
            'number' =>  '457',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Comaltepec',
            'entidad_id' => '20',
            'number' =>  '458',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Chazumba',
            'entidad_id' => '20',
            'number' =>  '459',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Choápam',
            'entidad_id' => '20',
            'number' =>  '460',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago del Río',
            'entidad_id' => '20',
            'number' =>  '461',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Huajolotitlán',
            'entidad_id' => '20',
            'number' =>  '462',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Huauclilla',
            'entidad_id' => '20',
            'number' =>  '463',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ihuitlán Plumas',
            'entidad_id' => '20',
            'number' =>  '464',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixcuintepec',
            'entidad_id' => '20',
            'number' =>  '465',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Ixtayutla',
            'entidad_id' => '20',
            'number' =>  '466',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Jamiltepec',
            'entidad_id' => '20',
            'number' =>  '467',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Jocotepec',
            'entidad_id' => '20',
            'number' =>  '468',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Juxtlahuaca',
            'entidad_id' => '20',
            'number' =>  '469',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Lachiguiri',
            'entidad_id' => '20',
            'number' =>  '470',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Lalopa',
            'entidad_id' => '20',
            'number' =>  '471',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Laollaga',
            'entidad_id' => '20',
            'number' =>  '472',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Laxopa',
            'entidad_id' => '20',
            'number' =>  '473',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Llano Grande',
            'entidad_id' => '20',
            'number' =>  '474',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Matatlán',
            'entidad_id' => '20',
            'number' =>  '475',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Miltepec',
            'entidad_id' => '20',
            'number' =>  '476',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Minas',
            'entidad_id' => '20',
            'number' =>  '477',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nacaltepec',
            'entidad_id' => '20',
            'number' =>  '478',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nejapilla',
            'entidad_id' => '20',
            'number' =>  '479',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nundiche',
            'entidad_id' => '20',
            'number' =>  '480',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Nuyoó',
            'entidad_id' => '20',
            'number' =>  '481',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Pinotepa Nacional',
            'entidad_id' => '20',
            'number' =>  '482',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Suchilquitongo',
            'entidad_id' => '20',
            'number' =>  '483',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tamazola',
            'entidad_id' => '20',
            'number' =>  '484',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tapextla',
            'entidad_id' => '20',
            'number' =>  '485',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Tejúpam de la Unión',
            'entidad_id' => '20',
            'number' =>  '486',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tenango',
            'entidad_id' => '20',
            'number' =>  '487',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tepetlapa',
            'entidad_id' => '20',
            'number' =>  '488',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tetepec',
            'entidad_id' => '20',
            'number' =>  '489',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Texcalcingo',
            'entidad_id' => '20',
            'number' =>  '490',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Textitlán',
            'entidad_id' => '20',
            'number' =>  '491',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tilantongo',
            'entidad_id' => '20',
            'number' =>  '492',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tillo',
            'entidad_id' => '20',
            'number' =>  '493',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tlazoyaltepec',
            'entidad_id' => '20',
            'number' =>  '494',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Xanica',
            'entidad_id' => '20',
            'number' =>  '495',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Xiacuí',
            'entidad_id' => '20',
            'number' =>  '496',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yaitepec',
            'entidad_id' => '20',
            'number' =>  '497',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yaveo',
            'entidad_id' => '20',
            'number' =>  '498',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yolomécatl',
            'entidad_id' => '20',
            'number' =>  '499',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yosondúa',
            'entidad_id' => '20',
            'number' =>  '500',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Yucuyachi',
            'entidad_id' => '20',
            'number' =>  '501',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Zacatepec',
            'entidad_id' => '20',
            'number' =>  '502',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Zoochila',
            'entidad_id' => '20',
            'number' =>  '503',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Zoquiápam',
            'entidad_id' => '20',
            'number' =>  '504',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ingenio',
            'entidad_id' => '20',
            'number' =>  '505',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Albarradas',
            'entidad_id' => '20',
            'number' =>  '506',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Armenta',
            'entidad_id' => '20',
            'number' =>  '507',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Chihuitán',
            'entidad_id' => '20',
            'number' =>  '508',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo de Morelos',
            'entidad_id' => '20',
            'number' =>  '509',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ixcatlán',
            'entidad_id' => '20',
            'number' =>  '510',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Nuxaá',
            'entidad_id' => '20',
            'number' =>  '511',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Ozolotepec',
            'entidad_id' => '20',
            'number' =>  '512',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Petapa',
            'entidad_id' => '20',
            'number' =>  '513',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Roayaga',
            'entidad_id' => '20',
            'number' =>  '514',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tehuantepec',
            'entidad_id' => '20',
            'number' =>  '515',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Teojomulco',
            'entidad_id' => '20',
            'number' =>  '516',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tepuxtepec',
            'entidad_id' => '20',
            'number' =>  '517',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tlatayápam',
            'entidad_id' => '20',
            'number' =>  '518',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tomaltepec',
            'entidad_id' => '20',
            'number' =>  '519',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tonalá',
            'entidad_id' => '20',
            'number' =>  '520',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Tonaltepec',
            'entidad_id' => '20',
            'number' =>  '521',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Xagacía',
            'entidad_id' => '20',
            'number' =>  '522',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Yanhuitlán',
            'entidad_id' => '20',
            'number' =>  '523',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Yodohino',
            'entidad_id' => '20',
            'number' =>  '524',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo Zanatepec',
            'entidad_id' => '20',
            'number' =>  '525',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Nopala',
            'entidad_id' => '20',
            'number' =>  '526',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Pápalo',
            'entidad_id' => '20',
            'number' =>  '527',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Tepejillo',
            'entidad_id' => '20',
            'number' =>  '528',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santos Reyes Yucuná',
            'entidad_id' => '20',
            'number' =>  '529',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Jalieza',
            'entidad_id' => '20',
            'number' =>  '530',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Mazaltepec',
            'entidad_id' => '20',
            'number' =>  '531',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Ocotepec',
            'entidad_id' => '20',
            'number' =>  '532',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Tamazulapan',
            'entidad_id' => '20',
            'number' =>  '533',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Coatlán',
            'entidad_id' => '20',
            'number' =>  '534',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Lachixío',
            'entidad_id' => '20',
            'number' =>  '535',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Nuñú',
            'entidad_id' => '20',
            'number' =>  '536',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Silacayoápam',
            'entidad_id' => '20',
            'number' =>  '537',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sitio de Xitlapehua',
            'entidad_id' => '20',
            'number' =>  '538',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad Etla',
            'entidad_id' => '20',
            'number' =>  '539',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Tamazulápam del Progreso',
            'entidad_id' => '20',
            'number' =>  '540',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanetze de Zaragoza',
            'entidad_id' => '20',
            'number' =>  '541',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Taniche',
            'entidad_id' => '20',
            'number' =>  '542',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tataltepec de Valdés',
            'entidad_id' => '20',
            'number' =>  '543',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teococuilco de Marcos Pérez',
            'entidad_id' => '20',
            'number' =>  '544',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotitlán de Flores Magón',
            'entidad_id' => '20',
            'number' =>  '545',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotitlán del Valle',
            'entidad_id' => '20',
            'number' =>  '546',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotongo',
            'entidad_id' => '20',
            'number' =>  '547',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepelmeme Villa de Morelos',
            'entidad_id' => '20',
            'number' =>  '548',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Heroica Villa Tezoatlán de Segura y Luna. Cuna de la Independencia de Oaxaca',
            'entidad_id' => '20',
            'number' =>  '549',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tlacochahuaya',
            'entidad_id' => '20',
            'number' =>  '550',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacolula de Matamoros',
            'entidad_id' => '20',
            'number' =>  '551',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec Plumas',
            'entidad_id' => '20',
            'number' =>  '552',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixtac de Cabrera',
            'entidad_id' => '20',
            'number' =>  '553',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totontepec Villa de Morelos',
            'entidad_id' => '20',
            'number' =>  '554',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trinidad Zaachila',
            'entidad_id' => '20',
            'number' =>  '555',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Trinidad Vista Hermosa',
            'entidad_id' => '20',
            'number' =>  '556',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Unión Hidalgo',
            'entidad_id' => '20',
            'number' =>  '557',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valerio Trujano',
            'entidad_id' => '20',
            'number' =>  '558',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Bautista Valle Nacional',
            'entidad_id' => '20',
            'number' =>  '559',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Díaz Ordaz',
            'entidad_id' => '20',
            'number' =>  '560',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxe',
            'entidad_id' => '20',
            'number' =>  '561',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena Yodocono de Porfirio Díaz',
            'entidad_id' => '20',
            'number' =>  '562',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yogana',
            'entidad_id' => '20',
            'number' =>  '563',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yutanduchi de Guerrero',
            'entidad_id' => '20',
            'number' =>  '564',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Zaachila',
            'entidad_id' => '20',
            'number' =>  '565',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Mateo Yucutindoo',
            'entidad_id' => '20',
            'number' =>  '566',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Lagunas',
            'entidad_id' => '20',
            'number' =>  '567',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán Palmas',
            'entidad_id' => '20',
            'number' =>  '568',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés de Zaragoza',
            'entidad_id' => '20',
            'number' =>  '569',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zimatlán de Álvarez',
            'entidad_id' => '20',
            'number' =>  '570',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acajete',
            'entidad_id' => '21',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acateno',
            'entidad_id' => '21',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'entidad_id' => '21',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatzingo',
            'entidad_id' => '21',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acteopan',
            'entidad_id' => '21',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuacatlán',
            'entidad_id' => '21',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuatlán',
            'entidad_id' => '21',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuazotepec',
            'entidad_id' => '21',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahuehuetitla',
            'entidad_id' => '21',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ajalpan',
            'entidad_id' => '21',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Albino Zertuche',
            'entidad_id' => '21',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aljojuca',
            'entidad_id' => '21',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altepexi',
            'entidad_id' => '21',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amixtlán',
            'entidad_id' => '21',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amozoc',
            'entidad_id' => '21',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquixtla',
            'entidad_id' => '21',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atempan',
            'entidad_id' => '21',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atexcal',
            'entidad_id' => '21',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlixco',
            'entidad_id' => '21',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyatempan',
            'entidad_id' => '21',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzala',
            'entidad_id' => '21',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzitzihuacán',
            'entidad_id' => '21',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzitzintla',
            'entidad_id' => '21',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axutla',
            'entidad_id' => '21',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayotoxco de Guerrero',
            'entidad_id' => '21',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calpan',
            'entidad_id' => '21',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caltepec',
            'entidad_id' => '21',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camocuautla',
            'entidad_id' => '21',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caxhuacan',
            'entidad_id' => '21',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec',
            'entidad_id' => '21',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzingo',
            'entidad_id' => '21',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cohetzala',
            'entidad_id' => '21',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cohuecan',
            'entidad_id' => '21',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coronango',
            'entidad_id' => '21',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxcatlán',
            'entidad_id' => '21',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyomeapan',
            'entidad_id' => '21',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyotepec',
            'entidad_id' => '21',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuapiaxtla de Madero',
            'entidad_id' => '21',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautempan',
            'entidad_id' => '21',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautinchán',
            'entidad_id' => '21',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuautlancingo',
            'entidad_id' => '21',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuayuca de Andrade',
            'entidad_id' => '21',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuetzalan del Progreso',
            'entidad_id' => '21',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuyoaco',
            'entidad_id' => '21',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchicomula de Sesma',
            'entidad_id' => '21',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapulco',
            'entidad_id' => '21',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautla',
            'entidad_id' => '21',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautzingo',
            'entidad_id' => '21',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconcuautla',
            'entidad_id' => '21',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chichiquila',
            'entidad_id' => '21',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chietla',
            'entidad_id' => '21',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chigmecatitlán',
            'entidad_id' => '21',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chignahuapan',
            'entidad_id' => '21',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chignautla',
            'entidad_id' => '21',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chila',
            'entidad_id' => '21',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chila de la Sal',
            'entidad_id' => '21',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Honey',
            'entidad_id' => '21',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chilchotla',
            'entidad_id' => '21',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinantla',
            'entidad_id' => '21',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Domingo Arenas',
            'entidad_id' => '21',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Eloxochitlán',
            'entidad_id' => '21',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Epatlán',
            'entidad_id' => '21',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Esperanza',
            'entidad_id' => '21',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Francisco Z. Mena',
            'entidad_id' => '21',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Felipe Ángeles',
            'entidad_id' => '21',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'entidad_id' => '21',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe Victoria',
            'entidad_id' => '21',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hermenegildo Galeana',
            'entidad_id' => '21',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huaquechula',
            'entidad_id' => '21',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatlatlauca',
            'entidad_id' => '21',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huauchinango',
            'entidad_id' => '21',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetla',
            'entidad_id' => '21',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán el Chico',
            'entidad_id' => '21',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huejotzingo',
            'entidad_id' => '21',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyapan',
            'entidad_id' => '21',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueytamalco',
            'entidad_id' => '21',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueytlalpan',
            'entidad_id' => '21',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitzilan de Serdán',
            'entidad_id' => '21',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huitziltepec',
            'entidad_id' => '21',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlequizayan',
            'entidad_id' => '21',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcamilpa de Guerrero',
            'entidad_id' => '21',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcaquixtla',
            'entidad_id' => '21',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacamaxtitlán',
            'entidad_id' => '21',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtepec',
            'entidad_id' => '21',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Izúcar de Matamoros',
            'entidad_id' => '21',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpan',
            'entidad_id' => '21',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jolalpan',
            'entidad_id' => '21',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonotla',
            'entidad_id' => '21',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jopala',
            'entidad_id' => '21',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan C. Bonilla',
            'entidad_id' => '21',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Galindo',
            'entidad_id' => '21',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan N. Méndez',
            'entidad_id' => '21',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lafragua',
            'entidad_id' => '21',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Libres',
            'entidad_id' => '21',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Tlatlauquitepec',
            'entidad_id' => '21',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapiltepec de Juárez',
            'entidad_id' => '21',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtla',
            'entidad_id' => '21',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Molcaxac',
            'entidad_id' => '21',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañada Morelos',
            'entidad_id' => '21',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naupan',
            'entidad_id' => '21',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nauzontla',
            'entidad_id' => '21',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nealtican',
            'entidad_id' => '21',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nicolás Bravo',
            'entidad_id' => '21',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nopalucan',
            'entidad_id' => '21',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocotepec',
            'entidad_id' => '21',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocoyucan',
            'entidad_id' => '21',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Olintla',
            'entidad_id' => '21',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oriental',
            'entidad_id' => '21',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pahuatlán',
            'entidad_id' => '21',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palmar de Bravo',
            'entidad_id' => '21',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pantepec',
            'entidad_id' => '21',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Petlalcingo',
            'entidad_id' => '21',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Piaxtla',
            'entidad_id' => '21',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puebla',
            'entidad_id' => '21',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quecholac',
            'entidad_id' => '21',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quimixtlán',
            'entidad_id' => '21',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Lara Grajales',
            'entidad_id' => '21',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes de Juárez',
            'entidad_id' => '21',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Cholula',
            'entidad_id' => '21',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio Cañada',
            'entidad_id' => '21',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Diego la Mesa Tochimiltzingo',
            'entidad_id' => '21',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Teotlalcingo',
            'entidad_id' => '21',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe Tepatlán',
            'entidad_id' => '21',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gabriel Chilac',
            'entidad_id' => '21',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Gregorio Atzompa',
            'entidad_id' => '21',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Tecuanipan',
            'entidad_id' => '21',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Xayacatlán',
            'entidad_id' => '21',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Chiapa',
            'entidad_id' => '21',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Miahuatlán',
            'entidad_id' => '21',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atenco',
            'entidad_id' => '21',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Atzompa',
            'entidad_id' => '21',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Texmelucan',
            'entidad_id' => '21',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Totoltepec',
            'entidad_id' => '21',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Matías Tlalancaleca',
            'entidad_id' => '21',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Ixitlán',
            'entidad_id' => '21',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel Xoxtla',
            'entidad_id' => '21',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Buenos Aires',
            'entidad_id' => '21',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás de los Ranchos',
            'entidad_id' => '21',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo Anicano',
            'entidad_id' => '21',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Cholula',
            'entidad_id' => '21',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro Yeloixtlahuaca',
            'entidad_id' => '21',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador el Seco',
            'entidad_id' => '21',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador el Verde',
            'entidad_id' => '21',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Salvador Huixcolotla',
            'entidad_id' => '21',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Sebastián Tlacotepec',
            'entidad_id' => '21',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Tlaltempan',
            'entidad_id' => '21',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Inés Ahuatempan',
            'entidad_id' => '21',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel Cholula',
            'entidad_id' => '21',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Miahuatlán',
            'entidad_id' => '21',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán el Grande',
            'entidad_id' => '21',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Tomás Hueyotlipan',
            'entidad_id' => '21',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soltepec',
            'entidad_id' => '21',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecali de Herrera',
            'entidad_id' => '21',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecamachalco',
            'entidad_id' => '21',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecomatlán',
            'entidad_id' => '21',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuacán',
            'entidad_id' => '21',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuitzingo',
            'entidad_id' => '21',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenampulco',
            'entidad_id' => '21',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teopantlán',
            'entidad_id' => '21',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teotlalco',
            'entidad_id' => '21',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepanco de López',
            'entidad_id' => '21',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepango de Rodríguez',
            'entidad_id' => '21',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatlaxco de Hidalgo',
            'entidad_id' => '21',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeaca',
            'entidad_id' => '21',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepemaxalco',
            'entidad_id' => '21',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeojuma',
            'entidad_id' => '21',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetzintla',
            'entidad_id' => '21',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepexco',
            'entidad_id' => '21',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepexi de Rodríguez',
            'entidad_id' => '21',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyahualco',
            'entidad_id' => '21',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyahualco de Cuauhtémoc',
            'entidad_id' => '21',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetela de Ocampo',
            'entidad_id' => '21',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teteles de Avila Castillo',
            'entidad_id' => '21',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teziutlán',
            'entidad_id' => '21',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tianguismanalco',
            'entidad_id' => '21',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tilapa',
            'entidad_id' => '21',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec de Benito Juárez',
            'entidad_id' => '21',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacuilotepec',
            'entidad_id' => '21',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlachichuca',
            'entidad_id' => '21',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlahuapan',
            'entidad_id' => '21',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltenango',
            'entidad_id' => '21',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlanepantla',
            'entidad_id' => '21',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaola',
            'entidad_id' => '21',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapacoya',
            'entidad_id' => '21',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapanalá',
            'entidad_id' => '21',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlatlauquitepec',
            'entidad_id' => '21',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxco',
            'entidad_id' => '21',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tochimilco',
            'entidad_id' => '21',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tochtepec',
            'entidad_id' => '21',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totoltepec de Guerrero',
            'entidad_id' => '21',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulcingo',
            'entidad_id' => '21',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuzamapan de Galeana',
            'entidad_id' => '21',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzicatlacoyan',
            'entidad_id' => '21',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venustiano Carranza',
            'entidad_id' => '21',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vicente Guerrero',
            'entidad_id' => '21',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xayacatlán de Bravo',
            'entidad_id' => '21',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicotepec',
            'entidad_id' => '21',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicotlán',
            'entidad_id' => '21',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xiutetelco',
            'entidad_id' => '21',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiapulco',
            'entidad_id' => '21',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochiltepec',
            'entidad_id' => '21',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitlán de Vicente Suárez',
            'entidad_id' => '21',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xochitlán Todos Santos',
            'entidad_id' => '21',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaonáhuac',
            'entidad_id' => '21',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yehualtepec',
            'entidad_id' => '21',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapala',
            'entidad_id' => '21',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacapoaxtla',
            'entidad_id' => '21',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatlán',
            'entidad_id' => '21',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán',
            'entidad_id' => '21',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zapotitlán de Méndez',
            'entidad_id' => '21',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'entidad_id' => '21',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zautla',
            'entidad_id' => '21',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zihuateutla',
            'entidad_id' => '21',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zinacatepec',
            'entidad_id' => '21',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zongozotla',
            'entidad_id' => '21',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zoquiapan',
            'entidad_id' => '21',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zoquitlán',
            'entidad_id' => '21',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amealco de Bonfil',
            'entidad_id' => '22',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinal de Amoles',
            'entidad_id' => '22',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arroyo Seco',
            'entidad_id' => '22',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cadereyta de Montes',
            'entidad_id' => '22',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colón',
            'entidad_id' => '22',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Corregidora',
            'entidad_id' => '22',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ezequiel Montes',
            'entidad_id' => '22',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huimilpan',
            'entidad_id' => '22',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpan de Serra',
            'entidad_id' => '22',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Landa de Matamoros',
            'entidad_id' => '22',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Marqués',
            'entidad_id' => '22',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pedro Escobedo',
            'entidad_id' => '22',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peñamiller',
            'entidad_id' => '22',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Querétaro',
            'entidad_id' => '22',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Joaquín',
            'entidad_id' => '22',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan del Río',
            'entidad_id' => '22',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequisquiapan',
            'entidad_id' => '22',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tolimán',
            'entidad_id' => '22',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cozumel',
            'entidad_id' => '23',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Felipe Carrillo Puerto',
            'entidad_id' => '23',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isla Mujeres',
            'entidad_id' => '23',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Othón P. Blanco',
            'entidad_id' => '23',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '23',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José María Morelos',
            'entidad_id' => '23',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'entidad_id' => '23',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Solidaridad',
            'entidad_id' => '23',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tulum',
            'entidad_id' => '23',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacalar',
            'entidad_id' => '23',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahualulco',
            'entidad_id' => '24',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alaquines',
            'entidad_id' => '24',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquismón',
            'entidad_id' => '24',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Armadillo de los Infante',
            'entidad_id' => '24',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cárdenas',
            'entidad_id' => '24',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catorce',
            'entidad_id' => '24',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cedral',
            'entidad_id' => '24',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerritos',
            'entidad_id' => '24',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerro de San Pedro',
            'entidad_id' => '24',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad del Maíz',
            'entidad_id' => '24',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Fernández',
            'entidad_id' => '24',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancanhuitz',
            'entidad_id' => '24',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Valles',
            'entidad_id' => '24',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxcatlán',
            'entidad_id' => '24',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Charcas',
            'entidad_id' => '24',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ebano',
            'entidad_id' => '24',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalcázar',
            'entidad_id' => '24',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huehuetlán',
            'entidad_id' => '24',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lagunillas',
            'entidad_id' => '24',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matehuala',
            'entidad_id' => '24',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mexquitic de Carmona',
            'entidad_id' => '24',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moctezuma',
            'entidad_id' => '24',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'entidad_id' => '24',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rioverde',
            'entidad_id' => '24',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salinas',
            'entidad_id' => '24',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Antonio',
            'entidad_id' => '24',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ciro de Acosta',
            'entidad_id' => '24',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Potosí',
            'entidad_id' => '24',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Martín Chalchicuautla',
            'entidad_id' => '24',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás Tolentino',
            'entidad_id' => '24',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina',
            'entidad_id' => '24',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María del Río',
            'entidad_id' => '24',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santo Domingo',
            'entidad_id' => '24',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Vicente Tancuayalab',
            'entidad_id' => '24',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad de Graciano Sánchez',
            'entidad_id' => '24',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamasopo',
            'entidad_id' => '24',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamazunchale',
            'entidad_id' => '24',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampacán',
            'entidad_id' => '24',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampamolón Corona',
            'entidad_id' => '24',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamuín',
            'entidad_id' => '24',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanlajás',
            'entidad_id' => '24',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tanquián de Escobedo',
            'entidad_id' => '24',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Nueva',
            'entidad_id' => '24',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vanegas',
            'entidad_id' => '24',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Venado',
            'entidad_id' => '24',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Arriaga',
            'entidad_id' => '24',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Guadalupe',
            'entidad_id' => '24',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de la Paz',
            'entidad_id' => '24',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Ramos',
            'entidad_id' => '24',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Reyes',
            'entidad_id' => '24',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'entidad_id' => '24',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Juárez',
            'entidad_id' => '24',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Axtla de Terrazas',
            'entidad_id' => '24',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xilitla',
            'entidad_id' => '24',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'entidad_id' => '24',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Arista',
            'entidad_id' => '24',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matlapa',
            'entidad_id' => '24',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Naranjo',
            'entidad_id' => '24',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ahome',
            'entidad_id' => '25',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angostura',
            'entidad_id' => '25',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Badiraguato',
            'entidad_id' => '25',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concordia',
            'entidad_id' => '25',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosalá',
            'entidad_id' => '25',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Culiacán',
            'entidad_id' => '25',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Choix',
            'entidad_id' => '25',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Elota',
            'entidad_id' => '25',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Escuinapa',
            'entidad_id' => '25',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Fuerte',
            'entidad_id' => '25',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guasave',
            'entidad_id' => '25',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatlán',
            'entidad_id' => '25',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mocorito',
            'entidad_id' => '25',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'entidad_id' => '25',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Salvador Alvarado',
            'entidad_id' => '25',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio',
            'entidad_id' => '25',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sinaloa',
            'entidad_id' => '25',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Navolato',
            'entidad_id' => '25',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aconchi',
            'entidad_id' => '26',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Prieta',
            'entidad_id' => '26',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alamos',
            'entidad_id' => '26',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altar',
            'entidad_id' => '26',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arivechi',
            'entidad_id' => '26',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Arizpe',
            'entidad_id' => '26',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atil',
            'entidad_id' => '26',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacadéhuachi',
            'entidad_id' => '26',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacanora',
            'entidad_id' => '26',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacerac',
            'entidad_id' => '26',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bacoachi',
            'entidad_id' => '26',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bácum',
            'entidad_id' => '26',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Banámichi',
            'entidad_id' => '26',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Baviácora',
            'entidad_id' => '26',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bavispe',
            'entidad_id' => '26',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benjamín Hill',
            'entidad_id' => '26',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Caborca',
            'entidad_id' => '26',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cajeme',
            'entidad_id' => '26',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cananea',
            'entidad_id' => '26',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carbó',
            'entidad_id' => '26',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Colorada',
            'entidad_id' => '26',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cucurpe',
            'entidad_id' => '26',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cumpas',
            'entidad_id' => '26',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Divisaderos',
            'entidad_id' => '26',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Empalme',
            'entidad_id' => '26',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Etchojoa',
            'entidad_id' => '26',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fronteras',
            'entidad_id' => '26',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Granados',
            'entidad_id' => '26',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guaymas',
            'entidad_id' => '26',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hermosillo',
            'entidad_id' => '26',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huachinera',
            'entidad_id' => '26',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huásabas',
            'entidad_id' => '26',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatabampo',
            'entidad_id' => '26',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huépac',
            'entidad_id' => '26',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Imuris',
            'entidad_id' => '26',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'entidad_id' => '26',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatán',
            'entidad_id' => '26',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moctezuma',
            'entidad_id' => '26',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naco',
            'entidad_id' => '26',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nácori Chico',
            'entidad_id' => '26',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nacozari de García',
            'entidad_id' => '26',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Navojoa',
            'entidad_id' => '26',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nogales',
            'entidad_id' => '26',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Onavas',
            'entidad_id' => '26',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Opodepe',
            'entidad_id' => '26',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oquitoa',
            'entidad_id' => '26',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pitiquito',
            'entidad_id' => '26',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puerto Peñasco',
            'entidad_id' => '26',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quiriego',
            'entidad_id' => '26',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rayón',
            'entidad_id' => '26',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rosario',
            'entidad_id' => '26',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sahuaripa',
            'entidad_id' => '26',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe de Jesús',
            'entidad_id' => '26',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Javier',
            'entidad_id' => '26',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Luis Río Colorado',
            'entidad_id' => '26',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Miguel de Horcasitas',
            'entidad_id' => '26',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pedro de la Cueva',
            'entidad_id' => '26',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana',
            'entidad_id' => '26',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz',
            'entidad_id' => '26',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sáric',
            'entidad_id' => '26',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soyopa',
            'entidad_id' => '26',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suaqui Grande',
            'entidad_id' => '26',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepache',
            'entidad_id' => '26',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trincheras',
            'entidad_id' => '26',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tubutama',
            'entidad_id' => '26',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ures',
            'entidad_id' => '26',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'entidad_id' => '26',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Pesqueira',
            'entidad_id' => '26',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yécora',
            'entidad_id' => '26',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Plutarco Elías Calles',
            'entidad_id' => '26',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '26',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Ignacio Río Muerto',
            'entidad_id' => '26',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Balancán',
            'entidad_id' => '27',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cárdenas',
            'entidad_id' => '27',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Centla',
            'entidad_id' => '27',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Centro',
            'entidad_id' => '27',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comalcalco',
            'entidad_id' => '27',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cunduacán',
            'entidad_id' => '27',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'entidad_id' => '27',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huimanguillo',
            'entidad_id' => '27',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalapa',
            'entidad_id' => '27',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpa de Méndez',
            'entidad_id' => '27',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jonuta',
            'entidad_id' => '27',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Macuspana',
            'entidad_id' => '27',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nacajuca',
            'entidad_id' => '27',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paraíso',
            'entidad_id' => '27',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tacotalpa',
            'entidad_id' => '27',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teapa',
            'entidad_id' => '27',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenosique',
            'entidad_id' => '27',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abasolo',
            'entidad_id' => '28',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aldama',
            'entidad_id' => '28',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altamira',
            'entidad_id' => '28',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Antiguo Morelos',
            'entidad_id' => '28',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Burgos',
            'entidad_id' => '28',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bustamante',
            'entidad_id' => '28',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camargo',
            'entidad_id' => '28',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Casas',
            'entidad_id' => '28',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ciudad Madero',
            'entidad_id' => '28',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cruillas',
            'entidad_id' => '28',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gómez Farías',
            'entidad_id' => '28',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'González',
            'entidad_id' => '28',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Güémez',
            'entidad_id' => '28',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guerrero',
            'entidad_id' => '28',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gustavo Díaz Ordaz',
            'entidad_id' => '28',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgo',
            'entidad_id' => '28',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jaumave',
            'entidad_id' => '28',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez',
            'entidad_id' => '28',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Llera',
            'entidad_id' => '28',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mainero',
            'entidad_id' => '28',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Mante',
            'entidad_id' => '28',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Matamoros',
            'entidad_id' => '28',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Méndez',
            'entidad_id' => '28',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mier',
            'entidad_id' => '28',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Alemán',
            'entidad_id' => '28',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miquihuana',
            'entidad_id' => '28',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Laredo',
            'entidad_id' => '28',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nuevo Morelos',
            'entidad_id' => '28',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ocampo',
            'entidad_id' => '28',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Padilla',
            'entidad_id' => '28',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Palmillas',
            'entidad_id' => '28',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Reynosa',
            'entidad_id' => '28',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Bravo',
            'entidad_id' => '28',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Carlos',
            'entidad_id' => '28',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Fernando',
            'entidad_id' => '28',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Nicolás',
            'entidad_id' => '28',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soto la Marina',
            'entidad_id' => '28',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampico',
            'entidad_id' => '28',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tula',
            'entidad_id' => '28',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valle Hermoso',
            'entidad_id' => '28',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Victoria',
            'entidad_id' => '28',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villagrán',
            'entidad_id' => '28',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicoténcatl',
            'entidad_id' => '28',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amaxac de Guerrero',
            'entidad_id' => '29',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apetatitlán de Antonio Carvajal',
            'entidad_id' => '29',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlangatepec',
            'entidad_id' => '29',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atltzayanca',
            'entidad_id' => '29',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apizaco',
            'entidad_id' => '29',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calpulalpan',
            'entidad_id' => '29',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Carmen Tequexquitla',
            'entidad_id' => '29',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuapiaxtla',
            'entidad_id' => '29',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuaxomulco',
            'entidad_id' => '29',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiautempan',
            'entidad_id' => '29',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muñoz de Domingo Arenas',
            'entidad_id' => '29',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Españita',
            'entidad_id' => '29',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huamantla',
            'entidad_id' => '29',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyotlipan',
            'entidad_id' => '29',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtacuixtla de Mariano Matamoros',
            'entidad_id' => '29',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtenco',
            'entidad_id' => '29',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazatecochco de José María Morelos',
            'entidad_id' => '29',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Contla de Juan Cuamatzi',
            'entidad_id' => '29',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetitla de Lardizábal',
            'entidad_id' => '29',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sanctórum de Lázaro Cárdenas',
            'entidad_id' => '29',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nanacamilpa de Mariano Arista',
            'entidad_id' => '29',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acuamanala de Miguel Hidalgo',
            'entidad_id' => '29',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Natívitas',
            'entidad_id' => '29',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panotla',
            'entidad_id' => '29',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Pablo del Monte',
            'entidad_id' => '29',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Tlaxcala',
            'entidad_id' => '29',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenancingo',
            'entidad_id' => '29',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teolocholco',
            'entidad_id' => '29',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepeyanco',
            'entidad_id' => '29',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Terrenate',
            'entidad_id' => '29',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetla de la Solidaridad',
            'entidad_id' => '29',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetlatlahuca',
            'entidad_id' => '29',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxcala',
            'entidad_id' => '29',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaxco',
            'entidad_id' => '29',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tocatlán',
            'entidad_id' => '29',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totolac',
            'entidad_id' => '29',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ziltlaltépec de Trinidad Sánchez Santos',
            'entidad_id' => '29',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzompantepec',
            'entidad_id' => '29',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xaloztoc',
            'entidad_id' => '29',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xaltocan',
            'entidad_id' => '29',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papalotla de Xicohténcatl',
            'entidad_id' => '29',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xicohtzinco',
            'entidad_id' => '29',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yauhquemehcan',
            'entidad_id' => '29',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatelco',
            'entidad_id' => '29',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '29',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'entidad_id' => '29',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lázaro Cárdenas',
            'entidad_id' => '29',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Magdalena Tlaltelulco',
            'entidad_id' => '29',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Damián Texóloc',
            'entidad_id' => '29',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Francisco Tetlanohcan',
            'entidad_id' => '29',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Jerónimo Zacualpan',
            'entidad_id' => '29',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San José Teacalco',
            'entidad_id' => '29',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Huactzinco',
            'entidad_id' => '29',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lorenzo Axocomanitla',
            'entidad_id' => '29',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Lucas Tecopilco',
            'entidad_id' => '29',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Ana Nopalucan',
            'entidad_id' => '29',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Apolonia Teacalco',
            'entidad_id' => '29',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Catarina Ayometla',
            'entidad_id' => '29',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Cruz Quilehtla',
            'entidad_id' => '29',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Isabel Xiloxoxtla',
            'entidad_id' => '29',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acajete',
            'entidad_id' => '30',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acatlán',
            'entidad_id' => '30',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acayucan',
            'entidad_id' => '30',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Actopan',
            'entidad_id' => '30',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acula',
            'entidad_id' => '30',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acultzingo',
            'entidad_id' => '30',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camarón de Tejeda',
            'entidad_id' => '30',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alpatláhuac',
            'entidad_id' => '30',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alto Lucero de Gutiérrez Barrios',
            'entidad_id' => '30',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Altotonga',
            'entidad_id' => '30',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Alvarado',
            'entidad_id' => '30',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatitlán',
            'entidad_id' => '30',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naranjos Amatlán',
            'entidad_id' => '30',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Amatlán de los Reyes',
            'entidad_id' => '30',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Angel R. Cabada',
            'entidad_id' => '30',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Antigua',
            'entidad_id' => '30',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apazapan',
            'entidad_id' => '30',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Aquila',
            'entidad_id' => '30',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Astacinga',
            'entidad_id' => '30',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atlahuilco',
            'entidad_id' => '30',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atoyac',
            'entidad_id' => '30',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzacan',
            'entidad_id' => '30',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atzalan',
            'entidad_id' => '30',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltetela',
            'entidad_id' => '30',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ayahualulco',
            'entidad_id' => '30',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Banderilla',
            'entidad_id' => '30',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '30',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Boca del Río',
            'entidad_id' => '30',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calcahualco',
            'entidad_id' => '30',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Camerino Z. Mendoza',
            'entidad_id' => '30',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carrillo Puerto',
            'entidad_id' => '30',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Catemaco',
            'entidad_id' => '30',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cazones de Herrera',
            'entidad_id' => '30',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cerro Azul',
            'entidad_id' => '30',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Citlaltépetl',
            'entidad_id' => '30',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coacoatzintla',
            'entidad_id' => '30',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coahuitlán',
            'entidad_id' => '30',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatepec',
            'entidad_id' => '30',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzacoalcos',
            'entidad_id' => '30',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coatzintla',
            'entidad_id' => '30',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coetzala',
            'entidad_id' => '30',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Colipa',
            'entidad_id' => '30',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Comapa',
            'entidad_id' => '30',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Córdoba',
            'entidad_id' => '30',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosamaloapan de Carpio',
            'entidad_id' => '30',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosautlán de Carvajal',
            'entidad_id' => '30',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coscomatepec',
            'entidad_id' => '30',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cosoleacaque',
            'entidad_id' => '30',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cotaxtla',
            'entidad_id' => '30',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coxquihui',
            'entidad_id' => '30',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Coyutla',
            'entidad_id' => '30',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuichapa',
            'entidad_id' => '30',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuitláhuac',
            'entidad_id' => '30',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chacaltianguis',
            'entidad_id' => '30',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalma',
            'entidad_id' => '30',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconamel',
            'entidad_id' => '30',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chiconquiaco',
            'entidad_id' => '30',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicontepec',
            'entidad_id' => '30',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinameca',
            'entidad_id' => '30',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chinampa de Gorostiza',
            'entidad_id' => '30',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Choapas',
            'entidad_id' => '30',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chocamán',
            'entidad_id' => '30',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chontla',
            'entidad_id' => '30',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chumatlán',
            'entidad_id' => '30',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Emiliano Zapata',
            'entidad_id' => '30',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Espinal',
            'entidad_id' => '30',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Filomeno Mata',
            'entidad_id' => '30',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fortín',
            'entidad_id' => '30',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Gutiérrez Zamora',
            'entidad_id' => '30',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hidalgotitlán',
            'entidad_id' => '30',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huatusco',
            'entidad_id' => '30',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huayacocotla',
            'entidad_id' => '30',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hueyapan de Ocampo',
            'entidad_id' => '30',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huiloapan de Cuauhtémoc',
            'entidad_id' => '30',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ignacio de la Llave',
            'entidad_id' => '30',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ilamatlán',
            'entidad_id' => '30',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Isla',
            'entidad_id' => '30',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixcatepec',
            'entidad_id' => '30',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuacán de los Reyes',
            'entidad_id' => '30',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán del Café',
            'entidad_id' => '30',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlancillo',
            'entidad_id' => '30',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán del Sureste',
            'entidad_id' => '30',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixhuatlán de Madero',
            'entidad_id' => '30',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixmatlahuacan',
            'entidad_id' => '30',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixtaczoquitlán',
            'entidad_id' => '30',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalacingo',
            'entidad_id' => '30',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xalapa',
            'entidad_id' => '30',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalcomulco',
            'entidad_id' => '30',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jáltipan',
            'entidad_id' => '30',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jamapa',
            'entidad_id' => '30',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jesús Carranza',
            'entidad_id' => '30',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xico',
            'entidad_id' => '30',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jilotepec',
            'entidad_id' => '30',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Rodríguez Clara',
            'entidad_id' => '30',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchique de Ferrer',
            'entidad_id' => '30',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Landero y Coss',
            'entidad_id' => '30',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Lerdo de Tejada',
            'entidad_id' => '30',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Magdalena',
            'entidad_id' => '30',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maltrata',
            'entidad_id' => '30',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Manlio Fabio Altamirano',
            'entidad_id' => '30',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mariano Escobedo',
            'entidad_id' => '30',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Martínez de la Torre',
            'entidad_id' => '30',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mecatlán',
            'entidad_id' => '30',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mecayapan',
            'entidad_id' => '30',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Medellín de Bravo',
            'entidad_id' => '30',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miahuatlán',
            'entidad_id' => '30',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Minas',
            'entidad_id' => '30',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Minatitlán',
            'entidad_id' => '30',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Misantla',
            'entidad_id' => '30',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mixtla de Altamirano',
            'entidad_id' => '30',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moloacán',
            'entidad_id' => '30',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naolinco',
            'entidad_id' => '30',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Naranjal',
            'entidad_id' => '30',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nautla',
            'entidad_id' => '30',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nogales',
            'entidad_id' => '30',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oluta',
            'entidad_id' => '30',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Omealca',
            'entidad_id' => '30',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Orizaba',
            'entidad_id' => '30',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Otatitlán',
            'entidad_id' => '30',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oteapan',
            'entidad_id' => '30',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ozuluama de Mascareñas',
            'entidad_id' => '30',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pajapan',
            'entidad_id' => '30',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco',
            'entidad_id' => '30',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Papantla',
            'entidad_id' => '30',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paso del Macho',
            'entidad_id' => '30',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Paso de Ovejas',
            'entidad_id' => '30',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'La Perla',
            'entidad_id' => '30',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Perote',
            'entidad_id' => '30',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Platón Sánchez',
            'entidad_id' => '30',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Playa Vicente',
            'entidad_id' => '30',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Poza Rica de Hidalgo',
            'entidad_id' => '30',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Las Vigas de Ramírez',
            'entidad_id' => '30',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pueblo Viejo',
            'entidad_id' => '30',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Puente Nacional',
            'entidad_id' => '30',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Delgado',
            'entidad_id' => '30',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Rafael Lucio',
            'entidad_id' => '30',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Los Reyes',
            'entidad_id' => '30',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Blanco',
            'entidad_id' => '30',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Saltabarranca',
            'entidad_id' => '30',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tenejapan',
            'entidad_id' => '30',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Andrés Tuxtla',
            'entidad_id' => '30',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Juan Evangelista',
            'entidad_id' => '30',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Tuxtla',
            'entidad_id' => '30',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sayula de Alemán',
            'entidad_id' => '30',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soconusco',
            'entidad_id' => '30',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sochiapa',
            'entidad_id' => '30',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad Atzompa',
            'entidad_id' => '30',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soledad de Doblado',
            'entidad_id' => '30',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Soteapan',
            'entidad_id' => '30',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamalín',
            'entidad_id' => '30',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tamiahua',
            'entidad_id' => '30',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tampico Alto',
            'entidad_id' => '30',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tancoco',
            'entidad_id' => '30',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tantima',
            'entidad_id' => '30',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tantoyuca',
            'entidad_id' => '30',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tatatila',
            'entidad_id' => '30',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Castillo de Teayo',
            'entidad_id' => '30',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecolutla',
            'entidad_id' => '30',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tehuipango',
            'entidad_id' => '30',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Álamo Temapache',
            'entidad_id' => '30',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tempoal',
            'entidad_id' => '30',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenampa',
            'entidad_id' => '30',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tenochtitlán',
            'entidad_id' => '30',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teocelo',
            'entidad_id' => '30',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepatlaxco',
            'entidad_id' => '30',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetlán',
            'entidad_id' => '30',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetzintla',
            'entidad_id' => '30',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tequila',
            'entidad_id' => '30',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'José Azueta',
            'entidad_id' => '30',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texcatepec',
            'entidad_id' => '30',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texhuacán',
            'entidad_id' => '30',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Texistepec',
            'entidad_id' => '30',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tezonapa',
            'entidad_id' => '30',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tierra Blanca',
            'entidad_id' => '30',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tihuatlán',
            'entidad_id' => '30',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacojalpan',
            'entidad_id' => '30',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacolulan',
            'entidad_id' => '30',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotalpan',
            'entidad_id' => '30',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlacotepec de Mejía',
            'entidad_id' => '30',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlachichilco',
            'entidad_id' => '30',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalixcoyan',
            'entidad_id' => '30',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlalnelhuayocan',
            'entidad_id' => '30',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlapacoyan',
            'entidad_id' => '30',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaquilpa',
            'entidad_id' => '30',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlilapan',
            'entidad_id' => '30',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tomatlán',
            'entidad_id' => '30',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tonayán',
            'entidad_id' => '30',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Totutla',
            'entidad_id' => '30',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxpan',
            'entidad_id' => '30',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tuxtilla',
            'entidad_id' => '30',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ursulo Galván',
            'entidad_id' => '30',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vega de Alatorre',
            'entidad_id' => '30',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Veracruz',
            'entidad_id' => '30',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Aldama',
            'entidad_id' => '30',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xoxocotla',
            'entidad_id' => '30',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yanga',
            'entidad_id' => '30',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yecuatla',
            'entidad_id' => '30',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacualpan',
            'entidad_id' => '30',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zaragoza',
            'entidad_id' => '30',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zentla',
            'entidad_id' => '30',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zongolica',
            'entidad_id' => '30',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zontecomatlán de López y Fuentes',
            'entidad_id' => '30',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zozocolco de Hidalgo',
            'entidad_id' => '30',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Agua Dulce',
            'entidad_id' => '30',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Higo',
            'entidad_id' => '30',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nanchital de Lázaro Cárdenas del Río',
            'entidad_id' => '30',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tres Valles',
            'entidad_id' => '30',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Carlos A. Carrillo',
            'entidad_id' => '30',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tatahuicapan de Juárez',
            'entidad_id' => '30',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uxpanapa',
            'entidad_id' => '30',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Rafael',
            'entidad_id' => '30',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santiago Sochiapan',
            'entidad_id' => '30',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Abalá',
            'entidad_id' => '31',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Acanceh',
            'entidad_id' => '31',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Akil',
            'entidad_id' => '31',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Baca',
            'entidad_id' => '31',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Bokobá',
            'entidad_id' => '31',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Buctzotz',
            'entidad_id' => '31',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cacalchén',
            'entidad_id' => '31',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calotmul',
            'entidad_id' => '31',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cansahcab',
            'entidad_id' => '31',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cantamayec',
            'entidad_id' => '31',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Celestún',
            'entidad_id' => '31',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cenotillo',
            'entidad_id' => '31',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Conkal',
            'entidad_id' => '31',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuncunul',
            'entidad_id' => '31',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuzamá',
            'entidad_id' => '31',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chacsinkín',
            'entidad_id' => '31',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chankom',
            'entidad_id' => '31',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chapab',
            'entidad_id' => '31',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chemax',
            'entidad_id' => '31',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chicxulub Pueblo',
            'entidad_id' => '31',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chichimilá',
            'entidad_id' => '31',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chikindzonot',
            'entidad_id' => '31',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chocholá',
            'entidad_id' => '31',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chumayel',
            'entidad_id' => '31',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzán',
            'entidad_id' => '31',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzemul',
            'entidad_id' => '31',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzidzantún',
            'entidad_id' => '31',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzilam de Bravo',
            'entidad_id' => '31',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzilam González',
            'entidad_id' => '31',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzitás',
            'entidad_id' => '31',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Dzoncauich',
            'entidad_id' => '31',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Espita',
            'entidad_id' => '31',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Halachó',
            'entidad_id' => '31',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hocabá',
            'entidad_id' => '31',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hoctún',
            'entidad_id' => '31',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Homún',
            'entidad_id' => '31',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huhí',
            'entidad_id' => '31',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Hunucmá',
            'entidad_id' => '31',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ixil',
            'entidad_id' => '31',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Izamal',
            'entidad_id' => '31',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kanasín',
            'entidad_id' => '31',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kantunil',
            'entidad_id' => '31',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kaua',
            'entidad_id' => '31',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kinchil',
            'entidad_id' => '31',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Kopomá',
            'entidad_id' => '31',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mama',
            'entidad_id' => '31',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maní',
            'entidad_id' => '31',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Maxcanú',
            'entidad_id' => '31',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mayapán',
            'entidad_id' => '31',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mérida',
            'entidad_id' => '31',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mocochá',
            'entidad_id' => '31',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Motul',
            'entidad_id' => '31',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muna',
            'entidad_id' => '31',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Muxupip',
            'entidad_id' => '31',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Opichén',
            'entidad_id' => '31',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Oxkutzcab',
            'entidad_id' => '31',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Panabá',
            'entidad_id' => '31',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Peto',
            'entidad_id' => '31',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Progreso',
            'entidad_id' => '31',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Quintana Roo',
            'entidad_id' => '31',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Lagartos',
            'entidad_id' => '31',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sacalum',
            'entidad_id' => '31',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Samahil',
            'entidad_id' => '31',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sanahcat',
            'entidad_id' => '31',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'San Felipe',
            'entidad_id' => '31',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa Elena',
            'entidad_id' => '31',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Seyé',
            'entidad_id' => '31',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sinanché',
            'entidad_id' => '31',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sotuta',
            'entidad_id' => '31',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sucilá',
            'entidad_id' => '31',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sudzal',
            'entidad_id' => '31',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Suma',
            'entidad_id' => '31',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tahdziú',
            'entidad_id' => '31',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tahmek',
            'entidad_id' => '31',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teabo',
            'entidad_id' => '31',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tecoh',
            'entidad_id' => '31',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekal de Venegas',
            'entidad_id' => '31',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekantó',
            'entidad_id' => '31',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekax',
            'entidad_id' => '31',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekit',
            'entidad_id' => '31',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tekom',
            'entidad_id' => '31',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Telchac Pueblo',
            'entidad_id' => '31',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Telchac Puerto',
            'entidad_id' => '31',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temax',
            'entidad_id' => '31',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Temozón',
            'entidad_id' => '31',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepakán',
            'entidad_id' => '31',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tetiz',
            'entidad_id' => '31',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teya',
            'entidad_id' => '31',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ticul',
            'entidad_id' => '31',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Timucuy',
            'entidad_id' => '31',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tinum',
            'entidad_id' => '31',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixcacalcupul',
            'entidad_id' => '31',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixkokob',
            'entidad_id' => '31',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixmehuac',
            'entidad_id' => '31',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tixpéhual',
            'entidad_id' => '31',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tizimín',
            'entidad_id' => '31',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tunkás',
            'entidad_id' => '31',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tzucacab',
            'entidad_id' => '31',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Uayma',
            'entidad_id' => '31',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ucú',
            'entidad_id' => '31',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Umán',
            'entidad_id' => '31',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valladolid',
            'entidad_id' => '31',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Xocchel',
            'entidad_id' => '31',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxcabá',
            'entidad_id' => '31',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yaxkukul',
            'entidad_id' => '31',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Yobaín',
            'entidad_id' => '31',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apozol',
            'entidad_id' => '32',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Apulco',
            'entidad_id' => '32',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Atolinga',
            'entidad_id' => '32',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Benito Juárez',
            'entidad_id' => '32',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Calera',
            'entidad_id' => '32',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cañitas de Felipe Pescador',
            'entidad_id' => '32',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Concepción del Oro',
            'entidad_id' => '32',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Cuauhtémoc',
            'entidad_id' => '32',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Chalchihuites',
            'entidad_id' => '32',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Fresnillo',
            'entidad_id' => '32',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trinidad García de la Cadena',
            'entidad_id' => '32',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Genaro Codina',
            'entidad_id' => '32',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Enrique Estrada',
            'entidad_id' => '32',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Francisco R. Murguía',
            'entidad_id' => '32',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Plateado de Joaquín Amaro',
            'entidad_id' => '32',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'General Pánfilo Natera',
            'entidad_id' => '32',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Guadalupe',
            'entidad_id' => '32',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Huanusco',
            'entidad_id' => '32',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jalpa',
            'entidad_id' => '32',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jerez',
            'entidad_id' => '32',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Jiménez del Teul',
            'entidad_id' => '32',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juan Aldama',
            'entidad_id' => '32',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Juchipila',
            'entidad_id' => '32',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Loreto',
            'entidad_id' => '32',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Luis Moya',
            'entidad_id' => '32',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mazapil',
            'entidad_id' => '32',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Melchor Ocampo',
            'entidad_id' => '32',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Mezquital del Oro',
            'entidad_id' => '32',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Miguel Auza',
            'entidad_id' => '32',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Momax',
            'entidad_id' => '32',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Monte Escobedo',
            'entidad_id' => '32',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Morelos',
            'entidad_id' => '32',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Moyahua de Estrada',
            'entidad_id' => '32',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Nochistlán de Mejía',
            'entidad_id' => '32',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Noria de Ángeles',
            'entidad_id' => '32',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Ojocaliente',
            'entidad_id' => '32',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pánuco',
            'entidad_id' => '32',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Pinos',
            'entidad_id' => '32',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Río Grande',
            'entidad_id' => '32',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sain Alto',
            'entidad_id' => '32',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'El Salvador',
            'entidad_id' => '32',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Sombrerete',
            'entidad_id' => '32',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Susticacán',
            'entidad_id' => '32',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tabasco',
            'entidad_id' => '32',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepechitlán',
            'entidad_id' => '32',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tepetongo',
            'entidad_id' => '32',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Teúl de González Ortega',
            'entidad_id' => '32',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Tlaltenango de Sánchez Román',
            'entidad_id' => '32',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Valparaíso',
            'entidad_id' => '32',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Vetagrande',
            'entidad_id' => '32',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa de Cos',
            'entidad_id' => '32',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa García',
            'entidad_id' => '32',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa González Ortega',
            'entidad_id' => '32',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villa Hidalgo',
            'entidad_id' => '32',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Villanueva',
            'entidad_id' => '32',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Zacatecas',
            'entidad_id' => '32',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Trancoso',
            'entidad_id' => '32',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'name' =>  'Santa María de la Paz',
            'entidad_id' => '32',
            'number' =>  '058',
        ]);
    }
}
