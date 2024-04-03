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
        $penalidade_2 = floatval($request->penalidade_2);
        $penalidade_3 = floatval($request->penalidade_3);
        $penalidade_4 = floatval($request->penalidade_4);
        $penalidade_5 = floatval($request->penalidade_5);
		$penalidade_chegada = floatval($request->penalidade_chegada);
        $total = floatval($request->total);
        $etapa = $request->etapa;

        $peixes = [
			[
				'peixe' => 1,
				'tamanho' => $peixe_1,
				'penalidade' => $penalidade_1
			],
			[
				'peixe' => 2,
				'tamanho' => $peixe_2,
				'penalidade' => $penalidade_2
			],
			[
				'peixe' => 3,
				'tamanho' => $peixe_3,
				'penalidade' => $penalidade_3
			],
			[
				'peixe' => 4,
				'tamanho' => $peixe_4,
				'penalidade' => $penalidade_4
			],
			[
				'peixe' => 5,
				'tamanho' => $peixe_5,
				'penalidade' => $penalidade_5
			],
		];

		// Inicializa arrays para extração e ordenação
		$tamanhos = [];

		// Extrai os tamanhos dos peixes para um array separado
		foreach ($peixes as $key => $peixe) {
			$tamanhos[$key] = $peixe['tamanho'];
		}

		// Ordena os peixes com base nos tamanhos
		array_multisort($tamanhos, SORT_ASC, $peixes);

        $peixes[0]['menor_peixe'] = '(*)';
        $peixes[1]['menor_peixe'] = '';
        $peixes[2]['menor_peixe'] = '';
        $peixes[3]['menor_peixe'] = '';
        $peixes[4]['menor_peixe'] = '';


        // Inicializa arrays para extração e ordenação
		$indices = [];

		// Extrai os tamanhos dos peixes para um array separado
		foreach ($peixes as $key => $peixe) {
			$indices[$key] = $peixe['peixe'];
		}

        array_multisort($indices, SORT_ASC, $peixes);
    
        $peixe_1 = $peixes[0]["tamanho"];
        $peixe_2 = $peixes[1]["tamanho"];
        $peixe_3 = $peixes[2]["tamanho"];
        $peixe_4 = $peixes[3]["tamanho"];
        $peixe_5 = $peixes[4]["tamanho"];

        $menor_peixe_1 = $peixes[0]["menor_peixe"];
        $menor_peixe_2 = $peixes[1]["menor_peixe"];
        $menor_peixe_3 = $peixes[2]["menor_peixe"];
        $menor_peixe_4 = $peixes[3]["menor_peixe"];
        $menor_peixe_5 = $peixes[4]["menor_peixe"];
        
        $customPaper =(array(0,0,204,1300));
        $pdf = pdf::loadView("pdfmedicao", 
            compact(
                'equipe', 
                'nomeequipe', 
                'etapa',
                'peixe_1',
                'peixe_2',
                'peixe_3',
                'peixe_4',
                'peixe_5',
                'menor_peixe_1',
                'menor_peixe_2',
                'menor_peixe_3',
                'menor_peixe_4',
                'menor_peixe_5',
                'penalidade_1', 
                'penalidade_2', 
                'penalidade_3', 
                'penalidade_4', 
                'penalidade_5', 
                'penalidade_chegada', 
                'total'));

        return $pdf->setPaper($customPaper)
                    ->setOption('dpi', 72)
                    ->setOption('isRemoteEnabled', true)
                    ->stream("medicao_equipe".$equipe."_etapa_".$etapa.".pdf");
    }
}
