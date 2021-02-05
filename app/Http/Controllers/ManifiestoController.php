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

            $pdf->SetFontSize('14');
            $pdf->SetXY(100, 57);
            $pdf->Write(10, $clientes);
        }

        $pdf->Output();

        return view('manifiestos.create');
    }
}
