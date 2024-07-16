<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class RankingPublicController extends Controller
{
	public function index(): View
	{
		$etapa1 = [];
		$etapa2 = [];
		$etapa3 = [];
		$etapa4 = [];
		$etapa5 = [];

		$count_etapa_1 = 0;
		$count_etapa_2 = 0;
		$count_etapa_3 = 0;
		$count_etapa_4 = 0;
		$count_etapa_5 = 0;

		$etapa1_maior_peixe = [];
		$etapa2_maior_peixe = [];
		$etapa3_maior_peixe = [];
		$etapa4_maior_peixe = [];
		$etapa5_maior_peixe = [];

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
		
		$lista .= " CAST(peixe_6 + 0 AS DECIMAL(12,2)) as desempate_1 , ";
		$lista .= " CAST(peixe_7 + 0 AS DECIMAL(12,2)) as desempate_2 , ";
		$lista .= " CAST(peixe_8 + 0 AS DECIMAL(12,2)) as desempate_3 , ";
		$lista .= " CAST(peixe_9 + 0 AS DECIMAL(12,2)) as desempate_4 , ";

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
        $lista .= " Order by total DESC, desempate_1 DESC, desempate_2 DESC, desempate_3 DESC, desempate_4 DESC  ";

		$result = $connection->select($lista);

		foreach ($result as $key => $row) {
			if ($row->etapa == '1') {
				$dataParaValidar = '03/02/2024';
				$dataAtual = new DateTime();
				$dataValidacao = DateTime::createFromFormat('d/m/Y', $dataParaValidar);
				if($dataValidacao < $dataAtual){
					$count_etapa_1++;
					array_push(
						$etapa1,
						[
							"id" => $row->id,
							"posicao" => $count_etapa_1,
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
			}
			if ($row->etapa == '2') {
				$dataParaValidar = '20/04/2024';
				$dataAtual = new DateTime();
				$dataValidacao = DateTime::createFromFormat('d/m/Y', $dataParaValidar);
				if($dataValidacao < $dataAtual){
					$count_etapa_2++;
					array_push(
						$etapa2, 
						[
							"id" => $row->id,
							"posicao" => $count_etapa_2,
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
			}
			if ($row->etapa == '3') {
				$dataParaValidar = '08/06/2024';
				$dataAtual = new DateTime();
				$dataValidacao = DateTime::createFromFormat('d/m/Y', $dataParaValidar);
				if($dataValidacao < $dataAtual){
					$count_etapa_3++;
					array_push(
						$etapa3, 
						[
							"id" => $row->id,
							"posicao" => $count_etapa_3,
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
			}
			if ($row->etapa == '4') {
				$dataParaValidar = '24/08/2024';
				$dataAtual = new DateTime();
				$dataValidacao = DateTime::createFromFormat('d/m/Y', $dataParaValidar);
				if($dataValidacao < $dataAtual){
					$count_etapa_4++;
					array_push(
						$etapa4, 
						[
							"id" => $row->id,
							"posicao" => $count_etapa_4,
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
			}
			if ($row->etapa == '5') {
				$dataParaValidar = '19/10/2024';
				$dataAtual = new DateTime();
				$dataValidacao = DateTime::createFromFormat('d/m/Y', $dataParaValidar);
				if($dataValidacao < $dataAtual){
					$count_etapa_5++;
					array_push(
						$etapa5, 
						[
							"id" => $row->id,
							"posicao" => $count_etapa_5,
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
			}
		};

		//etapa 1
		$connection = DB::connection('mysql');
		$maior  = " select  ";
		$maior .= " GREATEST (m.peixe_1, m.peixe_2, m.peixe_3, m.peixe_4, m.peixe_5) as maior_peixe,   m.numero_equipe, m.nome_equipe   ";
		$maior .= " from medicao m where m.etapa = '1'  order by maior_peixe DESC limit 1 ";

		$etapa1_maior_peixe = $connection->select($maior);

		//etapa 2
		$connection = DB::connection('mysql');
		$maior  = " select  ";
		$maior .= " GREATEST (m.peixe_1, m.peixe_2, m.peixe_3, m.peixe_4, m.peixe_5) as maior_peixe,   m.numero_equipe, m.nome_equipe   ";
		$maior .= " from medicao m where m.etapa = '2'  order by maior_peixe DESC limit 1 ";

		$etapa2_maior_peixe = $connection->select($maior);

		//etapa 3
		$connection = DB::connection('mysql');
		$maior  = " select  ";
		$maior .= " GREATEST (m.peixe_1, m.peixe_2, m.peixe_3, m.peixe_4, m.peixe_5) as maior_peixe,   m.numero_equipe, m.nome_equipe   ";
		$maior .= " from medicao m where m.etapa = '3'  order by maior_peixe DESC limit 1 ";

		$etapa3_maior_peixe = $connection->select($maior);

		//etapa 4
		$connection = DB::connection('mysql');
		$maior  = " select  ";
		$maior .= " GREATEST (m.peixe_1, m.peixe_2, m.peixe_3, m.peixe_4, m.peixe_5) as maior_peixe,   m.numero_equipe, m.nome_equipe   ";
		$maior .= " from medicao m where m.etapa = '4'  order by maior_peixe DESC limit 1 ";

		$etapa4_maior_peixe = $connection->select($maior);

		//etapa 5
		$connection = DB::connection('mysql');
		$maior  = " select  ";
		$maior .= " GREATEST (m.peixe_1, m.peixe_2, m.peixe_3, m.peixe_4, m.peixe_5) as maior_peixe,   m.numero_equipe, m.nome_equipe   ";
		$maior .= " from medicao m where m.etapa = '5'  order by maior_peixe DESC limit 1 ";

		$etapa5_maior_peixe = $connection->select($maior);


		//dd($etapa1_maior_peixe);

		return view('ranking', [
			'etapa1' => $etapa1,
			'etapa2' => $etapa2,
			'etapa3' => $etapa3,
			'etapa4' => $etapa4,
			'etapa5' => $etapa5,
			'etapa1_maior_peixe' => $etapa1_maior_peixe,
			'etapa2_maior_peixe' => $etapa2_maior_peixe,
			'etapa3_maior_peixe' => $etapa3_maior_peixe,
			'etapa4_maior_peixe' => $etapa4_maior_peixe,
			'etapa5_maior_peixe' => $etapa5_maior_peixe,
		]);
	}
}
