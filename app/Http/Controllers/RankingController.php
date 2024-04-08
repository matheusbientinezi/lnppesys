<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
	public function index(): View
	{
		$etapa1 = [];
		$etapa2 = [];
		$etapa3 = [];
		$etapa4 = [];
		$etapa5 = [];

		$connection = DB::connection('mysql');
		$lista = " select  ";
		$lista .= " id, ";
        $lista .= " '' as posicao, ";
		$lista .= " numero_equipe , ";
		$lista .= " nome_equipe , ";
		$lista .= " etapa , ";
		$lista .= " CAST(peixe_1 + 0 AS DECIMAL(12,2)) as peixe_1 , ";
		$lista .= " CAST(peixe_2 + 0 AS DECIMAL(12,2)) as peixe_2 , ";
		$lista .= " CAST(peixe_3 + 0 AS DECIMAL(12,2)) as peixe_3 , ";
		$lista .= " CAST(peixe_4 + 0 AS DECIMAL(12,2)) as peixe_4 , ";
		$lista .= " CAST(peixe_5 + 0 AS DECIMAL(12,2)) as peixe_5 , ";
		$lista .= " CAST(penalidade_1 + 0 AS DECIMAL(12,2)) as penalidade_1 , ";
		$lista .= " CAST(penalidade_2 + 0 AS DECIMAL(12,2)) as penalidade_2 , ";
		$lista .= " CAST(penalidade_3 + 0 AS DECIMAL(12,2)) as penalidade_3 , ";
		$lista .= " CAST(penalidade_4 + 0 AS DECIMAL(12,2)) as penalidade_4 , ";
		$lista .= " CAST(penalidade_5 + 0 AS DECIMAL(12,2)) as penalidade_5 , ";
		$lista .= " CAST(penalidade_chegada + 0 AS DECIMAL(12,2)) as penalidade_chegada , ";
		$lista .= " CAST(total + 0 AS DECIMAL(12,2)) as total , ";
        $lista .= " CAST(total_desempate + 0 AS DECIMAL(12,2)) as total_desempate , ";
		$lista .= " data  ";
		$lista .= " from medicao m  ";
        $lista .= " where  ";
        $lista .= " total is not null ";
        $lista .= " Order by total DESC, peixe_5 DESC ";

		$result = $connection->select($lista);

		foreach ($result as $key => $row) {
			if ($row->etapa == '1') {
				array_push(
					$etapa1,
					[
						"id" => $row->id,
                        "posicao" => $key+1,
						"numero_equipe" => $row->numero_equipe,
						"nome_equipe"   => $row->nome_equipe,
						"etapa"         => $row->etapa,
						"peixe_1" => $row->peixe_1,
						"peixe_2" => $row->peixe_2,
						"peixe_3" => $row->peixe_3,
						"peixe_4" => $row->peixe_4,
						"peixe_5" => $row->peixe_5,
						"penalidade_1" => $row->penalidade_1,
						"penalidade_2" => $row->penalidade_2,
						"penalidade_3" => $row->penalidade_3,
						"penalidade_4" => $row->penalidade_4,
						"penalidade_5" => $row->penalidade_5,
						"penalidade_chegada" => $row->penalidade_chegada,
						"total" => $row->total,
                        "total_desempate" => $row->total_desempate,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '2') {
				array_push(
					$etapa2, 
					[
						"id" => $row->id,
                        "posicao" => $key+1,
						"numero_equipe" => $row->numero_equipe,
						"nome_equipe"   => $row->nome_equipe,
						"etapa"         => $row->etapa,
						"peixe_1" => $row->peixe_1,
						"peixe_2" => $row->peixe_2,
						"peixe_3" => $row->peixe_3,
						"peixe_4" => $row->peixe_4,
						"peixe_5" => $row->peixe_5,
						"penalidade_1" => $row->penalidade_1,
						"penalidade_2" => $row->penalidade_2,
						"penalidade_3" => $row->penalidade_3,
						"penalidade_4" => $row->penalidade_4,
						"penalidade_5" => $row->penalidade_5,
						"penalidade_chegada" => $row->penalidade_chegada,
						"total" => $row->total,
                        "total_desempate" => $row->total_desempate,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '3') {
				array_push(
					$etapa3, 
					[
						"id" => $row->id,
                        "posicao" => $key+1,
						"numero_equipe" => $row->numero_equipe,
						"nome_equipe"   => $row->nome_equipe,
						"etapa"         => $row->etapa,
						"peixe_1" => $row->peixe_1,
						"peixe_2" => $row->peixe_2,
						"peixe_3" => $row->peixe_3,
						"peixe_4" => $row->peixe_4,
						"peixe_5" => $row->peixe_5,
						"penalidade_1" => $row->penalidade_1,
						"penalidade_2" => $row->penalidade_2,
						"penalidade_3" => $row->penalidade_3,
						"penalidade_4" => $row->penalidade_4,
						"penalidade_5" => $row->penalidade_5,
						"penalidade_chegada" => $row->penalidade_chegada,
						"total" => $row->total,
                        "total_desempate" => $row->total_desempate,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '4') {
				array_push(
					$etapa4, 
					[
						"id" => $row->id,
                        "posicao" => $key+1,
						"numero_equipe" => $row->numero_equipe,
						"nome_equipe"   => $row->nome_equipe,
						"etapa"         => $row->etapa,
						"peixe_1" => $row->peixe_1,
						"peixe_2" => $row->peixe_2,
						"peixe_3" => $row->peixe_3,
						"peixe_4" => $row->peixe_4,
						"peixe_5" => $row->peixe_5,
						"penalidade_1" => $row->penalidade_1,
						"penalidade_2" => $row->penalidade_2,
						"penalidade_3" => $row->penalidade_3,
						"penalidade_4" => $row->penalidade_4,
						"penalidade_5" => $row->penalidade_5,
						"penalidade_chegada" => $row->penalidade_chegada,
						"total" => $row->total,
                        "total_desempate" => $row->total_desempate,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '5') {
				array_push(
					$etapa5, 
					[
						"id" => $row->id,
                        "posicao" => $key+1,
						"numero_equipe" => $row->numero_equipe,
						"nome_equipe"   => $row->nome_equipe,
						"etapa"         => $row->etapa,
						"peixe_1" => $row->peixe_1,
						"peixe_2" => $row->peixe_2,
						"peixe_3" => $row->peixe_3,
						"peixe_4" => $row->peixe_4,
						"peixe_5" => $row->peixe_5,
						"penalidade_1" => $row->penalidade_1,
						"penalidade_2" => $row->penalidade_2,
						"penalidade_3" => $row->penalidade_3,
						"penalidade_4" => $row->penalidade_4,
						"penalidade_5" => $row->penalidade_5,
						"penalidade_chegada" => $row->penalidade_chegada,
						"total" => $row->total,
                        "total_desempate" => $row->total_desempate,
						"data" => $row->data
					]
				);
			}
		};

		return view('ranking', [
			'etapa1' => $etapa1,
			'etapa2' => $etapa2,
			'etapa3' => $etapa3,
			'etapa4' => $etapa4,
			'etapa5' => $etapa5,
		]);
	}
}
