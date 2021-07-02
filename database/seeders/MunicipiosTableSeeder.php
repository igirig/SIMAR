<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * RUN THE Database SEEDS.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('municipios')->insert([
            'nombre' =>  'AGUASCALIENTES',
            'estado_id' => '01',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASIENTOS',
            'estado_id' => '01',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALVILLO',
            'estado_id' => '01',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSÍO',
            'estado_id' => '01',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JESÚS MARÍA',
            'estado_id' => '01',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PABELLÓN DE ARTEAGA',
            'estado_id' => '01',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RINCÓN DE ROMOS',
            'estado_id' => '01',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ DE GRACIA',
            'estado_id' => '01',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEZALÁ',
            'estado_id' => '01',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL LLANO',
            'estado_id' => '01',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DE LOS ROMO',
            'estado_id' => '01',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ENSENADA',
            'estado_id' => '02',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEXICALI',
            'estado_id' => '02',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECATE',
            'estado_id' => '02',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIJUANA',
            'estado_id' => '02',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PLAYAS DE ROSARITO',
            'estado_id' => '02',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMONDÚ',
            'estado_id' => '03',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MULEGÉ',
            'estado_id' => '03',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA PAZ',
            'estado_id' => '03',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS CABOS',
            'estado_id' => '03',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LORETO',
            'estado_id' => '03',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALKINÍ',
            'estado_id' => '04',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMPECHE',
            'estado_id' => '04',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARMEN',
            'estado_id' => '04',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAMPOTÓN',
            'estado_id' => '04',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HECELCHAKÁN',
            'estado_id' => '04',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HOPELCHÉN',
            'estado_id' => '04',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PALIZADA',
            'estado_id' => '04',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENABO',
            'estado_id' => '04',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESCÁRCEGA',
            'estado_id' => '04',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALAKMUL',
            'estado_id' => '04',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANDELARIA',
            'estado_id' => '04',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABASOLO',
            'estado_id' => '05',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACUÑA',
            'estado_id' => '05',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALLENDE',
            'estado_id' => '05',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARTEAGA',
            'estado_id' => '05',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANDELA',
            'estado_id' => '05',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CASTAÑOS',
            'estado_id' => '05',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUATRO CIÉNEGAS',
            'estado_id' => '05',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESCOBEDO',
            'estado_id' => '05',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRANCISCO I. MADERO',
            'estado_id' => '05',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRONTERA',
            'estado_id' => '05',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL CEPEDA',
            'estado_id' => '05',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUERRERO',
            'estado_id' => '05',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO',
            'estado_id' => '05',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIMÉNEZ',
            'estado_id' => '05',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ',
            'estado_id' => '05',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAMADRID',
            'estado_id' => '05',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATAMOROS',
            'estado_id' => '05',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONCLOVA',
            'estado_id' => '05',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELOS',
            'estado_id' => '05',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÚZQUIZ',
            'estado_id' => '05',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NADADORES',
            'estado_id' => '05',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAVA',
            'estado_id' => '05',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '05',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PARRAS',
            'estado_id' => '05',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PIEDRAS NEGRAS',
            'estado_id' => '05',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PROGRESO',
            'estado_id' => '05',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAMOS ARIZPE',
            'estado_id' => '05',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SABINAS',
            'estado_id' => '05',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SACRAMENTO',
            'estado_id' => '05',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALTILLO',
            'estado_id' => '05',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BUENAVENTURA',
            'estado_id' => '05',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DE SABINAS',
            'estado_id' => '05',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO',
            'estado_id' => '05',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SIERRA MOJADA',
            'estado_id' => '05',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TORREÓN',
            'estado_id' => '05',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VIESCA',
            'estado_id' => '05',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA UNIÓN',
            'estado_id' => '05',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZARAGOZA',
            'estado_id' => '05',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARMERÍA',
            'estado_id' => '06',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COLIMA',
            'estado_id' => '06',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMALA',
            'estado_id' => '06',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COQUIMATLÁN',
            'estado_id' => '06',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUHTÉMOC',
            'estado_id' => '06',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLAHUACÁN',
            'estado_id' => '06',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MANZANILLO',
            'estado_id' => '06',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINATITLÁN',
            'estado_id' => '06',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOMÁN',
            'estado_id' => '06',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ÁLVAREZ',
            'estado_id' => '06',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACACOYAGUA',
            'estado_id' => '07',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACALA',
            'estado_id' => '07',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAPETAHUA',
            'estado_id' => '07',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTAMIRANO',
            'estado_id' => '07',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATÁN',
            'estado_id' => '07',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATENANGO DE LA FRONTERA',
            'estado_id' => '07',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATENANGO DEL VALLE',
            'estado_id' => '07',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANGEL ALBINO CORZO',
            'estado_id' => '07',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARRIAGA',
            'estado_id' => '07',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BEJUCAL DE OCAMPO',
            'estado_id' => '07',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BELLA VISTA',
            'estado_id' => '07',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BERRIOZÁBAL',
            'estado_id' => '07',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BOCHIL',
            'estado_id' => '07',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL BOSQUE',
            'estado_id' => '07',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CACAHOATÁN',
            'estado_id' => '07',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CATAZAJÁ',
            'estado_id' => '07',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CINTALAPA',
            'estado_id' => '07',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COAPILLA',
            'estado_id' => '07',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMITÁN DE DOMÍNGUEZ',
            'estado_id' => '07',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA CONCORDIA',
            'estado_id' => '07',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COPAINALÁ',
            'estado_id' => '07',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALCHIHUITÁN',
            'estado_id' => '07',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAMULA',
            'estado_id' => '07',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHANAL',
            'estado_id' => '07',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPULTENANGO',
            'estado_id' => '07',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHENALHÓ',
            'estado_id' => '07',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAPA DE CORZO',
            'estado_id' => '07',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAPILLA',
            'estado_id' => '07',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICOASÉN',
            'estado_id' => '07',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICOMuseLO',
            'estado_id' => '07',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILÓN',
            'estado_id' => '07',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESCUINTLA',
            'estado_id' => '07',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRANCISCO LEÓN',
            'estado_id' => '07',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRONTERA COMALAPA',
            'estado_id' => '07',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRONTERA HIDALGO',
            'estado_id' => '07',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA GRANDEZA',
            'estado_id' => '07',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETÁN',
            'estado_id' => '07',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIXTÁN',
            'estado_id' => '07',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUITIUPÁN',
            'estado_id' => '07',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIXTLA',
            'estado_id' => '07',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA INDEPENDENCIA',
            'estado_id' => '07',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUATÁN',
            'estado_id' => '07',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTACOMITÁN',
            'estado_id' => '07',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTAPA',
            'estado_id' => '07',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTAPANGAJOYA',
            'estado_id' => '07',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIQUIPILAS',
            'estado_id' => '07',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JITOTOL',
            'estado_id' => '07',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ',
            'estado_id' => '07',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LARRÁINZAR',
            'estado_id' => '07',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA LIBERTAD',
            'estado_id' => '07',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAPASTEPEC',
            'estado_id' => '07',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAS MARGARITAS',
            'estado_id' => '07',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZAPA DE MADERO',
            'estado_id' => '07',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATÁN',
            'estado_id' => '07',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'METAPA',
            'estado_id' => '07',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MITONTIC',
            'estado_id' => '07',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOTOZINTLA',
            'estado_id' => '07',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NICOLÁS RUÍZ',
            'estado_id' => '07',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOSINGO',
            'estado_id' => '07',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOTEPEC',
            'estado_id' => '07',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOZOCOAUTLA DE ESPINOSA',
            'estado_id' => '07',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OSTUACÁN',
            'estado_id' => '07',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OSUMACINTA',
            'estado_id' => '07',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OXCHUC',
            'estado_id' => '07',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PALENQUE',
            'estado_id' => '07',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANTELHÓ',
            'estado_id' => '07',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANTEPEC',
            'estado_id' => '07',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PICHUCALCO',
            'estado_id' => '07',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PIJIJIAPAN',
            'estado_id' => '07',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL PORVENIR',
            'estado_id' => '07',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA COMALTITLÁN',
            'estado_id' => '07',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUEBLO NUEVO SOLISTAHUACÁN',
            'estado_id' => '07',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAYÓN',
            'estado_id' => '07',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'REFORMA',
            'estado_id' => '07',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAS ROSAS',
            'estado_id' => '07',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SABANILLA',
            'estado_id' => '07',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALTO DE AGUA',
            'estado_id' => '07',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL DE LAS CASAS',
            'estado_id' => '07',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FERNANDO',
            'estado_id' => '07',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SILTEPEC',
            'estado_id' => '07',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SIMOJOVEL',
            'estado_id' => '07',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SITALÁ',
            'estado_id' => '07',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOCOLTENANGO',
            'estado_id' => '07',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLOSUCHIAPA',
            'estado_id' => '07',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOYALÓ',
            'estado_id' => '07',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUCHIAPA',
            'estado_id' => '07',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUCHIATE',
            'estado_id' => '07',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUNUAPA',
            'estado_id' => '07',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAPACHULA',
            'estado_id' => '07',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAPALAPA',
            'estado_id' => '07',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAPILULA',
            'estado_id' => '07',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECPATÁN',
            'estado_id' => '07',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENEJAPA',
            'estado_id' => '07',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOPISCA',
            'estado_id' => '07',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TILA',
            'estado_id' => '07',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONALÁ',
            'estado_id' => '07',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTOLAPA',
            'estado_id' => '07',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA TRINITARIA',
            'estado_id' => '07',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUMBALÁ',
            'estado_id' => '07',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXTLA GUTIÉRREZ',
            'estado_id' => '07',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXTLA CHICO',
            'estado_id' => '07',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUZANTÁN',
            'estado_id' => '07',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZIMOL',
            'estado_id' => '07',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UNIÓN JUÁREZ',
            'estado_id' => '07',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VENUSTIANO CARRANZA',
            'estado_id' => '07',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA CORZO',
            'estado_id' => '07',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLAFLORES',
            'estado_id' => '07',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAJALÓN',
            'estado_id' => '07',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS',
            'estado_id' => '07',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZINACANTÁN',
            'estado_id' => '07',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN CANCUC',
            'estado_id' => '07',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALDAMA',
            'estado_id' => '07',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENEMÉRITO DE LAS AMÉRICAS',
            'estado_id' => '07',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARAVILLA TENEJAPA',
            'estado_id' => '07',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARQUÉS DE COMILLAS',
            'estado_id' => '07',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONTECRISTO DE GUERRERO',
            'estado_id' => '07',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS DURAZNAL',
            'estado_id' => '07',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO EL PINAR',
            'estado_id' => '07',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUMADA',
            'estado_id' => '08',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALDAMA',
            'estado_id' => '08',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALLENDE',
            'estado_id' => '08',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AQUILES SERDÁN',
            'estado_id' => '08',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASCENSIÓN',
            'estado_id' => '08',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACHÍNIVA',
            'estado_id' => '08',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BALLEZA',
            'estado_id' => '08',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BATOPILAS',
            'estado_id' => '08',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BOCOYNA',
            'estado_id' => '08',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUENAVENTURA',
            'estado_id' => '08',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMARGO',
            'estado_id' => '08',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARICHÍ',
            'estado_id' => '08',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CASAS GRANDES',
            'estado_id' => '08',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CORONADO',
            'estado_id' => '08',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYAME DEL SOTOL',
            'estado_id' => '08',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA CRUZ',
            'estado_id' => '08',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUHTÉMOC',
            'estado_id' => '08',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUSIHUIRIACHI',
            'estado_id' => '08',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIHUAHUA',
            'estado_id' => '08',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHÍNIPAS',
            'estado_id' => '08',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DELICIAS',
            'estado_id' => '08',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DR. BELISARIO DOMÍNGUEZ',
            'estado_id' => '08',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GALEANA',
            'estado_id' => '08',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ISABEL',
            'estado_id' => '08',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GÓMEZ FARÍAS',
            'estado_id' => '08',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GRAN MORELOS',
            'estado_id' => '08',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUACHOCHI',
            'estado_id' => '08',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE',
            'estado_id' => '08',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE Y CALVO',
            'estado_id' => '08',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUAZAPARES',
            'estado_id' => '08',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUERRERO',
            'estado_id' => '08',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO DEL PARRAL',
            'estado_id' => '08',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEJOTITÁN',
            'estado_id' => '08',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IGNACIO ZARAGOZA',
            'estado_id' => '08',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JANOS',
            'estado_id' => '08',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIMÉNEZ',
            'estado_id' => '08',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ',
            'estado_id' => '08',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JULIMES',
            'estado_id' => '08',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LÓPEZ',
            'estado_id' => '08',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MADERA',
            'estado_id' => '08',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGUARICHI',
            'estado_id' => '08',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MANUEL BENAVIDES',
            'estado_id' => '08',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATACHÍ',
            'estado_id' => '08',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATAMOROS',
            'estado_id' => '08',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEOQUI',
            'estado_id' => '08',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELOS',
            'estado_id' => '08',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORIS',
            'estado_id' => '08',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAMIQUIPA',
            'estado_id' => '08',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NONOAVA',
            'estado_id' => '08',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO CASAS GRANDES',
            'estado_id' => '08',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '08',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OJINAGA',
            'estado_id' => '08',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PRAXEDIS G. GUERRERO',
            'estado_id' => '08',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RIVA PALACIO',
            'estado_id' => '08',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROSALES',
            'estado_id' => '08',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROSARIO',
            'estado_id' => '08',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DE BORJA',
            'estado_id' => '08',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DE CONCHOS',
            'estado_id' => '08',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DEL ORO',
            'estado_id' => '08',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA BÁRBARA',
            'estado_id' => '08',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SATEVÓ',
            'estado_id' => '08',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAUCILLO',
            'estado_id' => '08',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMÓSACHIC',
            'estado_id' => '08',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL TULE',
            'estado_id' => '08',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URIQUE',
            'estado_id' => '08',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URUACHI',
            'estado_id' => '08',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE ZARAGOZA',
            'estado_id' => '08',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AZCAPOTZALCO',
            'estado_id' => '09',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYOACÁN',
            'estado_id' => '09',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAJIMALPA DE MORELOS',
            'estado_id' => '09',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUSTAVO A. MADERO',
            'estado_id' => '09',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IZTACALCO',
            'estado_id' => '09',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IZTAPALAPA',
            'estado_id' => '09',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA MAGDALENA CONTRERAS',
            'estado_id' => '09',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MILPA ALTA',
            'estado_id' => '09',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ÁLVARO OBREGÓN',
            'estado_id' => '09',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLÁHUAC',
            'estado_id' => '09',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALPAN',
            'estado_id' => '09',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHIMILCO',
            'estado_id' => '09',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '09',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUHTÉMOC',
            'estado_id' => '09',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIGUEL HIDALGO',
            'estado_id' => '09',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VENUSTIANO CARRANZA',
            'estado_id' => '09',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANATLÁN',
            'estado_id' => '10',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANELAS',
            'estado_id' => '10',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONETO DE COMONFORT',
            'estado_id' => '10',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUENCAMÉ',
            'estado_id' => '10',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DURANGO',
            'estado_id' => '10',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL SIMÓN BOLÍVAR',
            'estado_id' => '10',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GÓMEZ PALACIO',
            'estado_id' => '10',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE VICTORIA',
            'estado_id' => '10',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUANACEVÍ',
            'estado_id' => '10',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO',
            'estado_id' => '10',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'INDÉ',
            'estado_id' => '10',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LERDO',
            'estado_id' => '10',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAPIMÍ',
            'estado_id' => '10',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEZQUITAL',
            'estado_id' => '10',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAZAS',
            'estado_id' => '10',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'nombre DE DIOS',
            'estado_id' => '10',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '10',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL ORO',
            'estado_id' => '10',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTÁEZ',
            'estado_id' => '10',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PÁNUCO DE CORONADO',
            'estado_id' => '10',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PEÑÓN BLANCO',
            'estado_id' => '10',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'POANAS',
            'estado_id' => '10',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUEBLO NUEVO',
            'estado_id' => '10',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RODEO',
            'estado_id' => '10',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BERNARDO',
            'estado_id' => '10',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIMAS',
            'estado_id' => '10',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DE GUADALUPE',
            'estado_id' => '10',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DEL RÍO',
            'estado_id' => '10',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS DEL CORDERO',
            'estado_id' => '10',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO DEL GALLO',
            'estado_id' => '10',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CLARA',
            'estado_id' => '10',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO PAPASQUIARO',
            'estado_id' => '10',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SÚCHIL',
            'estado_id' => '10',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMAZULA',
            'estado_id' => '10',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEHUANES',
            'estado_id' => '10',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAHUALILO',
            'estado_id' => '10',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOPIA',
            'estado_id' => '10',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VICENTE GUERRERO',
            'estado_id' => '10',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO IDEAL',
            'estado_id' => '10',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABASOLO',
            'estado_id' => '11',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACÁMBARO',
            'estado_id' => '11',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL DE ALLENDE',
            'estado_id' => '11',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APASEO EL ALTO',
            'estado_id' => '11',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APASEO EL GRANDE',
            'estado_id' => '11',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATARJEA',
            'estado_id' => '11',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CELAYA',
            'estado_id' => '11',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MANUEL DOBLADO',
            'estado_id' => '11',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMONFORT',
            'estado_id' => '11',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CORONEO',
            'estado_id' => '11',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CORTAZAR',
            'estado_id' => '11',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUERÁMARO',
            'estado_id' => '11',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOCTOR MORA',
            'estado_id' => '11',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOLORES HIDALGO CUNA DE LA INDEPENDENCIA NACIONAL',
            'estado_id' => '11',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUANAJUATO',
            'estado_id' => '11',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUANÍMARO',
            'estado_id' => '11',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IRAPUATO',
            'estado_id' => '11',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JARAL DEL PROGRESO',
            'estado_id' => '11',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JERÉCUARO',
            'estado_id' => '11',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LEÓN',
            'estado_id' => '11',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOROLEÓN',
            'estado_id' => '11',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '11',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PÉNJAMO',
            'estado_id' => '11',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUEBLO NUEVO',
            'estado_id' => '11',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PURÍSIMA DEL RINCÓN',
            'estado_id' => '11',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROMITA',
            'estado_id' => '11',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALAMANCA',
            'estado_id' => '11',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALVATIERRA',
            'estado_id' => '11',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIEGO DE LA UNIÓN',
            'estado_id' => '11',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE',
            'estado_id' => '11',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DEL RINCÓN',
            'estado_id' => '11',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ ITURBIDE',
            'estado_id' => '11',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS DE LA PAZ',
            'estado_id' => '11',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA',
            'estado_id' => '11',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ DE JUVENTINO ROSAS',
            'estado_id' => '11',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO MARAVATÍO',
            'estado_id' => '11',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SILAO DE LA VICTORIA',
            'estado_id' => '11',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TARANDACUAO',
            'estado_id' => '11',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TARIMORO',
            'estado_id' => '11',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIERRA BLANCA',
            'estado_id' => '11',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URIANGATO',
            'estado_id' => '11',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE SANTIAGO',
            'estado_id' => '11',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VICTORIA',
            'estado_id' => '11',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLAGRÁN',
            'estado_id' => '11',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICHÚ',
            'estado_id' => '11',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YURIRIA',
            'estado_id' => '11',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAPULCO DE JUÁREZ',
            'estado_id' => '12',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUACUOTZINGO',
            'estado_id' => '12',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AJUCHITLÁN DEL PROGRESO',
            'estado_id' => '12',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALCOZAUCA DE GUERRERO',
            'estado_id' => '12',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALPOYECA',
            'estado_id' => '12',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APAXTLA',
            'estado_id' => '12',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARCELIA',
            'estado_id' => '12',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATENANGO DEL RÍO',
            'estado_id' => '12',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLAMAJALCINGO DEL MONTE',
            'estado_id' => '12',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLIXTAC',
            'estado_id' => '12',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOYAC DE ÁLVAREZ',
            'estado_id' => '12',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYUTLA DE LOS LIBRES',
            'estado_id' => '12',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AZOYÚ',
            'estado_id' => '12',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '12',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUENAVISTA DE CUÉLLAR',
            'estado_id' => '12',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COAHUAYUTLA DE JOSÉ MARÍA IZAZAGA',
            'estado_id' => '12',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COCULA',
            'estado_id' => '12',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COPALA',
            'estado_id' => '12',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COPALILLO',
            'estado_id' => '12',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COPANATOYAC',
            'estado_id' => '12',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYUCA DE BENÍTEZ',
            'estado_id' => '12',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYUCA DE CATALÁN',
            'estado_id' => '12',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAJINICUILAPA',
            'estado_id' => '12',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUALÁC',
            'estado_id' => '12',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTEPEC',
            'estado_id' => '12',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUETZALA DEL PROGRESO',
            'estado_id' => '12',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUTZAMALA DE PINZÓN',
            'estado_id' => '12',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILAPA DE ÁLVAREZ',
            'estado_id' => '12',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILPANCINGO DE LOS BRAVO',
            'estado_id' => '12',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FLORENCIO VILLARREAL',
            'estado_id' => '12',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL CANUTO A. NERI',
            'estado_id' => '12',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL HELIODORO CASTILLO',
            'estado_id' => '12',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAMUXTITLÁN',
            'estado_id' => '12',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUITZUCO DE LOS FIGUEROA',
            'estado_id' => '12',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IGUALA DE LA INDEPENDENCIA',
            'estado_id' => '12',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IGUALAPA',
            'estado_id' => '12',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXCATEOPAN DE CUAUHTÉMOC',
            'estado_id' => '12',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIHUATANEJO DE AZUETA',
            'estado_id' => '12',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN R. ESCUDERO',
            'estado_id' => '12',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LEONARDO BRAVO',
            'estado_id' => '12',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MALINALTEPEC',
            'estado_id' => '12',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÁRTIR DE CUILAPAN',
            'estado_id' => '12',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'METLATÓNOC',
            'estado_id' => '12',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOCHITLÁN',
            'estado_id' => '12',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OLINALÁ',
            'estado_id' => '12',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OMETEPEC',
            'estado_id' => '12',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PEDRO ASCENCIO ALQUISIRAS',
            'estado_id' => '12',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PETATLÁN',
            'estado_id' => '12',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PILCAYA',
            'estado_id' => '12',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUNGARABATO',
            'estado_id' => '12',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUECHULTENANGO',
            'estado_id' => '12',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS ACATLÁN',
            'estado_id' => '12',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARCOS',
            'estado_id' => '12',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TOTOLAPAN',
            'estado_id' => '12',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAXCO DE ALARCÓN',
            'estado_id' => '12',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOANAPA',
            'estado_id' => '12',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TÉCPAN DE GALEANA',
            'estado_id' => '12',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TELOLOAPAN',
            'estado_id' => '12',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPECOACUILCO DE TRUJANO',
            'estado_id' => '12',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETIPAC',
            'estado_id' => '12',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIXTLA DE GUERRERO',
            'estado_id' => '12',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOACHISTLAHUACA',
            'estado_id' => '12',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOAPA',
            'estado_id' => '12',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALCHAPA',
            'estado_id' => '12',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALIXTAQUILLA DE MALDONADO',
            'estado_id' => '12',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAPA DE COMONFORT',
            'estado_id' => '12',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAPEHUALA',
            'estado_id' => '12',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA UNIÓN DE ISIDORO MONTES DE OCA',
            'estado_id' => '12',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALPATLÁHUAC',
            'estado_id' => '12',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHIHUEHUETLÁN',
            'estado_id' => '12',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHISTLAHUACA',
            'estado_id' => '12',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN TABLAS',
            'estado_id' => '12',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIRÁNDARO',
            'estado_id' => '12',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZITLALA',
            'estado_id' => '12',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EDUARDO NERI',
            'estado_id' => '12',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATEPEC',
            'estado_id' => '12',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARQUELIA',
            'estado_id' => '12',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COCHOAPA EL GRANDE',
            'estado_id' => '12',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOSÉ JOAQUÍN DE HERRERA',
            'estado_id' => '12',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUCHITÁN',
            'estado_id' => '12',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ILIATENCO',
            'estado_id' => '12',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATLÁN',
            'estado_id' => '13',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAXOCHITLÁN',
            'estado_id' => '13',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACTOPAN',
            'estado_id' => '13',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AGUA BLANCA DE ITURBIDE',
            'estado_id' => '13',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AJACUBA',
            'estado_id' => '13',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALFAJAYUCAN',
            'estado_id' => '13',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALMOLOYA',
            'estado_id' => '13',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APAN',
            'estado_id' => '13',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL ARENAL',
            'estado_id' => '13',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATITALAQUIA',
            'estado_id' => '13',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLAPEXCO',
            'estado_id' => '13',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOTONILCO EL GRANDE',
            'estado_id' => '13',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOTONILCO DE TULA',
            'estado_id' => '13',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALNALI',
            'estado_id' => '13',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARDONAL',
            'estado_id' => '13',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTEPEC DE HINOJOSA',
            'estado_id' => '13',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPANTONGO',
            'estado_id' => '13',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPULHUACÁN',
            'estado_id' => '13',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILCUAUTLA',
            'estado_id' => '13',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ELOXOCHITLÁN',
            'estado_id' => '13',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMILIANO ZAPATA',
            'estado_id' => '13',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EPAZOYUCAN',
            'estado_id' => '13',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRANCISCO I. MADERO',
            'estado_id' => '13',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUASCA DE OCAMPO',
            'estado_id' => '13',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAUTLA',
            'estado_id' => '13',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAZALINGO',
            'estado_id' => '13',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETLA',
            'estado_id' => '13',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEJUTLA DE REYES',
            'estado_id' => '13',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUICHAPAN',
            'estado_id' => '13',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXMIQUILPAN',
            'estado_id' => '13',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JACALA DE LEDEZMA',
            'estado_id' => '13',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALTOCÁN',
            'estado_id' => '13',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ HIDALGO',
            'estado_id' => '13',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOLOTLA',
            'estado_id' => '13',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'METEPEC',
            'estado_id' => '13',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN METZQUITITLÁN',
            'estado_id' => '13',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'METZTITLÁN',
            'estado_id' => '13',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINERAL DEL CHICO',
            'estado_id' => '13',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINERAL DEL MONTE',
            'estado_id' => '13',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA MISIÓN',
            'estado_id' => '13',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIXQUIAHUALA DE JUÁREZ',
            'estado_id' => '13',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOLANGO DE ESCAMILLA',
            'estado_id' => '13',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NICOLÁS FLORES',
            'estado_id' => '13',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOPALA DE VILLAGRÁN',
            'estado_id' => '13',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OMITLÁN DE JUÁREZ',
            'estado_id' => '13',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE ORIZATLÁN',
            'estado_id' => '13',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PACULA',
            'estado_id' => '13',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PACHUCA DE SOTO',
            'estado_id' => '13',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PISAFLORES',
            'estado_id' => '13',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PROGRESO DE OBREGÓN',
            'estado_id' => '13',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINERAL DE LA REFORMA',
            'estado_id' => '13',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN TLAXIACA',
            'estado_id' => '13',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLO TUTOTEPEC',
            'estado_id' => '13',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SALVADOR',
            'estado_id' => '13',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO DE ANAYA',
            'estado_id' => '13',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TULANTEPEC DE LUGO GUERRERO',
            'estado_id' => '13',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SINGUILUCAN',
            'estado_id' => '13',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TASQUILLO',
            'estado_id' => '13',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOZAUTLA',
            'estado_id' => '13',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENANGO DE DORIA',
            'estado_id' => '13',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEAPULCO',
            'estado_id' => '13',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEHUACÁN DE GUERRERO',
            'estado_id' => '13',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEJI DEL RÍO DE OCAMPO',
            'estado_id' => '13',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETITLÁN',
            'estado_id' => '13',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETEPANGO',
            'estado_id' => '13',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE TEZONTEPEC',
            'estado_id' => '13',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEZONTEPEC DE ALDAMA',
            'estado_id' => '13',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIANGUISTENGO',
            'estado_id' => '13',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIZAYUCA',
            'estado_id' => '13',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAHUELILPAN',
            'estado_id' => '13',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAHUILTEPA',
            'estado_id' => '13',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLANALAPA',
            'estado_id' => '13',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLANCHINOL',
            'estado_id' => '13',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAXCOAPAN',
            'estado_id' => '13',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOLCAYUCA',
            'estado_id' => '13',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULA DE ALLENDE',
            'estado_id' => '13',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULANCINGO DE BRAVO',
            'estado_id' => '13',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHIATIPAN',
            'estado_id' => '13',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHICOATLÁN',
            'estado_id' => '13',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAHUALICA',
            'estado_id' => '13',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACUALTIPÁN DE ÁNGELES',
            'estado_id' => '13',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTLÁN DE JUÁREZ',
            'estado_id' => '13',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZEMPOALA',
            'estado_id' => '13',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIMAPÁN',
            'estado_id' => '13',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATIC',
            'estado_id' => '14',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATLÁN DE JUÁREZ',
            'estado_id' => '14',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUALULCO DE MERCADO',
            'estado_id' => '14',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMACUECA',
            'estado_id' => '14',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATITÁN',
            'estado_id' => '14',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMECA',
            'estado_id' => '14',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUANITO DE ESCOBEDO',
            'estado_id' => '14',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARANDAS',
            'estado_id' => '14',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL ARENAL',
            'estado_id' => '14',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATEMAJAC DE BRIZUELA',
            'estado_id' => '14',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATENGO',
            'estado_id' => '14',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATENGUILLO',
            'estado_id' => '14',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOTONILCO EL ALTO',
            'estado_id' => '14',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOYAC',
            'estado_id' => '14',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AUTLÁN DE NAVARRO',
            'estado_id' => '14',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYOTLÁN',
            'estado_id' => '14',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYUTLA',
            'estado_id' => '14',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA BARCA',
            'estado_id' => '14',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BOLAÑOS',
            'estado_id' => '14',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CABO CORRIENTES',
            'estado_id' => '14',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CASIMIRO CASTILLO',
            'estado_id' => '14',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIHUATLÁN',
            'estado_id' => '14',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTLÁN EL GRANDE',
            'estado_id' => '14',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COCULA',
            'estado_id' => '14',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COLOTLÁN',
            'estado_id' => '14',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONCEPCIÓN DE BUENOS AIRES',
            'estado_id' => '14',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTITLÁN DE GARCÍA BARRAGÁN',
            'estado_id' => '14',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTLA',
            'estado_id' => '14',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUQUÍO',
            'estado_id' => '14',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPALA',
            'estado_id' => '14',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIMALTITÁN',
            'estado_id' => '14',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIQUILISTLÁN',
            'estado_id' => '14',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DEGOLLADO',
            'estado_id' => '14',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EJUTLA',
            'estado_id' => '14',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ENCARNACIÓN DE DÍAZ',
            'estado_id' => '14',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ETZATLÁN',
            'estado_id' => '14',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL GRULLO',
            'estado_id' => '14',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUACHINANGO',
            'estado_id' => '14',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALAJARA',
            'estado_id' => '14',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HOSTOTIPAQUILLO',
            'estado_id' => '14',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEJÚCAR',
            'estado_id' => '14',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEJUQUILLA EL ALTO',
            'estado_id' => '14',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA HUERTA',
            'estado_id' => '14',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLAHUACÁN DE LOS MEMBRILLOS',
            'estado_id' => '14',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLAHUACÁN DEL RÍO',
            'estado_id' => '14',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALOSTOTITLÁN',
            'estado_id' => '14',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JAMAY',
            'estado_id' => '14',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JESÚS MARÍA',
            'estado_id' => '14',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JILOTLÁN DE LOS DOLORES',
            'estado_id' => '14',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOCOTEPEC',
            'estado_id' => '14',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUANACATLÁN',
            'estado_id' => '14',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUCHITLÁN',
            'estado_id' => '14',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAGOS DE MORENO',
            'estado_id' => '14',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL LIMÓN',
            'estado_id' => '14',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA',
            'estado_id' => '14',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DEL ORO',
            'estado_id' => '14',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA MANZANILLA DE LA PAZ',
            'estado_id' => '14',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MASCOTA',
            'estado_id' => '14',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZAMITLA',
            'estado_id' => '14',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEXTICACÁN',
            'estado_id' => '14',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEZQUITIC',
            'estado_id' => '14',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIXTLÁN',
            'estado_id' => '14',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOTLÁN',
            'estado_id' => '14',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OJUELOS DE JALISCO',
            'estado_id' => '14',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PIHUAMO',
            'estado_id' => '14',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PONCITLÁN',
            'estado_id' => '14',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUERTO VALLARTA',
            'estado_id' => '14',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA PURIFICACIÓN',
            'estado_id' => '14',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUITUPAN',
            'estado_id' => '14',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL SALTO',
            'estado_id' => '14',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL DE LA BARRANCA',
            'estado_id' => '14',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIEGO DE ALEJANDRÍA',
            'estado_id' => '14',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DE LOS LAGOS',
            'estado_id' => '14',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JULIÁN',
            'estado_id' => '14',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARCOS',
            'estado_id' => '14',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN DE BOLAÑOS',
            'estado_id' => '14',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN HIDALGO',
            'estado_id' => '14',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL EL ALTO',
            'estado_id' => '14',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GÓMEZ FARÍAS',
            'estado_id' => '14',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN DEL OESTE',
            'estado_id' => '14',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DE LOS ÁNGELES',
            'estado_id' => '14',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAYULA',
            'estado_id' => '14',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TALA',
            'estado_id' => '14',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TALPA DE ALLENDE',
            'estado_id' => '14',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMAZULA DE GORDIANO',
            'estado_id' => '14',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAPALPA',
            'estado_id' => '14',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECALITLÁN',
            'estado_id' => '14',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOLOTLÁN',
            'estado_id' => '14',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECHALUTA DE MONTENEGRO',
            'estado_id' => '14',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENAMAXTLÁN',
            'estado_id' => '14',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOCALTICHE',
            'estado_id' => '14',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOCUITATLÁN DE CORONA',
            'estado_id' => '14',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPATITLÁN DE MORELOS',
            'estado_id' => '14',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEQUILA',
            'estado_id' => '14',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEUCHITLÁN',
            'estado_id' => '14',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIZAPÁN EL ALTO',
            'estado_id' => '14',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAJOMULCO DE ZÚÑIGA',
            'estado_id' => '14',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TLAQUEPAQUE',
            'estado_id' => '14',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOLIMÁN',
            'estado_id' => '14',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOMATLÁN',
            'estado_id' => '14',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONALÁ',
            'estado_id' => '14',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONAYA',
            'estado_id' => '14',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONILA',
            'estado_id' => '14',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTATICHE',
            'estado_id' => '14',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTOTLÁN',
            'estado_id' => '14',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXCACUESCO',
            'estado_id' => '14',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXCUECA',
            'estado_id' => '14',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXPAN',
            'estado_id' => '14',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UNIÓN DE SAN ANTONIO',
            'estado_id' => '14',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UNIÓN DE TULA',
            'estado_id' => '14',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE GUADALUPE',
            'estado_id' => '14',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE JUÁREZ',
            'estado_id' => '14',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN GABRIEL',
            'estado_id' => '14',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA CORONA',
            'estado_id' => '14',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA GUERRERO',
            'estado_id' => '14',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA HIDALGO',
            'estado_id' => '14',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAÑADAS DE OBREGÓN',
            'estado_id' => '14',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAHUALICA DE GONZÁLEZ GALLO',
            'estado_id' => '14',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACOALCO DE TORRES',
            'estado_id' => '14',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOPAN',
            'estado_id' => '14',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTILTIC',
            'estado_id' => '14',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN DE VADILLO',
            'estado_id' => '14',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTLÁN DEL REY',
            'estado_id' => '14',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTLANEJO',
            'estado_id' => '14',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN IGNACIO CERRO GORDO',
            'estado_id' => '14',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAMBAY DE RUÍZ CASTAÑEDA',
            'estado_id' => '15',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACOLMAN',
            'estado_id' => '15',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACULCO',
            'estado_id' => '15',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALMOLOYA DE ALQUISIRAS',
            'estado_id' => '15',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALMOLOYA DE JUÁREZ',
            'estado_id' => '15',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALMOLOYA DEL RÍO',
            'estado_id' => '15',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMANALCO',
            'estado_id' => '15',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATEPEC',
            'estado_id' => '15',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMECAMECA',
            'estado_id' => '15',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APAXCO',
            'estado_id' => '15',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATENCO',
            'estado_id' => '15',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATIZAPÁN',
            'estado_id' => '15',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATIZAPÁN DE ZARAGOZA',
            'estado_id' => '15',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLACOMULCO',
            'estado_id' => '15',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLAUTLA',
            'estado_id' => '15',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AXAPUSCO',
            'estado_id' => '15',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYAPANGO',
            'estado_id' => '15',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALIMAYA',
            'estado_id' => '15',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAPULHUAC',
            'estado_id' => '15',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COACALCO DE BERRIOZÁBAL',
            'estado_id' => '15',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATEPEC HARINAS',
            'estado_id' => '15',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COCOTITLÁN',
            'estado_id' => '15',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYOTEPEC',
            'estado_id' => '15',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTITLÁN',
            'estado_id' => '15',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALCO',
            'estado_id' => '15',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPA DE MOTA',
            'estado_id' => '15',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPULTEPEC',
            'estado_id' => '15',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAUTLA',
            'estado_id' => '15',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICOLOAPAN',
            'estado_id' => '15',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICONCUAC',
            'estado_id' => '15',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIMALHUACÁN',
            'estado_id' => '15',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DONATO GUERRA',
            'estado_id' => '15',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ECATEPEC DE MORELOS',
            'estado_id' => '15',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ECATZINGO',
            'estado_id' => '15',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETOCA',
            'estado_id' => '15',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYPOXTLA',
            'estado_id' => '15',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIXQUILUCAN',
            'estado_id' => '15',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ISIDRO FABELA',
            'estado_id' => '15',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTAPALUCA',
            'estado_id' => '15',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTAPAN DE LA SAL',
            'estado_id' => '15',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTAPAN DEL ORO',
            'estado_id' => '15',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLAHUACA',
            'estado_id' => '15',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALATLACO',
            'estado_id' => '15',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALTENCO',
            'estado_id' => '15',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JILOTEPEC',
            'estado_id' => '15',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JILOTZINGO',
            'estado_id' => '15',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIQUIPILCO',
            'estado_id' => '15',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOCOTITLÁN',
            'estado_id' => '15',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOQUICINGO',
            'estado_id' => '15',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUCHITEPEC',
            'estado_id' => '15',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LERMA',
            'estado_id' => '15',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MALINALCO',
            'estado_id' => '15',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MELCHOR OCAMPO',
            'estado_id' => '15',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'METEPEC',
            'estado_id' => '15',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEXICALTZINGO',
            'estado_id' => '15',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELOS',
            'estado_id' => '15',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAUCALPAN DE JUÁREZ',
            'estado_id' => '15',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NEZAHUALCÓYOTL',
            'estado_id' => '15',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NEXTLALPAN',
            'estado_id' => '15',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NICOLÁS ROMERO',
            'estado_id' => '15',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOPALTEPEC',
            'estado_id' => '15',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOYOACAC',
            'estado_id' => '15',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCUILAN',
            'estado_id' => '15',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL ORO',
            'estado_id' => '15',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTUMBA',
            'estado_id' => '15',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTZOLOAPAN',
            'estado_id' => '15',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTZOLOTEPEC',
            'estado_id' => '15',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OZUMBA',
            'estado_id' => '15',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAPALOTLA',
            'estado_id' => '15',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA PAZ',
            'estado_id' => '15',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'POLOTITLÁN',
            'estado_id' => '15',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAYÓN',
            'estado_id' => '15',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO LA ISLA',
            'estado_id' => '15',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE DEL PROGRESO',
            'estado_id' => '15',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN DE LAS PIRÁMIDES',
            'estado_id' => '15',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO ATENCO',
            'estado_id' => '15',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SIMÓN DE GUERRERO',
            'estado_id' => '15',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS',
            'estado_id' => '15',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOYANIQUILPAN DE JUÁREZ',
            'estado_id' => '15',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SULTEPEC',
            'estado_id' => '15',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECÁMAC',
            'estado_id' => '15',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEJUPILCO',
            'estado_id' => '15',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMAMATLA',
            'estado_id' => '15',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMASCALAPA',
            'estado_id' => '15',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMASCALCINGO',
            'estado_id' => '15',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMASCALTEPEC',
            'estado_id' => '15',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMOAYA',
            'estado_id' => '15',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENANCINGO',
            'estado_id' => '15',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENANGO DEL AIRE',
            'estado_id' => '15',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENANGO DEL VALLE',
            'estado_id' => '15',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOLOYUCAN',
            'estado_id' => '15',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOTIHUACÁN',
            'estado_id' => '15',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETLAOXTOC',
            'estado_id' => '15',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETLIXPA',
            'estado_id' => '15',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPOTZOTLÁN',
            'estado_id' => '15',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEQUIXQUIAC',
            'estado_id' => '15',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXCALTITLÁN',
            'estado_id' => '15',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXCALYACAC',
            'estado_id' => '15',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXCOCO',
            'estado_id' => '15',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEZOYUCA',
            'estado_id' => '15',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIANGUISTENCO',
            'estado_id' => '15',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIMILPAN',
            'estado_id' => '15',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALMANALCO',
            'estado_id' => '15',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALNEPANTLA DE BAZ',
            'estado_id' => '15',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLATLAYA',
            'estado_id' => '15',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOLUCA',
            'estado_id' => '15',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONATICO',
            'estado_id' => '15',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULTEPEC',
            'estado_id' => '15',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULTITLÁN',
            'estado_id' => '15',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE BRAVO',
            'estado_id' => '15',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ALLENDE',
            'estado_id' => '15',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DEL CARBÓN',
            'estado_id' => '15',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA GUERRERO',
            'estado_id' => '15',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA VICTORIA',
            'estado_id' => '15',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XONACATLÁN',
            'estado_id' => '15',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACAZONAPAN',
            'estado_id' => '15',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACUALPAN',
            'estado_id' => '15',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZINACANTEPEC',
            'estado_id' => '15',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZUMPAHUACÁN',
            'estado_id' => '15',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZUMPANGO',
            'estado_id' => '15',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTITLÁN IZCALLI',
            'estado_id' => '15',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE DE CHALCO SOLIDARIDAD',
            'estado_id' => '15',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LUVIANOS',
            'estado_id' => '15',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ DEL RINCÓN',
            'estado_id' => '15',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONANITLA',
            'estado_id' => '15',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACUITZIO',
            'estado_id' => '16',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AGUILILLA',
            'estado_id' => '16',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ÁLVARO OBREGÓN',
            'estado_id' => '16',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANGAMACUTIRO',
            'estado_id' => '16',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANGANGUEO',
            'estado_id' => '16',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APATZINGÁN',
            'estado_id' => '16',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APORO',
            'estado_id' => '16',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AQUILA',
            'estado_id' => '16',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARIO',
            'estado_id' => '16',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARTEAGA',
            'estado_id' => '16',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BRISEÑAS',
            'estado_id' => '16',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUENAVISTA',
            'estado_id' => '16',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARÁCUARO',
            'estado_id' => '16',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COAHUAYANA',
            'estado_id' => '16',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COALCOMÁN DE VÁZQUEZ PALLARES',
            'estado_id' => '16',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COENEO',
            'estado_id' => '16',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONTEPEC',
            'estado_id' => '16',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COPÁNDARO',
            'estado_id' => '16',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COTIJA',
            'estado_id' => '16',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUITZEO',
            'estado_id' => '16',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHARAPAN',
            'estado_id' => '16',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHARO',
            'estado_id' => '16',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAVINDA',
            'estado_id' => '16',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHERÁN',
            'estado_id' => '16',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILCHOTA',
            'estado_id' => '16',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHINICUILA',
            'estado_id' => '16',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHUCÁNDIRO',
            'estado_id' => '16',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHURINTZIO',
            'estado_id' => '16',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHURUMUCO',
            'estado_id' => '16',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ECUANDUREO',
            'estado_id' => '16',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EPITACIO HUERTA',
            'estado_id' => '16',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ERONGARÍCUARO',
            'estado_id' => '16',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GABRIEL ZAMORA',
            'estado_id' => '16',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO',
            'estado_id' => '16',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA HUACANA',
            'estado_id' => '16',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUANDACAREO',
            'estado_id' => '16',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUANIQUEO',
            'estado_id' => '16',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUETAMO',
            'estado_id' => '16',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIRAMBA',
            'estado_id' => '16',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'INDAPARAPEO',
            'estado_id' => '16',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IRIMBO',
            'estado_id' => '16',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLÁN',
            'estado_id' => '16',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JACONA',
            'estado_id' => '16',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIMÉNEZ',
            'estado_id' => '16',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIQUILPAN',
            'estado_id' => '16',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ',
            'estado_id' => '16',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUNGAPEO',
            'estado_id' => '16',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAGUNILLAS',
            'estado_id' => '16',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MADERO',
            'estado_id' => '16',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARAVATÍO',
            'estado_id' => '16',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARCOS CASTELLANOS',
            'estado_id' => '16',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LÁZARO CÁRDENAS',
            'estado_id' => '16',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELIA',
            'estado_id' => '16',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELOS',
            'estado_id' => '16',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÚGICA',
            'estado_id' => '16',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAHUATZEN',
            'estado_id' => '16',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOCUPÉTARO',
            'estado_id' => '16',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO PARANGARICUTIRO',
            'estado_id' => '16',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO URECHO',
            'estado_id' => '16',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUMARÁN',
            'estado_id' => '16',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '16',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAJACUARÁN',
            'estado_id' => '16',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANINDÍCUARO',
            'estado_id' => '16',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PARÁCUARO',
            'estado_id' => '16',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PARACHO',
            'estado_id' => '16',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PÁTZCUARO',
            'estado_id' => '16',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PENJAMILLO',
            'estado_id' => '16',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PERIBÁN',
            'estado_id' => '16',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA PIEDAD',
            'estado_id' => '16',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PURÉPERO',
            'estado_id' => '16',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PURUÁNDIRO',
            'estado_id' => '16',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUERÉNDARO',
            'estado_id' => '16',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUIROGA',
            'estado_id' => '16',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COJUMATLÁN DE RÉGULES',
            'estado_id' => '16',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS REYES',
            'estado_id' => '16',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAHUAYO',
            'estado_id' => '16',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS',
            'estado_id' => '16',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA MAYA',
            'estado_id' => '16',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALVADOR ESCALANTE',
            'estado_id' => '16',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SENGUIO',
            'estado_id' => '16',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUSUPUATO',
            'estado_id' => '16',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TACÁMBARO',
            'estado_id' => '16',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANCÍTARO',
            'estado_id' => '16',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANGAMANDAPIO',
            'estado_id' => '16',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANGANCÍCUARO',
            'estado_id' => '16',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANHUATO',
            'estado_id' => '16',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TARETAN',
            'estado_id' => '16',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TARÍMBARO',
            'estado_id' => '16',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPALCATEPEC',
            'estado_id' => '16',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TINGAMBATO',
            'estado_id' => '16',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TINGÜINDÍN',
            'estado_id' => '16',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIQUICHEO DE NICOLÁS ROMERO',
            'estado_id' => '16',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALPUJAHUA',
            'estado_id' => '16',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAZAZALCA',
            'estado_id' => '16',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOCUMBO',
            'estado_id' => '16',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUMBISCATÍO',
            'estado_id' => '16',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TURICATO',
            'estado_id' => '16',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXPAN',
            'estado_id' => '16',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUZANTLA',
            'estado_id' => '16',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZINTZUNTZAN',
            'estado_id' => '16',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZITZIO',
            'estado_id' => '16',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URUAPAN',
            'estado_id' => '16',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VENUSTIANO CARRANZA',
            'estado_id' => '16',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLAMAR',
            'estado_id' => '16',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VISTA HERMOSA',
            'estado_id' => '16',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YURÉCUARO',
            'estado_id' => '16',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACAPU',
            'estado_id' => '16',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAMORA',
            'estado_id' => '16',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZINÁPARO',
            'estado_id' => '16',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZINAPÉCUARO',
            'estado_id' => '16',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIRACUARETIRO',
            'estado_id' => '16',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZITÁCUARO',
            'estado_id' => '16',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOSÉ SIXTO VERDUZCO',
            'estado_id' => '16',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMACUZAC',
            'estado_id' => '17',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLATLAHUCAN',
            'estado_id' => '17',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AXOCHIAPAN',
            'estado_id' => '17',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYALA',
            'estado_id' => '17',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATLÁN DEL RÍO',
            'estado_id' => '17',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTLA',
            'estado_id' => '17',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUERNAVACA',
            'estado_id' => '17',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMILIANO ZAPATA',
            'estado_id' => '17',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUITZILAC',
            'estado_id' => '17',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JANTETELCO',
            'estado_id' => '17',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIUTEPEC',
            'estado_id' => '17',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOJUTLA',
            'estado_id' => '17',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JONACATEPEC',
            'estado_id' => '17',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATEPEC',
            'estado_id' => '17',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIACATLÁN',
            'estado_id' => '17',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCUITUCO',
            'estado_id' => '17',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUENTE DE IXTLA',
            'estado_id' => '17',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMIXCO',
            'estado_id' => '17',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPALCINGO',
            'estado_id' => '17',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPOZTLÁN',
            'estado_id' => '17',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETECALA',
            'estado_id' => '17',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETELA DEL VOLCÁN',
            'estado_id' => '17',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALNEPANTLA',
            'estado_id' => '17',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALTIZAPÁN DE ZAPATA',
            'estado_id' => '17',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAQUILTENANGO',
            'estado_id' => '17',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAYACAPAN',
            'estado_id' => '17',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTOLAPAN',
            'estado_id' => '17',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHITEPEC',
            'estado_id' => '17',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAUTEPEC',
            'estado_id' => '17',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YECAPIXTLA',
            'estado_id' => '17',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACATEPEC',
            'estado_id' => '17',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACUALPAN DE AMILPAS',
            'estado_id' => '17',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMOAC',
            'estado_id' => '17',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAPONETA',
            'estado_id' => '18',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUACATLÁN',
            'estado_id' => '18',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATLÁN DE CAÑAS',
            'estado_id' => '18',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMPOSTELA',
            'estado_id' => '18',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAJICORI',
            'estado_id' => '18',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLÁN DEL RÍO',
            'estado_id' => '18',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALA',
            'estado_id' => '18',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALISCO',
            'estado_id' => '18',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DEL NAYAR',
            'estado_id' => '18',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROSAMORADA',
            'estado_id' => '18',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RUÍZ',
            'estado_id' => '18',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BLAS',
            'estado_id' => '18',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO LAGUNILLAS',
            'estado_id' => '18',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DEL ORO',
            'estado_id' => '18',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO IXCUINTLA',
            'estado_id' => '18',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECUALA',
            'estado_id' => '18',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPIC',
            'estado_id' => '18',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXPAN',
            'estado_id' => '18',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA YESCA',
            'estado_id' => '18',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BAHÍA DE BANDERAS',
            'estado_id' => '18',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABASOLO',
            'estado_id' => '19',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AGUALEGUAS',
            'estado_id' => '19',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS ALDAMAS',
            'estado_id' => '19',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALLENDE',
            'estado_id' => '19',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANÁHUAC',
            'estado_id' => '19',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APODACA',
            'estado_id' => '19',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARAMBERRI',
            'estado_id' => '19',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUSTAMANTE',
            'estado_id' => '19',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CADEREYTA JIMÉNEZ',
            'estado_id' => '19',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL CARMEN',
            'estado_id' => '19',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CERRALVO',
            'estado_id' => '19',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIÉNEGA DE FLORES',
            'estado_id' => '19',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHINA',
            'estado_id' => '19',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOCTOR ARROYO',
            'estado_id' => '19',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOCTOR COSS',
            'estado_id' => '19',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOCTOR GONZÁLEZ',
            'estado_id' => '19',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GALEANA',
            'estado_id' => '19',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GARCÍA',
            'estado_id' => '19',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO GARZA GARCÍA',
            'estado_id' => '19',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL BRAVO',
            'estado_id' => '19',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL ESCOBEDO',
            'estado_id' => '19',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL TERÁN',
            'estado_id' => '19',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL TREVIÑO',
            'estado_id' => '19',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL ZARAGOZA',
            'estado_id' => '19',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL ZUAZUA',
            'estado_id' => '19',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE',
            'estado_id' => '19',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS HERRERAS',
            'estado_id' => '19',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIGUERAS',
            'estado_id' => '19',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUALAHUISES',
            'estado_id' => '19',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ITURBIDE',
            'estado_id' => '19',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUÁREZ',
            'estado_id' => '19',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAMPAZOS DE NARANJO',
            'estado_id' => '19',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LINARES',
            'estado_id' => '19',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARÍN',
            'estado_id' => '19',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MELCHOR OCAMPO',
            'estado_id' => '19',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIER Y NORIEGA',
            'estado_id' => '19',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINA',
            'estado_id' => '19',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONTEMORELOS',
            'estado_id' => '19',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONTERREY',
            'estado_id' => '19',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PARÁS',
            'estado_id' => '19',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PESQUERÍA',
            'estado_id' => '19',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS RAMONES',
            'estado_id' => '19',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAYONES',
            'estado_id' => '19',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SABINAS HIDALGO',
            'estado_id' => '19',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALINAS VICTORIA',
            'estado_id' => '19',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS DE LOS GARZA',
            'estado_id' => '19',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO',
            'estado_id' => '19',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA',
            'estado_id' => '19',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO',
            'estado_id' => '19',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLECILLO',
            'estado_id' => '19',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLALDAMA',
            'estado_id' => '19',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABEJONES',
            'estado_id' => '20',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATLÁN DE PÉREZ FIGUEROA',
            'estado_id' => '20',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN CACALOTEPEC',
            'estado_id' => '20',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN CUYOTEPEJI',
            'estado_id' => '20',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN IXTALTEPEC',
            'estado_id' => '20',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN NOCHIXTLÁN',
            'estado_id' => '20',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN OCOTLÁN',
            'estado_id' => '20',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASUNCIÓN TLACOLULITA',
            'estado_id' => '20',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYOTZINTEPEC',
            'estado_id' => '20',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL BARRIO DE LA SOLEDAD',
            'estado_id' => '20',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALIHUALÁ',
            'estado_id' => '20',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANDELARIA LOXICHA',
            'estado_id' => '20',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIÉNEGA DE ZIMATLÁN',
            'estado_id' => '20',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIUDAD IXTEPEC',
            'estado_id' => '20',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATECAS ALTAS',
            'estado_id' => '20',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COICOYÁN DE LAS FLORES',
            'estado_id' => '20',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA COMPAÑÍA',
            'estado_id' => '20',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONCEPCIÓN BUENAVISTA',
            'estado_id' => '20',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONCEPCIÓN PÁPALO',
            'estado_id' => '20',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONSTANCIA DEL ROSARIO',
            'estado_id' => '20',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSOLAPA',
            'estado_id' => '20',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSOLTEPEC',
            'estado_id' => '20',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUILÁPAM DE GUERRERO',
            'estado_id' => '20',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUYAMECALCO VILLA DE ZARAGOZA',
            'estado_id' => '20',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAHUITES',
            'estado_id' => '20',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALCATONGO DE HIDALGO',
            'estado_id' => '20',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIQUIHUITLÁN DE BENITO JUÁREZ',
            'estado_id' => '20',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HEROICA CIUDAD DE EJUTLA DE CRESPO',
            'estado_id' => '20',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ELOXOCHITLÁN DE FLORES MAGÓN',
            'estado_id' => '20',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL ESPINAL',
            'estado_id' => '20',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMAZULÁPAM DEL ESPÍRITU SANTO',
            'estado_id' => '20',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRESNILLO DE TRUJANO',
            'estado_id' => '20',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE ETLA',
            'estado_id' => '20',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE DE RAMÍREZ',
            'estado_id' => '20',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUELATAO DE JUÁREZ',
            'estado_id' => '20',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUEVEA DE HUMBOLDT',
            'estado_id' => '20',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MESONES HIDALGO',
            'estado_id' => '20',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA HIDALGO',
            'estado_id' => '20',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HEROICA CIUDAD DE HUAJUAPAN DE LEÓN',
            'estado_id' => '20',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAUTEPEC',
            'estado_id' => '20',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAUTLA DE JIMÉNEZ',
            'estado_id' => '20',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTLÁN DE JUÁREZ',
            'estado_id' => '20',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HEROICA CIUDAD DE JUCHITÁN DE ZARAGOZA',
            'estado_id' => '20',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOMA BONITA',
            'estado_id' => '20',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA APASCO',
            'estado_id' => '20',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA JALTEPEC',
            'estado_id' => '20',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MAGDALENA JICOTLÁN',
            'estado_id' => '20',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA OCOTLÁN',
            'estado_id' => '20',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA PEÑASCO',
            'estado_id' => '20',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA TEITIPAC',
            'estado_id' => '20',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA TEQUISISTLÁN',
            'estado_id' => '20',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA TLACOTEPEC',
            'estado_id' => '20',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA ZAHUATLÁN',
            'estado_id' => '20',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARISCALA DE JUÁREZ',
            'estado_id' => '20',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÁRTIRES DE TACUBAYA',
            'estado_id' => '20',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATÍAS ROMERO AVENDAÑO',
            'estado_id' => '20',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATLÁN VILLA DE FLORES',
            'estado_id' => '20',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIAHUATLÁN DE PORFIRIO DÍAZ',
            'estado_id' => '20',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIXISTLÁN DE LA REFORMA',
            'estado_id' => '20',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONJAS',
            'estado_id' => '20',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NATIVIDAD',
            'estado_id' => '20',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAZARENO ETLA',
            'estado_id' => '20',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NEJAPA DE MADERO',
            'estado_id' => '20',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXPANTEPEC NIEVES',
            'estado_id' => '20',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO NILTEPEC',
            'estado_id' => '20',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OAXACA DE JUÁREZ',
            'estado_id' => '20',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOTLÁN DE MORELOS',
            'estado_id' => '20',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA PE',
            'estado_id' => '20',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PINOTEPA DE DON LUIS',
            'estado_id' => '20',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PLUMA HIDALGO',
            'estado_id' => '20',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ DEL PROGRESO',
            'estado_id' => '20',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUTLA VILLA DE GUERRERO',
            'estado_id' => '20',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA QUIOQUITANI',
            'estado_id' => '20',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'REFORMA DE PINEDA',
            'estado_id' => '20',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA REFORMA',
            'estado_id' => '20',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'REYES ETLA',
            'estado_id' => '20',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROJAS DE CUAUHTÉMOC',
            'estado_id' => '20',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALINA CRUZ',
            'estado_id' => '20',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN AMATENGO',
            'estado_id' => '20',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN ATENANGO',
            'estado_id' => '20',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN CHAYUCO',
            'estado_id' => '20',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN DE LAS JUNTAS',
            'estado_id' => '20',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN ETLA',
            'estado_id' => '20',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN LOXICHA',
            'estado_id' => '20',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN TLACOTEPEC',
            'estado_id' => '20',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN AGUSTÍN YATARENI',
            'estado_id' => '20',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS CABECERA NUEVA',
            'estado_id' => '20',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS DINICUITI',
            'estado_id' => '20',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS HUAXPALTEPEC',
            'estado_id' => '20',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS HUAYÁPAM',
            'estado_id' => '20',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS IXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS LAGUNAS',
            'estado_id' => '20',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS NUXIÑO',
            'estado_id' => '20',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS PAXTLÁN',
            'estado_id' => '20',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS SINAXTLA',
            'estado_id' => '20',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS SOLAGA',
            'estado_id' => '20',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS TEOTILÁLPAM',
            'estado_id' => '20',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS TEPETLAPA',
            'estado_id' => '20',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS YAÁ',
            'estado_id' => '20',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS ZABACHE',
            'estado_id' => '20',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS ZAUTLA',
            'estado_id' => '20',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONINO CASTILLO VELASCO',
            'estado_id' => '20',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONINO EL ALTO',
            'estado_id' => '20',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONINO MONTE VERDE',
            'estado_id' => '20',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO ACUTLA',
            'estado_id' => '20',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO DE LA CAL',
            'estado_id' => '20',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO HUITEPEC',
            'estado_id' => '20',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO NANAHUATÍPAM',
            'estado_id' => '20',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO SINICAHUA',
            'estado_id' => '20',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO TEPETLAPA',
            'estado_id' => '20',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BALTAZAR CHICHICÁPAM',
            'estado_id' => '20',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BALTAZAR LOXICHA',
            'estado_id' => '20',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BALTAZAR YATZACHI EL BAJO',
            'estado_id' => '20',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLO COYOTEPEC',
            'estado_id' => '20',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLOMÉ AYAUTLA',
            'estado_id' => '20',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLOMÉ LOXICHA',
            'estado_id' => '20',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLOMÉ QUIALANA',
            'estado_id' => '20',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLOMÉ YUCUAÑE',
            'estado_id' => '20',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLOMÉ ZOOGOCHO',
            'estado_id' => '20',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLO SOYALTEPEC',
            'estado_id' => '20',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BARTOLO YAUTEPEC',
            'estado_id' => '20',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BERNARDO MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN BLAS ATEMPA',
            'estado_id' => '20',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CARLOS YAUTEPEC',
            'estado_id' => '20',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL AMATLÁN',
            'estado_id' => '20',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL AMOLTEPEC',
            'estado_id' => '20',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL LACHIRIOAG',
            'estado_id' => '20',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CRISTÓBAL SUCHIXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIONISIO DEL MAR',
            'estado_id' => '20',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIONISIO OCOTEPEC',
            'estado_id' => '20',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIONISIO OCOTLÁN',
            'estado_id' => '20',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ESTEBAN ATATLAHUCA',
            'estado_id' => '20',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE JALAPA DE DÍAZ',
            'estado_id' => '20',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE TEJALÁPAM',
            'estado_id' => '20',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE USILA',
            'estado_id' => '20',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO CAHUACUÁ',
            'estado_id' => '20',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO CAJONOS',
            'estado_id' => '20',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO CHAPULAPA',
            'estado_id' => '20',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO CHINDÚA',
            'estado_id' => '20',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO DEL MAR',
            'estado_id' => '20',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO HUEHUETLÁN',
            'estado_id' => '20',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO IXHUATÁN',
            'estado_id' => '20',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO JALTEPETONGO',
            'estado_id' => '20',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO LACHIGOLÓ',
            'estado_id' => '20',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO LOGUECHE',
            'estado_id' => '20',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO NUXAÑO',
            'estado_id' => '20',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO OZOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO SOLA',
            'estado_id' => '20',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO TELIXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO TEOPAN',
            'estado_id' => '20',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO TLAPANCINGO',
            'estado_id' => '20',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN GABRIEL MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ILDEFONSO AMATLÁN',
            'estado_id' => '20',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ILDEFONSO SOLA',
            'estado_id' => '20',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ILDEFONSO VILLA ALTA',
            'estado_id' => '20',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JACINTO AMILPAS',
            'estado_id' => '20',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JACINTO TLACOTEPEC',
            'estado_id' => '20',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO COATLÁN',
            'estado_id' => '20',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO SILACAYOAPILLA',
            'estado_id' => '20',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO SOSOLA',
            'estado_id' => '20',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO TAVICHE',
            'estado_id' => '20',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO TECÓATL',
            'estado_id' => '20',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JORGE NUCHITA',
            'estado_id' => '20',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ AYUQUILA',
            'estado_id' => '20',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ CHILTEPEC',
            'estado_id' => '20',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ DEL PEÑASCO',
            'estado_id' => '20',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ ESTANCIA GRANDE',
            'estado_id' => '20',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ INDEPENDENCIA',
            'estado_id' => '20',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ LACHIGUIRI',
            'estado_id' => '20',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ TENANGO',
            'estado_id' => '20',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN ACHIUTLA',
            'estado_id' => '20',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN ATEPEC',
            'estado_id' => '20',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ÁNIMAS TRUJANO',
            'estado_id' => '20',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA ATATLAHUCA',
            'estado_id' => '20',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA COIXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA CUICATLÁN',
            'estado_id' => '20',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA GUELACHE',
            'estado_id' => '20',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA JAYACATLÁN',
            'estado_id' => '20',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA LO DE SOTO',
            'estado_id' => '20',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA SUCHITEPEC',
            'estado_id' => '20',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA TLACOATZINTEPEC',
            'estado_id' => '20',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA TLACHICHILCO',
            'estado_id' => '20',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA TUXTEPEC',
            'estado_id' => '20',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN CACAHUATEPEC',
            'estado_id' => '20',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN CIENEGUILLA',
            'estado_id' => '20',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN COATZÓSPAM',
            'estado_id' => '20',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN COLORADO',
            'estado_id' => '20',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN COMALTEPEC',
            'estado_id' => '20',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN COTZOCÓN',
            'estado_id' => '20',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN CHICOMEZÚCHIL',
            'estado_id' => '20',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN CHILATECA',
            'estado_id' => '20',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DEL ESTADO',
            'estado_id' => '20',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DEL RÍO',
            'estado_id' => '20',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DIUXI',
            'estado_id' => '20',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN EVANGELISTA ANALCO',
            'estado_id' => '20',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN GUELAVÍA',
            'estado_id' => '20',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN GUICHICOVI',
            'estado_id' => '20',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN IHUALTEPEC',
            'estado_id' => '20',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN JUQUILA MIXES',
            'estado_id' => '20',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN JUQUILA VIJANOS',
            'estado_id' => '20',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN LACHAO',
            'estado_id' => '20',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN LACHIGALLA',
            'estado_id' => '20',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN LAJARCIA',
            'estado_id' => '20',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN LALANA',
            'estado_id' => '20',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DE LOS CUÉS',
            'estado_id' => '20',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN MAZATLÁN',
            'estado_id' => '20',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN ÑUMÍ',
            'estado_id' => '20',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN OZOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN PETLAPA',
            'estado_id' => '20',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN QUIAHIJE',
            'estado_id' => '20',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN QUIOTEPEC',
            'estado_id' => '20',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN SAYULTEPEC',
            'estado_id' => '20',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TABAÁ',
            'estado_id' => '20',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TAMAZOLA',
            'estado_id' => '20',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TEITA',
            'estado_id' => '20',
            'number' =>  '218',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TEITIPAC',
            'estado_id' => '20',
            'number' =>  '219',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TEPEUXILA',
            'estado_id' => '20',
            'number' =>  '220',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN TEPOSCOLULA',
            'estado_id' => '20',
            'number' =>  '221',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN YAEÉ',
            'estado_id' => '20',
            'number' =>  '222',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN YATZONA',
            'estado_id' => '20',
            'number' =>  '223',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN YUCUITA',
            'estado_id' => '20',
            'number' =>  '224',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO',
            'estado_id' => '20',
            'number' =>  '225',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO ALBARRADAS',
            'estado_id' => '20',
            'number' =>  '226',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO CACAOTEPEC',
            'estado_id' => '20',
            'number' =>  '227',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO CUAUNECUILTITLA',
            'estado_id' => '20',
            'number' =>  '228',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO TEXMELÚCAN',
            'estado_id' => '20',
            'number' =>  '229',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO VICTORIA',
            'estado_id' => '20',
            'number' =>  '230',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS CAMOTLÁN',
            'estado_id' => '20',
            'number' =>  '231',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS OJITLÁN',
            'estado_id' => '20',
            'number' =>  '232',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS QUIAVINÍ',
            'estado_id' => '20',
            'number' =>  '233',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS ZOQUIÁPAM',
            'estado_id' => '20',
            'number' =>  '234',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS AMATLÁN',
            'estado_id' => '20',
            'number' =>  '235',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARCIAL OZOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '236',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARCOS ARTEAGA',
            'estado_id' => '20',
            'number' =>  '237',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN DE LOS CANSECOS',
            'estado_id' => '20',
            'number' =>  '238',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN HUAMELÚLPAM',
            'estado_id' => '20',
            'number' =>  '239',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN ITUNYOSO',
            'estado_id' => '20',
            'number' =>  '240',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN LACHILÁ',
            'estado_id' => '20',
            'number' =>  '241',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN PERAS',
            'estado_id' => '20',
            'number' =>  '242',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN TILCAJETE',
            'estado_id' => '20',
            'number' =>  '243',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN TOXPALAN',
            'estado_id' => '20',
            'number' =>  '244',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN ZACATEPEC',
            'estado_id' => '20',
            'number' =>  '245',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO CAJONOS',
            'estado_id' => '20',
            'number' =>  '246',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAPULÁLPAM DE MÉNDEZ',
            'estado_id' => '20',
            'number' =>  '247',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO DEL MAR',
            'estado_id' => '20',
            'number' =>  '248',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO YOLOXOCHITLÁN',
            'estado_id' => '20',
            'number' =>  '249',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO ETLATONGO',
            'estado_id' => '20',
            'number' =>  '250',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO NEJÁPAM',
            'estado_id' => '20',
            'number' =>  '251',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO PEÑASCO',
            'estado_id' => '20',
            'number' =>  '252',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO PIÑAS',
            'estado_id' => '20',
            'number' =>  '253',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO RÍO HONDO',
            'estado_id' => '20',
            'number' =>  '254',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO SINDIHUI',
            'estado_id' => '20',
            'number' =>  '255',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO TLAPILTEPEC',
            'estado_id' => '20',
            'number' =>  '256',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MELCHOR BETAZA',
            'estado_id' => '20',
            'number' =>  '257',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL ACHIUTLA',
            'estado_id' => '20',
            'number' =>  '258',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL AHUEHUETITLÁN',
            'estado_id' => '20',
            'number' =>  '259',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL ALOÁPAM',
            'estado_id' => '20',
            'number' =>  '260',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL AMATITLÁN',
            'estado_id' => '20',
            'number' =>  '261',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL AMATLÁN',
            'estado_id' => '20',
            'number' =>  '262',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL COATLÁN',
            'estado_id' => '20',
            'number' =>  '263',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL CHICAHUA',
            'estado_id' => '20',
            'number' =>  '264',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL CHIMALAPA',
            'estado_id' => '20',
            'number' =>  '265',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL DEL PUERTO',
            'estado_id' => '20',
            'number' =>  '266',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL DEL RÍO',
            'estado_id' => '20',
            'number' =>  '267',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL EJUTLA',
            'estado_id' => '20',
            'number' =>  '268',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL EL GRANDE',
            'estado_id' => '20',
            'number' =>  '269',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL HUAUTLA',
            'estado_id' => '20',
            'number' =>  '270',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '271',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL PANIXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '272',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL PERAS',
            'estado_id' => '20',
            'number' =>  '273',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL PIEDRAS',
            'estado_id' => '20',
            'number' =>  '274',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL QUETZALTEPEC',
            'estado_id' => '20',
            'number' =>  '275',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL SANTA FLOR',
            'estado_id' => '20',
            'number' =>  '276',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA SOLA DE VEGA',
            'estado_id' => '20',
            'number' =>  '277',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL SOYALTEPEC',
            'estado_id' => '20',
            'number' =>  '278',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL SUCHIXTEPEC',
            'estado_id' => '20',
            'number' =>  '279',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA TALEA DE CASTRO',
            'estado_id' => '20',
            'number' =>  '280',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TECOMATLÁN',
            'estado_id' => '20',
            'number' =>  '281',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TENANGO',
            'estado_id' => '20',
            'number' =>  '282',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TEQUIXTEPEC',
            'estado_id' => '20',
            'number' =>  '283',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TILQUIÁPAM',
            'estado_id' => '20',
            'number' =>  '284',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TLACAMAMA',
            'estado_id' => '20',
            'number' =>  '285',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TLACOTEPEC',
            'estado_id' => '20',
            'number' =>  '286',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL TULANCINGO',
            'estado_id' => '20',
            'number' =>  '287',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL YOTAO',
            'estado_id' => '20',
            'number' =>  '288',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS',
            'estado_id' => '20',
            'number' =>  '289',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS HIDALGO',
            'estado_id' => '20',
            'number' =>  '290',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO COATLÁN',
            'estado_id' => '20',
            'number' =>  '291',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO CUATRO VENADOS',
            'estado_id' => '20',
            'number' =>  '292',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO ETLA',
            'estado_id' => '20',
            'number' =>  '293',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO HUITZO',
            'estado_id' => '20',
            'number' =>  '294',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO HUIXTEPEC',
            'estado_id' => '20',
            'number' =>  '295',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO MACUILTIANGUIS',
            'estado_id' => '20',
            'number' =>  '296',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO TIJALTEPEC',
            'estado_id' => '20',
            'number' =>  '297',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO VILLA DE MITLA',
            'estado_id' => '20',
            'number' =>  '298',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO YAGANIZA',
            'estado_id' => '20',
            'number' =>  '299',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO AMUZGOS',
            'estado_id' => '20',
            'number' =>  '300',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO APÓSTOL',
            'estado_id' => '20',
            'number' =>  '301',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO ATOYAC',
            'estado_id' => '20',
            'number' =>  '302',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO CAJONOS',
            'estado_id' => '20',
            'number' =>  '303',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO COXCALTEPEC CÁNTAROS',
            'estado_id' => '20',
            'number' =>  '304',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO COMITANCILLO',
            'estado_id' => '20',
            'number' =>  '305',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO EL ALTO',
            'estado_id' => '20',
            'number' =>  '306',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO HUAMELULA',
            'estado_id' => '20',
            'number' =>  '307',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO HUILOTEPEC',
            'estado_id' => '20',
            'number' =>  '308',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO IXCATLÁN',
            'estado_id' => '20',
            'number' =>  '309',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO IXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '310',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO JALTEPETONGO',
            'estado_id' => '20',
            'number' =>  '311',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO JICAYÁN',
            'estado_id' => '20',
            'number' =>  '312',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO JOCOTIPAC',
            'estado_id' => '20',
            'number' =>  '313',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO JUCHATENGO',
            'estado_id' => '20',
            'number' =>  '314',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MÁRTIR',
            'estado_id' => '20',
            'number' =>  '315',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MÁRTIR QUIECHAPA',
            'estado_id' => '20',
            'number' =>  '316',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MÁRTIR YUCUXACO',
            'estado_id' => '20',
            'number' =>  '317',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '318',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '319',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO MOLINOS',
            'estado_id' => '20',
            'number' =>  '320',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO NOPALA',
            'estado_id' => '20',
            'number' =>  '321',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO OCOPETATILLO',
            'estado_id' => '20',
            'number' =>  '322',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO OCOTEPEC',
            'estado_id' => '20',
            'number' =>  '323',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO POCHUTLA',
            'estado_id' => '20',
            'number' =>  '324',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO QUIATONI',
            'estado_id' => '20',
            'number' =>  '325',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO SOCHIÁPAM',
            'estado_id' => '20',
            'number' =>  '326',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TAPANATEPEC',
            'estado_id' => '20',
            'number' =>  '327',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TAVICHE',
            'estado_id' => '20',
            'number' =>  '328',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TEOZACOALCO',
            'estado_id' => '20',
            'number' =>  '329',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TEUTILA',
            'estado_id' => '20',
            'number' =>  '330',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TIDAÁ',
            'estado_id' => '20',
            'number' =>  '331',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TOPILTEPEC',
            'estado_id' => '20',
            'number' =>  '332',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO TOTOLÁPAM',
            'estado_id' => '20',
            'number' =>  '333',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE TUTUTEPEC DE MELCHOR OCAMPO',
            'estado_id' => '20',
            'number' =>  '334',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO YANERI',
            'estado_id' => '20',
            'number' =>  '335',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO YÓLOX',
            'estado_id' => '20',
            'number' =>  '336',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO Y SAN PABLO AYUTLA',
            'estado_id' => '20',
            'number' =>  '337',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ETLA',
            'estado_id' => '20',
            'number' =>  '338',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO Y SAN PABLO TEPOSCOLULA',
            'estado_id' => '20',
            'number' =>  '339',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO Y SAN PABLO TEQUIXTEPEC',
            'estado_id' => '20',
            'number' =>  '340',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO YUCUNAMA',
            'estado_id' => '20',
            'number' =>  '341',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN RAYMUNDO JALPAN',
            'estado_id' => '20',
            'number' =>  '342',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN ABASOLO',
            'estado_id' => '20',
            'number' =>  '343',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN COATLÁN',
            'estado_id' => '20',
            'number' =>  '344',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN IXCAPA',
            'estado_id' => '20',
            'number' =>  '345',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN NICANANDUTA',
            'estado_id' => '20',
            'number' =>  '346',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN RÍO HONDO',
            'estado_id' => '20',
            'number' =>  '347',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN TECOMAXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '348',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN TEITIPAC',
            'estado_id' => '20',
            'number' =>  '349',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN TUTLA',
            'estado_id' => '20',
            'number' =>  '350',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SIMÓN ALMOLONGAS',
            'estado_id' => '20',
            'number' =>  '351',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SIMÓN ZAHUATLÁN',
            'estado_id' => '20',
            'number' =>  '352',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA',
            'estado_id' => '20',
            'number' =>  '353',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA ATEIXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '354',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA CUAUHTÉMOC',
            'estado_id' => '20',
            'number' =>  '355',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA DEL VALLE',
            'estado_id' => '20',
            'number' =>  '356',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA TAVELA',
            'estado_id' => '20',
            'number' =>  '357',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA TLAPACOYAN',
            'estado_id' => '20',
            'number' =>  '358',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA YARENI',
            'estado_id' => '20',
            'number' =>  '359',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA ZEGACHE',
            'estado_id' => '20',
            'number' =>  '360',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATALINA QUIERÍ',
            'estado_id' => '20',
            'number' =>  '361',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA CUIXTLA',
            'estado_id' => '20',
            'number' =>  '362',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA IXTEPEJI',
            'estado_id' => '20',
            'number' =>  '363',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA JUQUILA',
            'estado_id' => '20',
            'number' =>  '364',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA LACHATAO',
            'estado_id' => '20',
            'number' =>  '365',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA LOXICHA',
            'estado_id' => '20',
            'number' =>  '366',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA MECHOACÁN',
            'estado_id' => '20',
            'number' =>  '367',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA MINAS',
            'estado_id' => '20',
            'number' =>  '368',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA QUIANÉ',
            'estado_id' => '20',
            'number' =>  '369',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA TAYATA',
            'estado_id' => '20',
            'number' =>  '370',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA TICUÁ',
            'estado_id' => '20',
            'number' =>  '371',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA YOSONOTÚ',
            'estado_id' => '20',
            'number' =>  '372',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA ZAPOQUILA',
            'estado_id' => '20',
            'number' =>  '373',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ ACATEPEC',
            'estado_id' => '20',
            'number' =>  '374',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ AMILPAS',
            'estado_id' => '20',
            'number' =>  '375',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ DE BRAVO',
            'estado_id' => '20',
            'number' =>  '376',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ ITUNDUJIA',
            'estado_id' => '20',
            'number' =>  '377',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ MIXTEPEC',
            'estado_id' => '20',
            'number' =>  '378',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ NUNDACO',
            'estado_id' => '20',
            'number' =>  '379',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ PAPALUTLA',
            'estado_id' => '20',
            'number' =>  '380',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ TACACHE DE MINA',
            'estado_id' => '20',
            'number' =>  '381',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ TACAHUA',
            'estado_id' => '20',
            'number' =>  '382',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ TAYATA',
            'estado_id' => '20',
            'number' =>  '383',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ XITLA',
            'estado_id' => '20',
            'number' =>  '384',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ XOXOCOTLÁN',
            'estado_id' => '20',
            'number' =>  '385',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ ZENZONTEPEC',
            'estado_id' => '20',
            'number' =>  '386',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA GERTRUDIS',
            'estado_id' => '20',
            'number' =>  '387',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA INÉS DEL MONTE',
            'estado_id' => '20',
            'number' =>  '388',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA INÉS YATZECHE',
            'estado_id' => '20',
            'number' =>  '389',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA LUCÍA DEL CAMINO',
            'estado_id' => '20',
            'number' =>  '390',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA LUCÍA MIAHUATLÁN',
            'estado_id' => '20',
            'number' =>  '391',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA LUCÍA MONTEVERDE',
            'estado_id' => '20',
            'number' =>  '392',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA LUCÍA OCOTLÁN',
            'estado_id' => '20',
            'number' =>  '393',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ALOTEPEC',
            'estado_id' => '20',
            'number' =>  '394',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA APAZCO',
            'estado_id' => '20',
            'number' =>  '395',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA LA ASUNCIÓN',
            'estado_id' => '20',
            'number' =>  '396',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HEROICA CIUDAD DE TLAXIACO',
            'estado_id' => '20',
            'number' =>  '397',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYOQUEZCO DE ALDAMA',
            'estado_id' => '20',
            'number' =>  '398',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ATZOMPA',
            'estado_id' => '20',
            'number' =>  '399',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA CAMOTLÁN',
            'estado_id' => '20',
            'number' =>  '400',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA COLOTEPEC',
            'estado_id' => '20',
            'number' =>  '401',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA CORTIJO',
            'estado_id' => '20',
            'number' =>  '402',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA COYOTEPEC',
            'estado_id' => '20',
            'number' =>  '403',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA CHACHOÁPAM',
            'estado_id' => '20',
            'number' =>  '404',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE CHILAPA DE DÍAZ',
            'estado_id' => '20',
            'number' =>  '405',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA CHILCHOTLA',
            'estado_id' => '20',
            'number' =>  '406',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA CHIMALAPA',
            'estado_id' => '20',
            'number' =>  '407',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DEL ROSARIO',
            'estado_id' => '20',
            'number' =>  '408',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DEL TULE',
            'estado_id' => '20',
            'number' =>  '409',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ECATEPEC',
            'estado_id' => '20',
            'number' =>  '410',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA GUELACÉ',
            'estado_id' => '20',
            'number' =>  '411',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA GUIENAGATI',
            'estado_id' => '20',
            'number' =>  '412',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA HUATULCO',
            'estado_id' => '20',
            'number' =>  '413',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA HUAZOLOTITLÁN',
            'estado_id' => '20',
            'number' =>  '414',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA IPALAPA',
            'estado_id' => '20',
            'number' =>  '415',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA IXCATLÁN',
            'estado_id' => '20',
            'number' =>  '416',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA JACATEPEC',
            'estado_id' => '20',
            'number' =>  '417',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA JALAPA DEL MARQUÉS',
            'estado_id' => '20',
            'number' =>  '418',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA JALTIANGUIS',
            'estado_id' => '20',
            'number' =>  '419',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA LACHIXÍO',
            'estado_id' => '20',
            'number' =>  '420',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA MIXTEQUILLA',
            'estado_id' => '20',
            'number' =>  '421',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA NATIVITAS',
            'estado_id' => '20',
            'number' =>  '422',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA NDUAYACO',
            'estado_id' => '20',
            'number' =>  '423',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA OZOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '424',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA PÁPALO',
            'estado_id' => '20',
            'number' =>  '425',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA PEÑOLES',
            'estado_id' => '20',
            'number' =>  '426',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA PETAPA',
            'estado_id' => '20',
            'number' =>  '427',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA QUIEGOLANI',
            'estado_id' => '20',
            'number' =>  '428',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA SOLA',
            'estado_id' => '20',
            'number' =>  '429',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TATALTEPEC',
            'estado_id' => '20',
            'number' =>  '430',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TECOMAVACA',
            'estado_id' => '20',
            'number' =>  '431',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TEMAXCALAPA',
            'estado_id' => '20',
            'number' =>  '432',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TEMAXCALTEPEC',
            'estado_id' => '20',
            'number' =>  '433',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TEOPOXCO',
            'estado_id' => '20',
            'number' =>  '434',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TEPANTLALI',
            'estado_id' => '20',
            'number' =>  '435',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TEXCATITLÁN',
            'estado_id' => '20',
            'number' =>  '436',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TLAHUITOLTEPEC',
            'estado_id' => '20',
            'number' =>  '437',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TLALIXTAC',
            'estado_id' => '20',
            'number' =>  '438',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TOnombreCA',
            'estado_id' => '20',
            'number' =>  '439',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA TOTOLAPILLA',
            'estado_id' => '20',
            'number' =>  '440',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA XADANI',
            'estado_id' => '20',
            'number' =>  '441',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA YALINA',
            'estado_id' => '20',
            'number' =>  '442',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA YAVESÍA',
            'estado_id' => '20',
            'number' =>  '443',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA YOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '444',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA YOSOYÚA',
            'estado_id' => '20',
            'number' =>  '445',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA YUCUHITI',
            'estado_id' => '20',
            'number' =>  '446',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ZACATEPEC',
            'estado_id' => '20',
            'number' =>  '447',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ZANIZA',
            'estado_id' => '20',
            'number' =>  '448',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA ZOQUITLÁN',
            'estado_id' => '20',
            'number' =>  '449',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO AMOLTEPEC',
            'estado_id' => '20',
            'number' =>  '450',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO APOALA',
            'estado_id' => '20',
            'number' =>  '451',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO APÓSTOL',
            'estado_id' => '20',
            'number' =>  '452',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO ASTATA',
            'estado_id' => '20',
            'number' =>  '453',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO ATITLÁN',
            'estado_id' => '20',
            'number' =>  '454',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO AYUQUILILLA',
            'estado_id' => '20',
            'number' =>  '455',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO CACALOXTEPEC',
            'estado_id' => '20',
            'number' =>  '456',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO CAMOTLÁN',
            'estado_id' => '20',
            'number' =>  '457',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO COMALTEPEC',
            'estado_id' => '20',
            'number' =>  '458',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO CHAZUMBA',
            'estado_id' => '20',
            'number' =>  '459',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO CHOÁPAM',
            'estado_id' => '20',
            'number' =>  '460',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO DEL RÍO',
            'estado_id' => '20',
            'number' =>  '461',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO HUAJOLOTITLÁN',
            'estado_id' => '20',
            'number' =>  '462',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO HUAUCLILLA',
            'estado_id' => '20',
            'number' =>  '463',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO IHUITLÁN PLUMAS',
            'estado_id' => '20',
            'number' =>  '464',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO IXCUINTEPEC',
            'estado_id' => '20',
            'number' =>  '465',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO IXTAYUTLA',
            'estado_id' => '20',
            'number' =>  '466',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO JAMILTEPEC',
            'estado_id' => '20',
            'number' =>  '467',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO JOCOTEPEC',
            'estado_id' => '20',
            'number' =>  '468',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO JUXTLAHUACA',
            'estado_id' => '20',
            'number' =>  '469',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO LACHIGUIRI',
            'estado_id' => '20',
            'number' =>  '470',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO LALOPA',
            'estado_id' => '20',
            'number' =>  '471',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO LAOLLAGA',
            'estado_id' => '20',
            'number' =>  '472',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO LAXOPA',
            'estado_id' => '20',
            'number' =>  '473',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO LLANO GRANDE',
            'estado_id' => '20',
            'number' =>  '474',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO MATATLÁN',
            'estado_id' => '20',
            'number' =>  '475',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO MILTEPEC',
            'estado_id' => '20',
            'number' =>  '476',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO MINAS',
            'estado_id' => '20',
            'number' =>  '477',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO NACALTEPEC',
            'estado_id' => '20',
            'number' =>  '478',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO NEJAPILLA',
            'estado_id' => '20',
            'number' =>  '479',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO NUNDICHE',
            'estado_id' => '20',
            'number' =>  '480',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO NUYOÓ',
            'estado_id' => '20',
            'number' =>  '481',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO PINOTEPA NACIONAL',
            'estado_id' => '20',
            'number' =>  '482',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO SUCHILQUITONGO',
            'estado_id' => '20',
            'number' =>  '483',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TAMAZOLA',
            'estado_id' => '20',
            'number' =>  '484',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TAPEXTLA',
            'estado_id' => '20',
            'number' =>  '485',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA TEJÚPAM DE LA UNIÓN',
            'estado_id' => '20',
            'number' =>  '486',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TENANGO',
            'estado_id' => '20',
            'number' =>  '487',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TEPETLAPA',
            'estado_id' => '20',
            'number' =>  '488',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TETEPEC',
            'estado_id' => '20',
            'number' =>  '489',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TEXCALCINGO',
            'estado_id' => '20',
            'number' =>  '490',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TEXTITLÁN',
            'estado_id' => '20',
            'number' =>  '491',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TILANTONGO',
            'estado_id' => '20',
            'number' =>  '492',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TILLO',
            'estado_id' => '20',
            'number' =>  '493',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TLAZOYALTEPEC',
            'estado_id' => '20',
            'number' =>  '494',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO XANICA',
            'estado_id' => '20',
            'number' =>  '495',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO XIACUÍ',
            'estado_id' => '20',
            'number' =>  '496',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO YAITEPEC',
            'estado_id' => '20',
            'number' =>  '497',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO YAVEO',
            'estado_id' => '20',
            'number' =>  '498',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO YOLOMÉCATL',
            'estado_id' => '20',
            'number' =>  '499',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO YOSONDÚA',
            'estado_id' => '20',
            'number' =>  '500',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO YUCUYACHI',
            'estado_id' => '20',
            'number' =>  '501',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO ZACATEPEC',
            'estado_id' => '20',
            'number' =>  '502',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO ZOOCHILA',
            'estado_id' => '20',
            'number' =>  '503',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO ZOQUIÁPAM',
            'estado_id' => '20',
            'number' =>  '504',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO INGENIO',
            'estado_id' => '20',
            'number' =>  '505',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO ALBARRADAS',
            'estado_id' => '20',
            'number' =>  '506',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO ARMENTA',
            'estado_id' => '20',
            'number' =>  '507',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO CHIHUITÁN',
            'estado_id' => '20',
            'number' =>  '508',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO DE MORELOS',
            'estado_id' => '20',
            'number' =>  '509',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO IXCATLÁN',
            'estado_id' => '20',
            'number' =>  '510',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO NUXAÁ',
            'estado_id' => '20',
            'number' =>  '511',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO OZOLOTEPEC',
            'estado_id' => '20',
            'number' =>  '512',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO PETAPA',
            'estado_id' => '20',
            'number' =>  '513',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO ROAYAGA',
            'estado_id' => '20',
            'number' =>  '514',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TEHUANTEPEC',
            'estado_id' => '20',
            'number' =>  '515',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TEOJOMULCO',
            'estado_id' => '20',
            'number' =>  '516',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TEPUXTEPEC',
            'estado_id' => '20',
            'number' =>  '517',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TLATAYÁPAM',
            'estado_id' => '20',
            'number' =>  '518',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TOMALTEPEC',
            'estado_id' => '20',
            'number' =>  '519',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TONALÁ',
            'estado_id' => '20',
            'number' =>  '520',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO TONALTEPEC',
            'estado_id' => '20',
            'number' =>  '521',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO XAGACÍA',
            'estado_id' => '20',
            'number' =>  '522',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO YANHUITLÁN',
            'estado_id' => '20',
            'number' =>  '523',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO YODOHINO',
            'estado_id' => '20',
            'number' =>  '524',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO ZANATEPEC',
            'estado_id' => '20',
            'number' =>  '525',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTOS REYES NOPALA',
            'estado_id' => '20',
            'number' =>  '526',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTOS REYES PÁPALO',
            'estado_id' => '20',
            'number' =>  '527',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTOS REYES TEPEJILLO',
            'estado_id' => '20',
            'number' =>  '528',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTOS REYES YUCUNÁ',
            'estado_id' => '20',
            'number' =>  '529',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS JALIEZA',
            'estado_id' => '20',
            'number' =>  '530',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS MAZALTEPEC',
            'estado_id' => '20',
            'number' =>  '531',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS OCOTEPEC',
            'estado_id' => '20',
            'number' =>  '532',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS TAMAZULAPAN',
            'estado_id' => '20',
            'number' =>  '533',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN VICENTE COATLÁN',
            'estado_id' => '20',
            'number' =>  '534',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN VICENTE LACHIXÍO',
            'estado_id' => '20',
            'number' =>  '535',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN VICENTE NUÑÚ',
            'estado_id' => '20',
            'number' =>  '536',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SILACAYOÁPAM',
            'estado_id' => '20',
            'number' =>  '537',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SITIO DE XITLAPEHUA',
            'estado_id' => '20',
            'number' =>  '538',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLEDAD ETLA',
            'estado_id' => '20',
            'number' =>  '539',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE TAMAZULÁPAM DEL PROGRESO',
            'estado_id' => '20',
            'number' =>  '540',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANETZE DE ZARAGOZA',
            'estado_id' => '20',
            'number' =>  '541',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANICHE',
            'estado_id' => '20',
            'number' =>  '542',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TATALTEPEC DE VALDÉS',
            'estado_id' => '20',
            'number' =>  '543',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOCOCUILCO DE MARCOS PÉREZ',
            'estado_id' => '20',
            'number' =>  '544',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOTITLÁN DE FLORES MAGÓN',
            'estado_id' => '20',
            'number' =>  '545',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOTITLÁN DEL VALLE',
            'estado_id' => '20',
            'number' =>  '546',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOTONGO',
            'estado_id' => '20',
            'number' =>  '547',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPELMEME VILLA DE MORELOS',
            'estado_id' => '20',
            'number' =>  '548',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HEROICA VILLA TEZOATLÁN DE SEGURA Y LUNA. CUNA DE LA INDEPENDENCIA DE OAXACA',
            'estado_id' => '20',
            'number' =>  '549',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO TLACOCHAHUAYA',
            'estado_id' => '20',
            'number' =>  '550',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOLULA DE MATAMOROS',
            'estado_id' => '20',
            'number' =>  '551',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOTEPEC PLUMAS',
            'estado_id' => '20',
            'number' =>  '552',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALIXTAC DE CABRERA',
            'estado_id' => '20',
            'number' =>  '553',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTONTEPEC VILLA DE MORELOS',
            'estado_id' => '20',
            'number' =>  '554',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TRINIDAD ZAACHILA',
            'estado_id' => '20',
            'number' =>  '555',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA TRINIDAD VISTA HERMOSA',
            'estado_id' => '20',
            'number' =>  '556',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UNIÓN HIDALGO',
            'estado_id' => '20',
            'number' =>  '557',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALERIO TRUJANO',
            'estado_id' => '20',
            'number' =>  '558',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN BAUTISTA VALLE NACIONAL',
            'estado_id' => '20',
            'number' =>  '559',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DÍAZ ORDAZ',
            'estado_id' => '20',
            'number' =>  '560',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAXE',
            'estado_id' => '20',
            'number' =>  '561',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA YODOCONO DE PORFIRIO DÍAZ',
            'estado_id' => '20',
            'number' =>  '562',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YOGANA',
            'estado_id' => '20',
            'number' =>  '563',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YUTANDUCHI DE GUERRERO',
            'estado_id' => '20',
            'number' =>  '564',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ZAACHILA',
            'estado_id' => '20',
            'number' =>  '565',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATEO YUCUTINDOO',
            'estado_id' => '20',
            'number' =>  '566',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN LAGUNAS',
            'estado_id' => '20',
            'number' =>  '567',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN PALMAS',
            'estado_id' => '20',
            'number' =>  '568',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA INÉS DE ZARAGOZA',
            'estado_id' => '20',
            'number' =>  '569',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIMATLÁN DE ÁLVAREZ',
            'estado_id' => '20',
            'number' =>  '570',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAJETE',
            'estado_id' => '21',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATENO',
            'estado_id' => '21',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATLÁN',
            'estado_id' => '21',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATZINGO',
            'estado_id' => '21',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACTEOPAN',
            'estado_id' => '21',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUACATLÁN',
            'estado_id' => '21',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUATLÁN',
            'estado_id' => '21',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUAZOTEPEC',
            'estado_id' => '21',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUEHUETITLA',
            'estado_id' => '21',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AJALPAN',
            'estado_id' => '21',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALBINO ZERTUCHE',
            'estado_id' => '21',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALJOJUCA',
            'estado_id' => '21',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTEPEXI',
            'estado_id' => '21',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMIXTLÁN',
            'estado_id' => '21',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMOZOC',
            'estado_id' => '21',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AQUIXTLA',
            'estado_id' => '21',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATEMPAN',
            'estado_id' => '21',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATEXCAL',
            'estado_id' => '21',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLIXCO',
            'estado_id' => '21',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOYATEMPAN',
            'estado_id' => '21',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATZALA',
            'estado_id' => '21',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATZITZIHUACÁN',
            'estado_id' => '21',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATZITZINTLA',
            'estado_id' => '21',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AXUTLA',
            'estado_id' => '21',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYOTOXCO DE GUERRERO',
            'estado_id' => '21',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALPAN',
            'estado_id' => '21',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALTEPEC',
            'estado_id' => '21',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMOCUAUTLA',
            'estado_id' => '21',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAXHUACAN',
            'estado_id' => '21',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATEPEC',
            'estado_id' => '21',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATZINGO',
            'estado_id' => '21',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COHETZALA',
            'estado_id' => '21',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COHUECAN',
            'estado_id' => '21',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CORONANGO',
            'estado_id' => '21',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COXCATLÁN',
            'estado_id' => '21',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYOMEAPAN',
            'estado_id' => '21',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYOTEPEC',
            'estado_id' => '21',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAPIAXTLA DE MADERO',
            'estado_id' => '21',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTEMPAN',
            'estado_id' => '21',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTINCHÁN',
            'estado_id' => '21',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUTLANCINGO',
            'estado_id' => '21',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAYUCA DE ANDRADE',
            'estado_id' => '21',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUETZALAN DEL PROGRESO',
            'estado_id' => '21',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUYOACO',
            'estado_id' => '21',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALCHICOMULA DE SESMA',
            'estado_id' => '21',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPULCO',
            'estado_id' => '21',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAUTLA',
            'estado_id' => '21',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAUTZINGO',
            'estado_id' => '21',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICONCUAUTLA',
            'estado_id' => '21',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICHIQUILA',
            'estado_id' => '21',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIETLA',
            'estado_id' => '21',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIGMECATITLÁN',
            'estado_id' => '21',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIGNAHUAPAN',
            'estado_id' => '21',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIGNAUTLA',
            'estado_id' => '21',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILA',
            'estado_id' => '21',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILA DE LA SAL',
            'estado_id' => '21',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HONEY',
            'estado_id' => '21',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHILCHOTLA',
            'estado_id' => '21',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHINANTLA',
            'estado_id' => '21',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DOMINGO ARENAS',
            'estado_id' => '21',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ELOXOCHITLÁN',
            'estado_id' => '21',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EPATLÁN',
            'estado_id' => '21',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESPERANZA',
            'estado_id' => '21',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRANCISCO Z. MENA',
            'estado_id' => '21',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL FELIPE ÁNGELES',
            'estado_id' => '21',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE',
            'estado_id' => '21',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE VICTORIA',
            'estado_id' => '21',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HERMENEGILDO GALEANA',
            'estado_id' => '21',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAQUECHULA',
            'estado_id' => '21',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUATLATLAUCA',
            'estado_id' => '21',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAUCHINANGO',
            'estado_id' => '21',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETLA',
            'estado_id' => '21',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETLÁN EL CHICO',
            'estado_id' => '21',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEJOTZINGO',
            'estado_id' => '21',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYAPAN',
            'estado_id' => '21',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYTAMALCO',
            'estado_id' => '21',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYTLALPAN',
            'estado_id' => '21',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUITZILAN DE SERDÁN',
            'estado_id' => '21',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUITZILTEPEC',
            'estado_id' => '21',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLEQUIZAYAN',
            'estado_id' => '21',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXCAMILPA DE GUERRERO',
            'estado_id' => '21',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXCAQUIXTLA',
            'estado_id' => '21',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTACAMAXTITLÁN',
            'estado_id' => '21',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTEPEC',
            'estado_id' => '21',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IZÚCAR DE MATAMOROS',
            'estado_id' => '21',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALPAN',
            'estado_id' => '21',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOLALPAN',
            'estado_id' => '21',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JONOTLA',
            'estado_id' => '21',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOPALA',
            'estado_id' => '21',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN C. BONILLA',
            'estado_id' => '21',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN GALINDO',
            'estado_id' => '21',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN N. MÉNDEZ',
            'estado_id' => '21',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAFRAGUA',
            'estado_id' => '21',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LIBRES',
            'estado_id' => '21',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA MAGDALENA TLATLAUQUITEPEC',
            'estado_id' => '21',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZAPILTEPEC DE JUÁREZ',
            'estado_id' => '21',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIXTLA',
            'estado_id' => '21',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOLCAXAC',
            'estado_id' => '21',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAÑADA MORELOS',
            'estado_id' => '21',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAUPAN',
            'estado_id' => '21',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAUZONTLA',
            'estado_id' => '21',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NEALTICAN',
            'estado_id' => '21',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NICOLÁS BRAVO',
            'estado_id' => '21',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOPALUCAN',
            'estado_id' => '21',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOTEPEC',
            'estado_id' => '21',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCOYUCAN',
            'estado_id' => '21',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OLINTLA',
            'estado_id' => '21',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ORIENTAL',
            'estado_id' => '21',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAHUATLÁN',
            'estado_id' => '21',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PALMAR DE BRAVO',
            'estado_id' => '21',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANTEPEC',
            'estado_id' => '21',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PETLALCINGO',
            'estado_id' => '21',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PIAXTLA',
            'estado_id' => '21',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUEBLA',
            'estado_id' => '21',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUECHOLAC',
            'estado_id' => '21',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUIMIXTLÁN',
            'estado_id' => '21',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAFAEL LARA GRAJALES',
            'estado_id' => '21',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS REYES DE JUÁREZ',
            'estado_id' => '21',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS CHOLULA',
            'estado_id' => '21',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO CAÑADA',
            'estado_id' => '21',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DIEGO LA MESA TOCHIMILTZINGO',
            'estado_id' => '21',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE TEOTLALCINGO',
            'estado_id' => '21',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE TEPATLÁN',
            'estado_id' => '21',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN GABRIEL CHILAC',
            'estado_id' => '21',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN GREGORIO ATZOMPA',
            'estado_id' => '21',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO TECUANIPAN',
            'estado_id' => '21',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO XAYACATLÁN',
            'estado_id' => '21',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ CHIAPA',
            'estado_id' => '21',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ MIAHUATLÁN',
            'estado_id' => '21',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN ATENCO',
            'estado_id' => '21',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN ATZOMPA',
            'estado_id' => '21',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN TEXMELUCAN',
            'estado_id' => '21',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN TOTOLTEPEC',
            'estado_id' => '21',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MATÍAS TLALANCALECA',
            'estado_id' => '21',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL IXITLÁN',
            'estado_id' => '21',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL XOXTLA',
            'estado_id' => '21',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS BUENOS AIRES',
            'estado_id' => '21',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS DE LOS RANCHOS',
            'estado_id' => '21',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO ANICANO',
            'estado_id' => '21',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO CHOLULA',
            'estado_id' => '21',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO YELOIXTLAHUACA',
            'estado_id' => '21',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SALVADOR EL SECO',
            'estado_id' => '21',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SALVADOR EL VERDE',
            'estado_id' => '21',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SALVADOR HUIXCOLOTLA',
            'estado_id' => '21',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN SEBASTIÁN TLACOTEPEC',
            'estado_id' => '21',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA TLALTEMPAN',
            'estado_id' => '21',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA INÉS AHUATEMPAN',
            'estado_id' => '21',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ISABEL CHOLULA',
            'estado_id' => '21',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO MIAHUATLÁN',
            'estado_id' => '21',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETLÁN EL GRANDE',
            'estado_id' => '21',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO TOMÁS HUEYOTLIPAN',
            'estado_id' => '21',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLTEPEC',
            'estado_id' => '21',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECALI DE HERRERA',
            'estado_id' => '21',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECAMACHALCO',
            'estado_id' => '21',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOMATLÁN',
            'estado_id' => '21',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEHUACÁN',
            'estado_id' => '21',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEHUITZINGO',
            'estado_id' => '21',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENAMPULCO',
            'estado_id' => '21',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOPANTLÁN',
            'estado_id' => '21',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOTLALCO',
            'estado_id' => '21',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPANCO DE LÓPEZ',
            'estado_id' => '21',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPANGO DE RODRÍGUEZ',
            'estado_id' => '21',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPATLAXCO DE HIDALGO',
            'estado_id' => '21',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEACA',
            'estado_id' => '21',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEMAXALCO',
            'estado_id' => '21',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEOJUMA',
            'estado_id' => '21',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETZINTLA',
            'estado_id' => '21',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEXCO',
            'estado_id' => '21',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEXI DE RODRÍGUEZ',
            'estado_id' => '21',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEYAHUALCO',
            'estado_id' => '21',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEYAHUALCO DE CUAUHTÉMOC',
            'estado_id' => '21',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETELA DE OCAMPO',
            'estado_id' => '21',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETELES DE AVILA CASTILLO',
            'estado_id' => '21',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEZIUTLÁN',
            'estado_id' => '21',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIANGUISMANALCO',
            'estado_id' => '21',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TILAPA',
            'estado_id' => '21',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOTEPEC DE BENITO JUÁREZ',
            'estado_id' => '21',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACUILOTEPEC',
            'estado_id' => '21',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACHICHUCA',
            'estado_id' => '21',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAHUAPAN',
            'estado_id' => '21',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALTENANGO',
            'estado_id' => '21',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLANEPANTLA',
            'estado_id' => '21',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAOLA',
            'estado_id' => '21',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAPACOYA',
            'estado_id' => '21',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAPANALÁ',
            'estado_id' => '21',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLATLAUQUITEPEC',
            'estado_id' => '21',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAXCO',
            'estado_id' => '21',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOCHIMILCO',
            'estado_id' => '21',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOCHTEPEC',
            'estado_id' => '21',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTOLTEPEC DE GUERRERO',
            'estado_id' => '21',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULCINGO',
            'estado_id' => '21',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUZAMAPAN DE GALEANA',
            'estado_id' => '21',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZICATLACOYAN',
            'estado_id' => '21',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VENUSTIANO CARRANZA',
            'estado_id' => '21',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VICENTE GUERRERO',
            'estado_id' => '21',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XAYACATLÁN DE BRAVO',
            'estado_id' => '21',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICOTEPEC',
            'estado_id' => '21',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICOTLÁN',
            'estado_id' => '21',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XIUTETELCO',
            'estado_id' => '21',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHIAPULCO',
            'estado_id' => '21',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHILTEPEC',
            'estado_id' => '21',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHITLÁN DE VICENTE SUÁREZ',
            'estado_id' => '21',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCHITLÁN TODOS SANTOS',
            'estado_id' => '21',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAONÁHUAC',
            'estado_id' => '21',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YEHUALTEPEC',
            'estado_id' => '21',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACAPALA',
            'estado_id' => '21',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACAPOAXTLA',
            'estado_id' => '21',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACATLÁN',
            'estado_id' => '21',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN',
            'estado_id' => '21',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAPOTITLÁN DE MÉNDEZ',
            'estado_id' => '21',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZARAGOZA',
            'estado_id' => '21',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZAUTLA',
            'estado_id' => '21',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZIHUATEUTLA',
            'estado_id' => '21',
            'number' =>  '213',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZINACATEPEC',
            'estado_id' => '21',
            'number' =>  '214',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZONGOZOTLA',
            'estado_id' => '21',
            'number' =>  '215',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZOQUIAPAN',
            'estado_id' => '21',
            'number' =>  '216',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZOQUITLÁN',
            'estado_id' => '21',
            'number' =>  '217',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMEALCO DE BONFIL',
            'estado_id' => '22',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PINAL DE AMOLES',
            'estado_id' => '22',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARROYO SECO',
            'estado_id' => '22',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CADEREYTA DE MONTES',
            'estado_id' => '22',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COLÓN',
            'estado_id' => '22',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CORREGIDORA',
            'estado_id' => '22',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EZEQUIEL MONTES',
            'estado_id' => '22',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIMILPAN',
            'estado_id' => '22',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALPAN DE SERRA',
            'estado_id' => '22',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LANDA DE MATAMOROS',
            'estado_id' => '22',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL MARQUÉS',
            'estado_id' => '22',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PEDRO ESCOBEDO',
            'estado_id' => '22',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PEÑAMILLER',
            'estado_id' => '22',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUERÉTARO',
            'estado_id' => '22',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOAQUÍN',
            'estado_id' => '22',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN DEL RÍO',
            'estado_id' => '22',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEQUISQUIAPAN',
            'estado_id' => '22',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOLIMÁN',
            'estado_id' => '22',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COZUMEL',
            'estado_id' => '23',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FELIPE CARRILLO PUERTO',
            'estado_id' => '23',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ISLA MUJERES',
            'estado_id' => '23',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTHÓN P. BLANCO',
            'estado_id' => '23',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '23',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOSÉ MARÍA MORELOS',
            'estado_id' => '23',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LÁZARO CÁRDENAS',
            'estado_id' => '23',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLIDARIDAD',
            'estado_id' => '23',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULUM',
            'estado_id' => '23',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACALAR',
            'estado_id' => '23',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHUALULCO',
            'estado_id' => '24',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALAQUINES',
            'estado_id' => '24',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AQUISMÓN',
            'estado_id' => '24',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARMADILLO DE LOS INFANTE',
            'estado_id' => '24',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CÁRDENAS',
            'estado_id' => '24',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CATORCE',
            'estado_id' => '24',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CEDRAL',
            'estado_id' => '24',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CERRITOS',
            'estado_id' => '24',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CERRO DE SAN PEDRO',
            'estado_id' => '24',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIUDAD DEL MAÍZ',
            'estado_id' => '24',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIUDAD FERNÁNDEZ',
            'estado_id' => '24',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANCANHUITZ',
            'estado_id' => '24',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIUDAD VALLES',
            'estado_id' => '24',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COXCATLÁN',
            'estado_id' => '24',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHARCAS',
            'estado_id' => '24',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EBANO',
            'estado_id' => '24',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALCÁZAR',
            'estado_id' => '24',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEHUETLÁN',
            'estado_id' => '24',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAGUNILLAS',
            'estado_id' => '24',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATEHUALA',
            'estado_id' => '24',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEXQUITIC DE CARMONA',
            'estado_id' => '24',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOCTEZUMA',
            'estado_id' => '24',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAYÓN',
            'estado_id' => '24',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RIOVERDE',
            'estado_id' => '24',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALINAS',
            'estado_id' => '24',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANTONIO',
            'estado_id' => '24',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CIRO DE ACOSTA',
            'estado_id' => '24',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS POTOSÍ',
            'estado_id' => '24',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MARTÍN CHALCHICUAUTLA',
            'estado_id' => '24',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS TOLENTINO',
            'estado_id' => '24',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA',
            'estado_id' => '24',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DEL RÍO',
            'estado_id' => '24',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTO DOMINGO',
            'estado_id' => '24',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN VICENTE TANCUAYALAB',
            'estado_id' => '24',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLEDAD DE GRACIANO SÁNCHEZ',
            'estado_id' => '24',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMASOPO',
            'estado_id' => '24',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMAZUNCHALE',
            'estado_id' => '24',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMPACÁN',
            'estado_id' => '24',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMPAMOLÓN CORONA',
            'estado_id' => '24',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMUÍN',
            'estado_id' => '24',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANLAJÁS',
            'estado_id' => '24',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANQUIÁN DE ESCOBEDO',
            'estado_id' => '24',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIERRA NUEVA',
            'estado_id' => '24',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VANEGAS',
            'estado_id' => '24',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VENADO',
            'estado_id' => '24',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ARRIAGA',
            'estado_id' => '24',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE GUADALUPE',
            'estado_id' => '24',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE LA PAZ',
            'estado_id' => '24',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE RAMOS',
            'estado_id' => '24',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE REYES',
            'estado_id' => '24',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA HIDALGO',
            'estado_id' => '24',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA JUÁREZ',
            'estado_id' => '24',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AXTLA DE TERRAZAS',
            'estado_id' => '24',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XILITLA',
            'estado_id' => '24',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZARAGOZA',
            'estado_id' => '24',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE ARISTA',
            'estado_id' => '24',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATLAPA',
            'estado_id' => '24',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL NARANJO',
            'estado_id' => '24',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AHOME',
            'estado_id' => '25',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANGOSTURA',
            'estado_id' => '25',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BADIRAGUATO',
            'estado_id' => '25',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONCORDIA',
            'estado_id' => '25',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSALÁ',
            'estado_id' => '25',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CULIACÁN',
            'estado_id' => '25',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHOIX',
            'estado_id' => '25',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ELOTA',
            'estado_id' => '25',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESCUINAPA',
            'estado_id' => '25',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL FUERTE',
            'estado_id' => '25',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUASAVE',
            'estado_id' => '25',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATLÁN',
            'estado_id' => '25',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOCORITO',
            'estado_id' => '25',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROSARIO',
            'estado_id' => '25',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALVADOR ALVARADO',
            'estado_id' => '25',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN IGNACIO',
            'estado_id' => '25',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SINALOA',
            'estado_id' => '25',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAVOLATO',
            'estado_id' => '25',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACONCHI',
            'estado_id' => '26',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AGUA PRIETA',
            'estado_id' => '26',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALAMOS',
            'estado_id' => '26',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTAR',
            'estado_id' => '26',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARIVECHI',
            'estado_id' => '26',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ARIZPE',
            'estado_id' => '26',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATIL',
            'estado_id' => '26',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACADÉHUACHI',
            'estado_id' => '26',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACANORA',
            'estado_id' => '26',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACERAC',
            'estado_id' => '26',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACOACHI',
            'estado_id' => '26',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BÁCUM',
            'estado_id' => '26',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BANÁMICHI',
            'estado_id' => '26',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BAVIÁCORA',
            'estado_id' => '26',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BAVISPE',
            'estado_id' => '26',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENJAMÍN HILL',
            'estado_id' => '26',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CABORCA',
            'estado_id' => '26',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAJEME',
            'estado_id' => '26',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANANEA',
            'estado_id' => '26',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARBÓ',
            'estado_id' => '26',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA COLORADA',
            'estado_id' => '26',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUCURPE',
            'estado_id' => '26',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUMPAS',
            'estado_id' => '26',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DIVISADEROS',
            'estado_id' => '26',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMPALME',
            'estado_id' => '26',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ETCHOJOA',
            'estado_id' => '26',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRONTERAS',
            'estado_id' => '26',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GRANADOS',
            'estado_id' => '26',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUAYMAS',
            'estado_id' => '26',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HERMOSILLO',
            'estado_id' => '26',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUACHINERA',
            'estado_id' => '26',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUÁSABAS',
            'estado_id' => '26',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUATABAMPO',
            'estado_id' => '26',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUÉPAC',
            'estado_id' => '26',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IMURIS',
            'estado_id' => '26',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA',
            'estado_id' => '26',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATÁN',
            'estado_id' => '26',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOCTEZUMA',
            'estado_id' => '26',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NACO',
            'estado_id' => '26',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NÁCORI CHICO',
            'estado_id' => '26',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NACOZARI DE GARCÍA',
            'estado_id' => '26',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAVOJOA',
            'estado_id' => '26',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOGALES',
            'estado_id' => '26',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ONAVAS',
            'estado_id' => '26',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OPODEPE',
            'estado_id' => '26',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OQUITOA',
            'estado_id' => '26',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PITIQUITO',
            'estado_id' => '26',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUERTO PEÑASCO',
            'estado_id' => '26',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUIRIEGO',
            'estado_id' => '26',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAYÓN',
            'estado_id' => '26',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ROSARIO',
            'estado_id' => '26',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAHUARIPA',
            'estado_id' => '26',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE DE JESÚS',
            'estado_id' => '26',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JAVIER',
            'estado_id' => '26',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUIS RÍO COLORADO',
            'estado_id' => '26',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN MIGUEL DE HORCASITAS',
            'estado_id' => '26',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PEDRO DE LA CUEVA',
            'estado_id' => '26',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA',
            'estado_id' => '26',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ',
            'estado_id' => '26',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SÁRIC',
            'estado_id' => '26',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOYOPA',
            'estado_id' => '26',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUAQUI GRANDE',
            'estado_id' => '26',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPACHE',
            'estado_id' => '26',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TRINCHERAS',
            'estado_id' => '26',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUBUTAMA',
            'estado_id' => '26',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URES',
            'estado_id' => '26',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA HIDALGO',
            'estado_id' => '26',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA PESQUEIRA',
            'estado_id' => '26',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YÉCORA',
            'estado_id' => '26',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL PLUTARCO ELÍAS CALLES',
            'estado_id' => '26',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '26',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN IGNACIO RÍO MUERTO',
            'estado_id' => '26',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BALANCÁN',
            'estado_id' => '27',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CÁRDENAS',
            'estado_id' => '27',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CENTLA',
            'estado_id' => '27',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CENTRO',
            'estado_id' => '27',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMALCALCO',
            'estado_id' => '27',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUNDUACÁN',
            'estado_id' => '27',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMILIANO ZAPATA',
            'estado_id' => '27',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUIMANGUILLO',
            'estado_id' => '27',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALAPA',
            'estado_id' => '27',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALPA DE MÉNDEZ',
            'estado_id' => '27',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JONUTA',
            'estado_id' => '27',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MACUSPANA',
            'estado_id' => '27',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NACAJUCA',
            'estado_id' => '27',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PARAÍSO',
            'estado_id' => '27',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TACOTALPA',
            'estado_id' => '27',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEAPA',
            'estado_id' => '27',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENOSIQUE',
            'estado_id' => '27',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABASOLO',
            'estado_id' => '28',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALDAMA',
            'estado_id' => '28',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTAMIRA',
            'estado_id' => '28',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANTIGUO MORELOS',
            'estado_id' => '28',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BURGOS',
            'estado_id' => '28',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUSTAMANTE',
            'estado_id' => '28',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMARGO',
            'estado_id' => '28',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CASAS',
            'estado_id' => '28',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CIUDAD MADERO',
            'estado_id' => '28',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CRUILLAS',
            'estado_id' => '28',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GÓMEZ FARÍAS',
            'estado_id' => '28',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GONZÁLEZ',
            'estado_id' => '28',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GÜÉMEZ',
            'estado_id' => '28',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUERRERO',
            'estado_id' => '28',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUSTAVO DÍAZ ORDAZ',
            'estado_id' => '28',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGO',
            'estado_id' => '28',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JAUMAVE',
            'estado_id' => '28',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIMÉNEZ',
            'estado_id' => '28',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LLERA',
            'estado_id' => '28',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAINERO',
            'estado_id' => '28',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL MANTE',
            'estado_id' => '28',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MATAMOROS',
            'estado_id' => '28',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÉNDEZ',
            'estado_id' => '28',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIER',
            'estado_id' => '28',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIGUEL ALEMÁN',
            'estado_id' => '28',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIQUIHUANA',
            'estado_id' => '28',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO LAREDO',
            'estado_id' => '28',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NUEVO MORELOS',
            'estado_id' => '28',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OCAMPO',
            'estado_id' => '28',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PADILLA',
            'estado_id' => '28',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PALMILLAS',
            'estado_id' => '28',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'REYNOSA',
            'estado_id' => '28',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RÍO BRAVO',
            'estado_id' => '28',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN CARLOS',
            'estado_id' => '28',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FERNANDO',
            'estado_id' => '28',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN NICOLÁS',
            'estado_id' => '28',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOTO LA MARINA',
            'estado_id' => '28',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMPICO',
            'estado_id' => '28',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TULA',
            'estado_id' => '28',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLE HERMOSO',
            'estado_id' => '28',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VICTORIA',
            'estado_id' => '28',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLAGRÁN',
            'estado_id' => '28',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICOTÉNCATL',
            'estado_id' => '28',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMAXAC DE GUERRERO',
            'estado_id' => '29',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APETATITLÁN DE ANTONIO CARVAJAL',
            'estado_id' => '29',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLANGATEPEC',
            'estado_id' => '29',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLTZAYANCA',
            'estado_id' => '29',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APIZACO',
            'estado_id' => '29',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALPULALPAN',
            'estado_id' => '29',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL CARMEN TEQUEXQUITLA',
            'estado_id' => '29',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAPIAXTLA',
            'estado_id' => '29',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAXOMULCO',
            'estado_id' => '29',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIAUTEMPAN',
            'estado_id' => '29',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MUÑOZ DE DOMINGO ARENAS',
            'estado_id' => '29',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESPAÑITA',
            'estado_id' => '29',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAMANTLA',
            'estado_id' => '29',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYOTLIPAN',
            'estado_id' => '29',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTACUIXTLA DE MARIANO MATAMOROS',
            'estado_id' => '29',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTENCO',
            'estado_id' => '29',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZATECOCHCO DE JOSÉ MARÍA MORELOS',
            'estado_id' => '29',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONTLA DE JUAN CUAMATZI',
            'estado_id' => '29',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETITLA DE LARDIZÁBAL',
            'estado_id' => '29',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANCTÓRUM DE LÁZARO CÁRDENAS',
            'estado_id' => '29',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NANACAMILPA DE MARIANO ARISTA',
            'estado_id' => '29',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACUAMANALA DE MIGUEL HIDALGO',
            'estado_id' => '29',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NATÍVITAS',
            'estado_id' => '29',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANOTLA',
            'estado_id' => '29',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN PABLO DEL MONTE',
            'estado_id' => '29',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ TLAXCALA',
            'estado_id' => '29',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENANCINGO',
            'estado_id' => '29',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOLOCHOLCO',
            'estado_id' => '29',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPEYANCO',
            'estado_id' => '29',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TERRENATE',
            'estado_id' => '29',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETLA DE LA SOLIDARIDAD',
            'estado_id' => '29',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETLATLAHUCA',
            'estado_id' => '29',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAXCALA',
            'estado_id' => '29',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAXCO',
            'estado_id' => '29',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOCATLÁN',
            'estado_id' => '29',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTOLAC',
            'estado_id' => '29',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZILTLALTÉPEC DE TRINIDAD SÁNCHEZ SANTOS',
            'estado_id' => '29',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZOMPANTEPEC',
            'estado_id' => '29',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALOZTOC',
            'estado_id' => '29',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALTOCAN',
            'estado_id' => '29',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAPALOTLA DE XICOHTÉNCATL',
            'estado_id' => '29',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICOHTZINCO',
            'estado_id' => '29',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAUHQUEMEHCAN',
            'estado_id' => '29',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACATELCO',
            'estado_id' => '29',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '29',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMILIANO ZAPATA',
            'estado_id' => '29',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LÁZARO CÁRDENAS',
            'estado_id' => '29',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA MAGDALENA TLALTELULCO',
            'estado_id' => '29',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN DAMIÁN TEXÓLOC',
            'estado_id' => '29',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FRANCISCO TETLANOHCAN',
            'estado_id' => '29',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JERÓNIMO ZACUALPAN',
            'estado_id' => '29',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JOSÉ TEACALCO',
            'estado_id' => '29',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN HUACTZINCO',
            'estado_id' => '29',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LORENZO AXOCOMANITLA',
            'estado_id' => '29',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN LUCAS TECOPILCO',
            'estado_id' => '29',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ANA NOPALUCAN',
            'estado_id' => '29',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA APOLONIA TEACALCO',
            'estado_id' => '29',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CATARINA AYOMETLA',
            'estado_id' => '29',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA CRUZ QUILEHTLA',
            'estado_id' => '29',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ISABEL XILOXOXTLA',
            'estado_id' => '29',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAJETE',
            'estado_id' => '30',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACATLÁN',
            'estado_id' => '30',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACAYUCAN',
            'estado_id' => '30',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACTOPAN',
            'estado_id' => '30',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACULA',
            'estado_id' => '30',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACULTZINGO',
            'estado_id' => '30',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMARÓN DE TEJEDA',
            'estado_id' => '30',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALPATLÁHUAC',
            'estado_id' => '30',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTO LUCERO DE GUTIÉRREZ BARRIOS',
            'estado_id' => '30',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALTOTONGA',
            'estado_id' => '30',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ALVARADO',
            'estado_id' => '30',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATITLÁN',
            'estado_id' => '30',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NARANJOS AMATLÁN',
            'estado_id' => '30',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AMATLÁN DE LOS REYES',
            'estado_id' => '30',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ANGEL R. CABADA',
            'estado_id' => '30',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA ANTIGUA',
            'estado_id' => '30',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APAZAPAN',
            'estado_id' => '30',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AQUILA',
            'estado_id' => '30',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ASTACINGA',
            'estado_id' => '30',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATLAHUILCO',
            'estado_id' => '30',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOYAC',
            'estado_id' => '30',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATZACAN',
            'estado_id' => '30',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATZALAN',
            'estado_id' => '30',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALTETELA',
            'estado_id' => '30',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AYAHUALULCO',
            'estado_id' => '30',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BANDERILLA',
            'estado_id' => '30',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '30',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BOCA DEL RÍO',
            'estado_id' => '30',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALCAHUALCO',
            'estado_id' => '30',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAMERINO Z. MENDOZA',
            'estado_id' => '30',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARRILLO PUERTO',
            'estado_id' => '30',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CATEMACO',
            'estado_id' => '30',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAZONES DE HERRERA',
            'estado_id' => '30',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CERRO AZUL',
            'estado_id' => '30',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CITLALTÉPETL',
            'estado_id' => '30',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COACOATZINTLA',
            'estado_id' => '30',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COAHUITLÁN',
            'estado_id' => '30',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATEPEC',
            'estado_id' => '30',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATZACOALCOS',
            'estado_id' => '30',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COATZINTLA',
            'estado_id' => '30',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COETZALA',
            'estado_id' => '30',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COLIPA',
            'estado_id' => '30',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COMAPA',
            'estado_id' => '30',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CÓRDOBA',
            'estado_id' => '30',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSAMALOAPAN DE CARPIO',
            'estado_id' => '30',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSAUTLÁN DE CARVAJAL',
            'estado_id' => '30',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSCOMATEPEC',
            'estado_id' => '30',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COSOLEACAQUE',
            'estado_id' => '30',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COTAXTLA',
            'estado_id' => '30',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COXQUIHUI',
            'estado_id' => '30',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'COYUTLA',
            'estado_id' => '30',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUICHAPA',
            'estado_id' => '30',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUITLÁHUAC',
            'estado_id' => '30',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHACALTIANGUIS',
            'estado_id' => '30',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALMA',
            'estado_id' => '30',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICOnombreL',
            'estado_id' => '30',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICONQUIACO',
            'estado_id' => '30',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICONTEPEC',
            'estado_id' => '30',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHInombreCA',
            'estado_id' => '30',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHINAMPA DE GOROSTIZA',
            'estado_id' => '30',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAS CHOAPAS',
            'estado_id' => '30',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHOCAMÁN',
            'estado_id' => '30',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHONTLA',
            'estado_id' => '30',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHUMATLÁN',
            'estado_id' => '30',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EMILIANO ZAPATA',
            'estado_id' => '30',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESPINAL',
            'estado_id' => '30',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FILOMENO MATA',
            'estado_id' => '30',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FORTÍN',
            'estado_id' => '30',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUTIÉRREZ ZAMORA',
            'estado_id' => '30',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HIDALGOTITLÁN',
            'estado_id' => '30',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUATUSCO',
            'estado_id' => '30',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUAYACOCOTLA',
            'estado_id' => '30',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUEYAPAN DE OCAMPO',
            'estado_id' => '30',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUILOAPAN DE CUAUHTÉMOC',
            'estado_id' => '30',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IGNACIO DE LA LLAVE',
            'estado_id' => '30',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ILAMATLÁN',
            'estado_id' => '30',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ISLA',
            'estado_id' => '30',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXCATEPEC',
            'estado_id' => '30',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUACÁN DE LOS REYES',
            'estado_id' => '30',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUATLÁN DEL CAFÉ',
            'estado_id' => '30',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUATLANCILLO',
            'estado_id' => '30',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUATLÁN DEL SURESTE',
            'estado_id' => '30',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXHUATLÁN DE MADERO',
            'estado_id' => '30',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXMATLAHUACAN',
            'estado_id' => '30',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXTACZOQUITLÁN',
            'estado_id' => '30',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALACINGO',
            'estado_id' => '30',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XALAPA',
            'estado_id' => '30',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALCOMULCO',
            'estado_id' => '30',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JÁLTIPAN',
            'estado_id' => '30',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JAMAPA',
            'estado_id' => '30',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JESÚS CARRANZA',
            'estado_id' => '30',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XICO',
            'estado_id' => '30',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JILOTEPEC',
            'estado_id' => '30',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN RODRÍGUEZ CLARA',
            'estado_id' => '30',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUCHIQUE DE FERRER',
            'estado_id' => '30',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LANDERO Y COSS',
            'estado_id' => '30',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LERDO DE TEJADA',
            'estado_id' => '30',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAGDALENA',
            'estado_id' => '30',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MALTRATA',
            'estado_id' => '30',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MANLIO FABIO ALTAMIRANO',
            'estado_id' => '30',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARIANO ESCOBEDO',
            'estado_id' => '30',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MARTÍNEZ DE LA TORRE',
            'estado_id' => '30',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MECATLÁN',
            'estado_id' => '30',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MECAYAPAN',
            'estado_id' => '30',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEDELLÍN DE BRAVO',
            'estado_id' => '30',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIAHUATLÁN',
            'estado_id' => '30',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAS MINAS',
            'estado_id' => '30',
            'number' =>  '107',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MINATITLÁN',
            'estado_id' => '30',
            'number' =>  '108',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MISANTLA',
            'estado_id' => '30',
            'number' =>  '109',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIXTLA DE ALTAMIRANO',
            'estado_id' => '30',
            'number' =>  '110',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOLOACÁN',
            'estado_id' => '30',
            'number' =>  '111',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAOLINCO',
            'estado_id' => '30',
            'number' =>  '112',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NARANJAL',
            'estado_id' => '30',
            'number' =>  '113',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NAUTLA',
            'estado_id' => '30',
            'number' =>  '114',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOGALES',
            'estado_id' => '30',
            'number' =>  '115',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OLUTA',
            'estado_id' => '30',
            'number' =>  '116',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OMEALCA',
            'estado_id' => '30',
            'number' =>  '117',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ORIZABA',
            'estado_id' => '30',
            'number' =>  '118',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTATITLÁN',
            'estado_id' => '30',
            'number' =>  '119',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OTEAPAN',
            'estado_id' => '30',
            'number' =>  '120',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OZULUAMA DE MASCAREÑAS',
            'estado_id' => '30',
            'number' =>  '121',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAJAPAN',
            'estado_id' => '30',
            'number' =>  '122',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PÁNUCO',
            'estado_id' => '30',
            'number' =>  '123',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PAPANTLA',
            'estado_id' => '30',
            'number' =>  '124',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PASO DEL MACHO',
            'estado_id' => '30',
            'number' =>  '125',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PASO DE OVEJAS',
            'estado_id' => '30',
            'number' =>  '126',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LA PERLA',
            'estado_id' => '30',
            'number' =>  '127',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PEROTE',
            'estado_id' => '30',
            'number' =>  '128',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PLATÓN SÁNCHEZ',
            'estado_id' => '30',
            'number' =>  '129',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PLAYA VICENTE',
            'estado_id' => '30',
            'number' =>  '130',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'POZA RICA DE HIDALGO',
            'estado_id' => '30',
            'number' =>  '131',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LAS VIGAS DE RAMÍREZ',
            'estado_id' => '30',
            'number' =>  '132',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUEBLO VIEJO',
            'estado_id' => '30',
            'number' =>  '133',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PUENTE NACIONAL',
            'estado_id' => '30',
            'number' =>  '134',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAFAEL DELGADO',
            'estado_id' => '30',
            'number' =>  '135',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RAFAEL LUCIO',
            'estado_id' => '30',
            'number' =>  '136',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LOS REYES',
            'estado_id' => '30',
            'number' =>  '137',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RÍO BLANCO',
            'estado_id' => '30',
            'number' =>  '138',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SALTABARRANCA',
            'estado_id' => '30',
            'number' =>  '139',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS TENEJAPAN',
            'estado_id' => '30',
            'number' =>  '140',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN ANDRÉS TUXTLA',
            'estado_id' => '30',
            'number' =>  '141',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN JUAN EVANGELISTA',
            'estado_id' => '30',
            'number' =>  '142',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO TUXTLA',
            'estado_id' => '30',
            'number' =>  '143',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAYULA DE ALEMÁN',
            'estado_id' => '30',
            'number' =>  '144',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOCONUSCO',
            'estado_id' => '30',
            'number' =>  '145',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOCHIAPA',
            'estado_id' => '30',
            'number' =>  '146',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLEDAD ATZOMPA',
            'estado_id' => '30',
            'number' =>  '147',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOLEDAD DE DOBLADO',
            'estado_id' => '30',
            'number' =>  '148',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOTEAPAN',
            'estado_id' => '30',
            'number' =>  '149',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMALÍN',
            'estado_id' => '30',
            'number' =>  '150',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMIAHUA',
            'estado_id' => '30',
            'number' =>  '151',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAMPICO ALTO',
            'estado_id' => '30',
            'number' =>  '152',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANCOCO',
            'estado_id' => '30',
            'number' =>  '153',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANTIMA',
            'estado_id' => '30',
            'number' =>  '154',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TANTOYUCA',
            'estado_id' => '30',
            'number' =>  '155',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TATATILA',
            'estado_id' => '30',
            'number' =>  '156',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CASTILLO DE TEAYO',
            'estado_id' => '30',
            'number' =>  '157',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOLUTLA',
            'estado_id' => '30',
            'number' =>  '158',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEHUIPANGO',
            'estado_id' => '30',
            'number' =>  '159',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ÁLAMO TEMAPACHE',
            'estado_id' => '30',
            'number' =>  '160',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMPOAL',
            'estado_id' => '30',
            'number' =>  '161',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENAMPA',
            'estado_id' => '30',
            'number' =>  '162',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TENOCHTITLÁN',
            'estado_id' => '30',
            'number' =>  '163',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEOCELO',
            'estado_id' => '30',
            'number' =>  '164',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPATLAXCO',
            'estado_id' => '30',
            'number' =>  '165',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETLÁN',
            'estado_id' => '30',
            'number' =>  '166',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETZINTLA',
            'estado_id' => '30',
            'number' =>  '167',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEQUILA',
            'estado_id' => '30',
            'number' =>  '168',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JOSÉ AZUETA',
            'estado_id' => '30',
            'number' =>  '169',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXCATEPEC',
            'estado_id' => '30',
            'number' =>  '170',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXHUACÁN',
            'estado_id' => '30',
            'number' =>  '171',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEXISTEPEC',
            'estado_id' => '30',
            'number' =>  '172',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEZONAPA',
            'estado_id' => '30',
            'number' =>  '173',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIERRA BLANCA',
            'estado_id' => '30',
            'number' =>  '174',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIHUATLÁN',
            'estado_id' => '30',
            'number' =>  '175',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOJALPAN',
            'estado_id' => '30',
            'number' =>  '176',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOLULAN',
            'estado_id' => '30',
            'number' =>  '177',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOTALPAN',
            'estado_id' => '30',
            'number' =>  '178',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACOTEPEC DE MEJÍA',
            'estado_id' => '30',
            'number' =>  '179',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLACHICHILCO',
            'estado_id' => '30',
            'number' =>  '180',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALIXCOYAN',
            'estado_id' => '30',
            'number' =>  '181',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALNELHUAYOCAN',
            'estado_id' => '30',
            'number' =>  '182',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAPACOYAN',
            'estado_id' => '30',
            'number' =>  '183',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLAQUILPA',
            'estado_id' => '30',
            'number' =>  '184',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLILAPAN',
            'estado_id' => '30',
            'number' =>  '185',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOMATLÁN',
            'estado_id' => '30',
            'number' =>  '186',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TONAYÁN',
            'estado_id' => '30',
            'number' =>  '187',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TOTUTLA',
            'estado_id' => '30',
            'number' =>  '188',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXPAN',
            'estado_id' => '30',
            'number' =>  '189',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUXTILLA',
            'estado_id' => '30',
            'number' =>  '190',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'URSULO GALVÁN',
            'estado_id' => '30',
            'number' =>  '191',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VEGA DE ALATORRE',
            'estado_id' => '30',
            'number' =>  '192',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VERACRUZ',
            'estado_id' => '30',
            'number' =>  '193',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA ALDAMA',
            'estado_id' => '30',
            'number' =>  '194',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOXOCOTLA',
            'estado_id' => '30',
            'number' =>  '195',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YANGA',
            'estado_id' => '30',
            'number' =>  '196',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YECUATLA',
            'estado_id' => '30',
            'number' =>  '197',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACUALPAN',
            'estado_id' => '30',
            'number' =>  '198',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZARAGOZA',
            'estado_id' => '30',
            'number' =>  '199',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZENTLA',
            'estado_id' => '30',
            'number' =>  '200',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZONGOLICA',
            'estado_id' => '30',
            'number' =>  '201',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZONTECOMATLÁN DE LÓPEZ Y FUENTES',
            'estado_id' => '30',
            'number' =>  '202',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZOZOCOLCO DE HIDALGO',
            'estado_id' => '30',
            'number' =>  '203',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AGUA DULCE',
            'estado_id' => '30',
            'number' =>  '204',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL HIGO',
            'estado_id' => '30',
            'number' =>  '205',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NANCHITAL DE LÁZARO CÁRDENAS DEL RÍO',
            'estado_id' => '30',
            'number' =>  '206',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TRES VALLES',
            'estado_id' => '30',
            'number' =>  '207',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CARLOS A. CARRILLO',
            'estado_id' => '30',
            'number' =>  '208',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TATAHUICAPAN DE JUÁREZ',
            'estado_id' => '30',
            'number' =>  '209',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UXPANAPA',
            'estado_id' => '30',
            'number' =>  '210',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN RAFAEL',
            'estado_id' => '30',
            'number' =>  '211',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTIAGO SOCHIAPAN',
            'estado_id' => '30',
            'number' =>  '212',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ABALÁ',
            'estado_id' => '31',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ACANCEH',
            'estado_id' => '31',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'AKIL',
            'estado_id' => '31',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BACA',
            'estado_id' => '31',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BOKOBÁ',
            'estado_id' => '31',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BUCTZOTZ',
            'estado_id' => '31',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CACALCHÉN',
            'estado_id' => '31',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALOTMUL',
            'estado_id' => '31',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANSAHCAB',
            'estado_id' => '31',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CANTAMAYEC',
            'estado_id' => '31',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CELESTÚN',
            'estado_id' => '31',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CENOTILLO',
            'estado_id' => '31',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONKAL',
            'estado_id' => '31',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUNCUNUL',
            'estado_id' => '31',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUZAMÁ',
            'estado_id' => '31',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHACSINKÍN',
            'estado_id' => '31',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHANKOM',
            'estado_id' => '31',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHAPAB',
            'estado_id' => '31',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHEMAX',
            'estado_id' => '31',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICXULUB PUEBLO',
            'estado_id' => '31',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHICHIMILÁ',
            'estado_id' => '31',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHIKINDZONOT',
            'estado_id' => '31',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHOCHOLÁ',
            'estado_id' => '31',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHUMAYEL',
            'estado_id' => '31',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZÁN',
            'estado_id' => '31',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZEMUL',
            'estado_id' => '31',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZIDZANTÚN',
            'estado_id' => '31',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZILAM DE BRAVO',
            'estado_id' => '31',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZILAM GONZÁLEZ',
            'estado_id' => '31',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZITÁS',
            'estado_id' => '31',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'DZONCAUICH',
            'estado_id' => '31',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ESPITA',
            'estado_id' => '31',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HALACHÓ',
            'estado_id' => '31',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HOCABÁ',
            'estado_id' => '31',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HOCTÚN',
            'estado_id' => '31',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HOMÚN',
            'estado_id' => '31',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUHÍ',
            'estado_id' => '31',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUNUCMÁ',
            'estado_id' => '31',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IXIL',
            'estado_id' => '31',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'IZAMAL',
            'estado_id' => '31',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'KANASÍN',
            'estado_id' => '31',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'KANTUNIL',
            'estado_id' => '31',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'KAUA',
            'estado_id' => '31',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'KINCHIL',
            'estado_id' => '31',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'KOPOMÁ',
            'estado_id' => '31',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAMA',
            'estado_id' => '31',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MANÍ',
            'estado_id' => '31',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAXCANÚ',
            'estado_id' => '31',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAYAPÁN',
            'estado_id' => '31',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MÉRIDA',
            'estado_id' => '31',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOCOCHÁ',
            'estado_id' => '31',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOTUL',
            'estado_id' => '31',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MUNA',
            'estado_id' => '31',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MUXUPIP',
            'estado_id' => '31',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OPICHÉN',
            'estado_id' => '31',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OXKUTZCAB',
            'estado_id' => '31',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PANABÁ',
            'estado_id' => '31',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PETO',
            'estado_id' => '31',
            'number' =>  '058',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PROGRESO',
            'estado_id' => '31',
            'number' =>  '059',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'QUINTANA ROO',
            'estado_id' => '31',
            'number' =>  '060',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RÍO LAGARTOS',
            'estado_id' => '31',
            'number' =>  '061',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SACALUM',
            'estado_id' => '31',
            'number' =>  '062',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAMAHIL',
            'estado_id' => '31',
            'number' =>  '063',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANAHCAT',
            'estado_id' => '31',
            'number' =>  '064',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAN FELIPE',
            'estado_id' => '31',
            'number' =>  '065',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA ELENA',
            'estado_id' => '31',
            'number' =>  '066',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SEYÉ',
            'estado_id' => '31',
            'number' =>  '067',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SINANCHÉ',
            'estado_id' => '31',
            'number' =>  '068',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOTUTA',
            'estado_id' => '31',
            'number' =>  '069',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUCILÁ',
            'estado_id' => '31',
            'number' =>  '070',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUDZAL',
            'estado_id' => '31',
            'number' =>  '071',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUMA',
            'estado_id' => '31',
            'number' =>  '072',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAHDZIÚ',
            'estado_id' => '31',
            'number' =>  '073',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TAHMEK',
            'estado_id' => '31',
            'number' =>  '074',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEABO',
            'estado_id' => '31',
            'number' =>  '075',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TECOH',
            'estado_id' => '31',
            'number' =>  '076',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEKAL DE VENEGAS',
            'estado_id' => '31',
            'number' =>  '077',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEKANTÓ',
            'estado_id' => '31',
            'number' =>  '078',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEKAX',
            'estado_id' => '31',
            'number' =>  '079',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEKIT',
            'estado_id' => '31',
            'number' =>  '080',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEKOM',
            'estado_id' => '31',
            'number' =>  '081',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TELCHAC PUEBLO',
            'estado_id' => '31',
            'number' =>  '082',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TELCHAC PUERTO',
            'estado_id' => '31',
            'number' =>  '083',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMAX',
            'estado_id' => '31',
            'number' =>  '084',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEMOZÓN',
            'estado_id' => '31',
            'number' =>  '085',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPAKÁN',
            'estado_id' => '31',
            'number' =>  '086',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TETIZ',
            'estado_id' => '31',
            'number' =>  '087',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEYA',
            'estado_id' => '31',
            'number' =>  '088',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TICUL',
            'estado_id' => '31',
            'number' =>  '089',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIMUCUY',
            'estado_id' => '31',
            'number' =>  '090',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TINUM',
            'estado_id' => '31',
            'number' =>  '091',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIXCACALCUPUL',
            'estado_id' => '31',
            'number' =>  '092',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIXKOKOB',
            'estado_id' => '31',
            'number' =>  '093',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIXMEHUAC',
            'estado_id' => '31',
            'number' =>  '094',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIXPÉHUAL',
            'estado_id' => '31',
            'number' =>  '095',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TIZIMÍN',
            'estado_id' => '31',
            'number' =>  '096',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TUNKÁS',
            'estado_id' => '31',
            'number' =>  '097',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TZUCACAB',
            'estado_id' => '31',
            'number' =>  '098',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UAYMA',
            'estado_id' => '31',
            'number' =>  '099',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UCÚ',
            'estado_id' => '31',
            'number' =>  '100',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'UMÁN',
            'estado_id' => '31',
            'number' =>  '101',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALLADOLID',
            'estado_id' => '31',
            'number' =>  '102',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'XOCCHEL',
            'estado_id' => '31',
            'number' =>  '103',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAXCABÁ',
            'estado_id' => '31',
            'number' =>  '104',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YAXKUKUL',
            'estado_id' => '31',
            'number' =>  '105',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'YOBAÍN',
            'estado_id' => '31',
            'number' =>  '106',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APOZOL',
            'estado_id' => '32',
            'number' =>  '001',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'APULCO',
            'estado_id' => '32',
            'number' =>  '002',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ATOLINGA',
            'estado_id' => '32',
            'number' =>  '003',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'BENITO JUÁREZ',
            'estado_id' => '32',
            'number' =>  '004',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CALERA',
            'estado_id' => '32',
            'number' =>  '005',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CAÑITAS DE FELIPE PESCADOR',
            'estado_id' => '32',
            'number' =>  '006',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CONCEPCIÓN DEL ORO',
            'estado_id' => '32',
            'number' =>  '007',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CUAUHTÉMOC',
            'estado_id' => '32',
            'number' =>  '008',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'CHALCHIHUITES',
            'estado_id' => '32',
            'number' =>  '009',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'FRESNILLO',
            'estado_id' => '32',
            'number' =>  '010',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TRINIDAD GARCÍA DE LA CADENA',
            'estado_id' => '32',
            'number' =>  '011',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENARO CODINA',
            'estado_id' => '32',
            'number' =>  '012',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL ENRIQUE ESTRADA',
            'estado_id' => '32',
            'number' =>  '013',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL FRANCISCO R. MURGUÍA',
            'estado_id' => '32',
            'number' =>  '014',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL PLATEADO DE JOAQUÍN AMARO',
            'estado_id' => '32',
            'number' =>  '015',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GENERAL PÁNFILO NATERA',
            'estado_id' => '32',
            'number' =>  '016',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'GUADALUPE',
            'estado_id' => '32',
            'number' =>  '017',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'HUANUSCO',
            'estado_id' => '32',
            'number' =>  '018',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JALPA',
            'estado_id' => '32',
            'number' =>  '019',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JEREZ',
            'estado_id' => '32',
            'number' =>  '020',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JIMÉNEZ DEL TEUL',
            'estado_id' => '32',
            'number' =>  '021',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUAN ALDAMA',
            'estado_id' => '32',
            'number' =>  '022',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'JUCHIPILA',
            'estado_id' => '32',
            'number' =>  '023',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LORETO',
            'estado_id' => '32',
            'number' =>  '024',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'LUIS MOYA',
            'estado_id' => '32',
            'number' =>  '025',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MAZAPIL',
            'estado_id' => '32',
            'number' =>  '026',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MELCHOR OCAMPO',
            'estado_id' => '32',
            'number' =>  '027',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MEZQUITAL DEL ORO',
            'estado_id' => '32',
            'number' =>  '028',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MIGUEL AUZA',
            'estado_id' => '32',
            'number' =>  '029',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOMAX',
            'estado_id' => '32',
            'number' =>  '030',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MONTE ESCOBEDO',
            'estado_id' => '32',
            'number' =>  '031',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MORELOS',
            'estado_id' => '32',
            'number' =>  '032',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'MOYAHUA DE ESTRADA',
            'estado_id' => '32',
            'number' =>  '033',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NOCHISTLÁN DE MEJÍA',
            'estado_id' => '32',
            'number' =>  '034',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'NORIA DE ÁNGELES',
            'estado_id' => '32',
            'number' =>  '035',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'OJOCALIENTE',
            'estado_id' => '32',
            'number' =>  '036',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PÁNUCO',
            'estado_id' => '32',
            'number' =>  '037',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'PINOS',
            'estado_id' => '32',
            'number' =>  '038',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'RÍO GRANDE',
            'estado_id' => '32',
            'number' =>  '039',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SAIN ALTO',
            'estado_id' => '32',
            'number' =>  '040',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'EL SALVADOR',
            'estado_id' => '32',
            'number' =>  '041',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SOMBRERETE',
            'estado_id' => '32',
            'number' =>  '042',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SUSTICACÁN',
            'estado_id' => '32',
            'number' =>  '043',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TABASCO',
            'estado_id' => '32',
            'number' =>  '044',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPECHITLÁN',
            'estado_id' => '32',
            'number' =>  '045',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEPETONGO',
            'estado_id' => '32',
            'number' =>  '046',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TEÚL DE GONZÁLEZ ORTEGA',
            'estado_id' => '32',
            'number' =>  '047',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TLALTENANGO DE SÁNCHEZ ROMÁN',
            'estado_id' => '32',
            'number' =>  '048',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VALPARAÍSO',
            'estado_id' => '32',
            'number' =>  '049',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VETAGRANDE',
            'estado_id' => '32',
            'number' =>  '050',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA DE COS',
            'estado_id' => '32',
            'number' =>  '051',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA GARCÍA',
            'estado_id' => '32',
            'number' =>  '052',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA GONZÁLEZ ORTEGA',
            'estado_id' => '32',
            'number' =>  '053',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLA HIDALGO',
            'estado_id' => '32',
            'number' =>  '054',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'VILLANUEVA',
            'estado_id' => '32',
            'number' =>  '055',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'ZACATECAS',
            'estado_id' => '32',
            'number' =>  '056',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'TRANCOSO',
            'estado_id' => '32',
            'number' =>  '057',
        ]);
        DB::table('municipios')->insert([
            'nombre' =>  'SANTA MARÍA DE LA PAZ',
            'estado_id' => '32',
            'number' =>  '058',
        ]);
    }
}
