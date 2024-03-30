<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function gerarPDFmedicao(Request $request){
		$id = $request->id;
        $equipe = $request->equipe;
        $nomeequipe = $request->nomequipe;
		$peixe_1 = floatval($request->peixe_1);
		$peixe_2 = floatval($request->peixe_2);
		$peixe_3 = floatval($request->peixe_3);
		$peixe_4 = floatval($request->peixe_4);
		$peixe_5 = floatval($request->peixe_5);
		$penalidade_1 = floatval($request->penalidade_1);
		$total = floatval($request->total);
        $etapa = $request->etapa;
        
        $customPaper =(array(0,0,204,1300));
        $pdf = pdf::loadView("pdfmedicao", compact('equipe', 'nomeequipe', 'etapa','peixe_1', 'peixe_2', 'peixe_3', 'peixe_4', 'peixe_5', 'penalidade_1', 'total'));

        return $pdf->setPaper($customPaper)
                    ->setOption('dpi', 72)
                    ->setOption('isRemoteEnabled', true)
                    ->stream("medicao_equipe".$equipe.".pdf");
    }
}
