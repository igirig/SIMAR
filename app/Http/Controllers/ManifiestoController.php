<?php

use PhpParser\Node\Expr\Include_;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
use App\Models\Manifiesto;
use Illuminate\Support\Facades\DB;

class ManifiestoController extends Controller
{
    public function create()
    {
        //$clientes = DB::select('select * from users where id = ?', [1]);
        $clientes = DB::table('clientes')->get();
        //echo implode($clientes);

        $pdf = new FPDI();
        $pagecount = $pdf->setSourceFile('pdfs/CLE2.pdf');

        for ($pageNo = 1; $pageNo <= $pagecount; $pageNo++) {
            $tpl = $pdf->importPage($pageNo);
            $pdf->AddPage('p');

            $pdf->useTemplate($tpl);

            $pdf->SetFont('Helvetica');

            $pdf->SetFontSize('12');
            $pdf->SetXY(79, 57);
            $pdf->Write(10, 'GRUPO GASEROS ZAMORA SA  DE CV');

            $pdf->SetFontSize('12');
            $pdf->SetXY(67, 62);
            $pdf->Write(10, 'Arquitectos #12                                                   Casa Blanca');

            $pdf->SetFontSize('12');
            $pdf->SetXY(67, 67);
            $pdf->Write(10, 'Gutierrez Zamora                                                   Veracruz');

            //Hoja2
            $pdf->SetFontSize('12');
            $pdf->SetXY(79, 180);
            $pdf->Write(10, 'GRUPO GASEROS ZAMORA SA  DE CV');

            $pdf->SetFontSize('12');
            $pdf->SetXY(67, 185);
            $pdf->Write(10, 'Arquitectos #12                                                   Casa Blanca');

            $pdf->SetFontSize('12');
            $pdf->SetXY(67, 190);
            $pdf->Write(10, 'Gutierrez Zamora                                                   Veracruz');
        
            // $pdf->SetFontSize('12');
            // $pdf->SetXY(79, 57);
            // $pdf->Write(10,$clientes);

            // $pdf->SetFontSize('12');
            // $pdf->SetXY(79, 180);
            // $pdf->Write(10,$clientes);
        }

        $pdf->Output();

        return view('manifiestos.create');
    }
}
