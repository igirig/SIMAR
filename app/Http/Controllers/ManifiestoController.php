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

    public function index()
    {
        $sucursales = Manifiesto::paginate(6);
        return view('manifiestos.index', compact('manifiestos'));
    }

    public function create()
    {
        return view('manifiestos.create');
    }
}
