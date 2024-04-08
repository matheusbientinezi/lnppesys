<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class MedicaoController extends Controller
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
		$lista .= " numero_equipe , ";
		$lista .= " nome_equipe , ";
		$lista .= " etapa , ";
		$lista .= " presenca , ";
		$lista .= " peixe_1 , ";
		$lista .= " peixe_2 , ";
		$lista .= " peixe_3 , ";
		$lista .= " peixe_4 , ";
		$lista .= " peixe_5 , ";
		$lista .= " penalidade_1 , ";
		$lista .= " penalidade_2 , ";
		$lista .= " penalidade_3 , ";
		$lista .= " penalidade_4 , ";
		$lista .= " penalidade_5 , ";
		$lista .= " penalidade_chegada , ";
		$lista .= " total , ";
		$lista .= " data  ";
		$lista .= " from medicao m  ";

		$result = $connection->select($lista);

		foreach ($result as $row) {
			if ($row->etapa == '1' && $row->presenca == "S") {
				array_push(
					$etapa1,
					[
						"id" => $row->id,
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
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '2' && $row->presenca == "S") {
				array_push(
					$etapa2, 
					[
						"id" => $row->id,
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
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '3' && $row->presenca == "S") {
				array_push(
					$etapa3, 
					[
						"id" => $row->id,
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
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '4' && $row->presenca == "S") {
				array_push(
					$etapa4, 
					[
						"id" => $row->id,
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
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '5' && $row->presenca == "S") {
				array_push(
					$etapa5, 
					[
						"id" => $row->id,
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
						"data" => $row->data
					]
				);
			}
		};

		return view('medicao', [
			'etapa1' => $etapa1,
			'etapa2' => $etapa2,
			'etapa3' => $etapa3,
			'etapa4' => $etapa4,
			'etapa5' => $etapa5,
		]);
	}


	public function insertEtapa1(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				$numero_equipe = $equipesPresenca[$i][1];
				$nome_equipe = $equipesPresenca[$i][2];
				$presenca = "S";
			}else{
				$numero_equipe = $equipesPresenca[$i][0];
				$nome_equipe = $equipesPresenca[$i][1];
				$presenca = "N";
			}

			if($equipesPresenca[$i][0] != '' ){
				$insert = ' INSERT INTO medicao ';
				$insert .= ' (id, numero_equipe, nome_equipe, etapa, presenca, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, penalidade_chegada, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ';
				$insert .= ' VALUES(0, "'.$numero_equipe.'", "'.$nome_equipe.'", "1", "'.$presenca.'", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", NOW(), "", NOW(), null, null) ';
				$insert .= ' ON DUPLICATE KEY UPDATE ';
				$insert .= ' presenca = "'.$presenca.'", updated_at = NOW(); ';
				DB::insert($insert);
			}
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa2(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				$numero_equipe = $equipesPresenca[$i][1];
				$nome_equipe = $equipesPresenca[$i][2];
				$presenca = "S";
			}else{
				$numero_equipe = $equipesPresenca[$i][0];
				$nome_equipe = $equipesPresenca[$i][1];
				$presenca = "N";
			}

			if($equipesPresenca[$i][0] != '' ){
				$insert = ' INSERT INTO medicao ';
				$insert .= ' (id, numero_equipe, nome_equipe, etapa, presenca, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, penalidade_chegada, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ';
				$insert .= ' VALUES(0, "'.$numero_equipe.'", "'.$nome_equipe.'", "2", "'.$presenca.'", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", NOW(), "", NOW(), null, null) ';
				$insert .= ' ON DUPLICATE KEY UPDATE ';
				$insert .= ' presenca = "'.$presenca.'", updated_at = NOW(); ';
				DB::insert($insert);
			}
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa3(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				$numero_equipe = $equipesPresenca[$i][1];
				$nome_equipe = $equipesPresenca[$i][2];
				$presenca = "S";
			}else{
				$numero_equipe = $equipesPresenca[$i][0];
				$nome_equipe = $equipesPresenca[$i][1];
				$presenca = "N";
			}

			if($equipesPresenca[$i][0] != '' ){
				$insert = ' INSERT INTO medicao ';
				$insert .= ' (id, numero_equipe, nome_equipe, etapa, presenca, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, penalidade_chegada, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ';
				$insert .= ' VALUES(0, "'.$numero_equipe.'", "'.$nome_equipe.'", "3", "'.$presenca.'", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", NOW(), "", NOW(), null, null) ';
				$insert .= ' ON DUPLICATE KEY UPDATE ';
				$insert .= ' presenca = "'.$presenca.'", updated_at = NOW(); ';
				DB::insert($insert);
			}
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa4(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				$numero_equipe = $equipesPresenca[$i][1];
				$nome_equipe = $equipesPresenca[$i][2];
				$presenca = "S";
			}else{
				$numero_equipe = $equipesPresenca[$i][0];
				$nome_equipe = $equipesPresenca[$i][1];
				$presenca = "N";
			}

			if($equipesPresenca[$i][0] != '' ){
				$insert = ' INSERT INTO medicao ';
				$insert .= ' (id, numero_equipe, nome_equipe, etapa, presenca, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, penalidade_chegada, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ';
				$insert .= ' VALUES(0, "'.$numero_equipe.'", "'.$nome_equipe.'", "4", "'.$presenca.'", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", NOW(), "", NOW(), null, null) ';
				$insert .= ' ON DUPLICATE KEY UPDATE ';
				$insert .= ' presenca = "'.$presenca.'", updated_at = NOW(); ';
				DB::insert($insert);
			}
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa5(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				$numero_equipe = $equipesPresenca[$i][1];
				$nome_equipe = $equipesPresenca[$i][2];
				$presenca = "S";
			}else{
				$numero_equipe = $equipesPresenca[$i][0];
				$nome_equipe = $equipesPresenca[$i][1];
				$presenca = "N";
			}

			if($equipesPresenca[$i][0] != '' ){
				$insert = ' INSERT INTO medicao ';
				$insert .= ' (id, numero_equipe, nome_equipe, etapa, presenca, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, penalidade_chegada, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ';
				$insert .= ' VALUES(0, "'.$numero_equipe.'", "'.$nome_equipe.'", "5", "'.$presenca.'", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", NOW(), "", NOW(), null, null) ';
				$insert .= ' ON DUPLICATE KEY UPDATE ';
				$insert .= ' presenca = "'.$presenca.'", updated_at = NOW(); ';
				DB::insert($insert);
			}
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}



	public function insertMedicaoEtapa1(Request $request){
		$id = $request->id;
		$peixe_1 = floatval($request->peixe_1);
		$peixe_2 = floatval($request->peixe_2);
		$peixe_3 = floatval($request->peixe_3);
		$peixe_4 = floatval($request->peixe_4);
		$peixe_5 = floatval($request->peixe_5);
		$penalidade_1= floatval($request->penalidade_1);
		$penalidade_2= floatval($request->penalidade_2);
		$penalidade_3= floatval($request->penalidade_3);
		$penalidade_4= floatval($request->penalidade_4);
		$penalidade_5= floatval($request->penalidade_5);
		$penalidade_chegada= floatval($request->penalidade_chegada);
		$total = floatval($request->total);

		$peixes = [
			[
				'peixe' => 1,
				'tamanho' => $peixe_1,
				'classificacao' => ($peixe_1 - $penalidade_1),
				'penalidade' => $penalidade_1
			],
			[
				'peixe' => 2,
				'tamanho' => $peixe_2,
				'classificacao' => ($peixe_2 - $penalidade_2),
				'penalidade' => $penalidade_2
			],
			[
				'peixe' => 3,
				'tamanho' => $peixe_3,
				'classificacao' => ($peixe_3 - $penalidade_3),
				'penalidade' => $penalidade_3
			],
			[
				'peixe' => 4,
				'tamanho' => $peixe_4,
				'classificacao' => ($peixe_4 - $penalidade_4),
				'penalidade' => $penalidade_4
			],
			[
				'peixe' => 5,
				'tamanho' => $peixe_5,
				'classificacao' => ($peixe_5 - $penalidade_5),
				'penalidade' => $penalidade_5
			],
		];

		// Inicializa arrays para extração e ordenação
		$classificacao = [];

		// Extrai os classificacao dos peixes para um array separado
		foreach ($peixes as $key => $peixe) {
			$classificacao[$key] = $peixe['classificacao'];
		}

		// Ordena os peixes com base nos classificacao
		array_multisort($classificacao, SORT_ASC, $peixes);

		$total_peixes = $peixes[1]['tamanho'] + $peixes[2]['tamanho'] + $peixes[3]['tamanho'] + $peixes[4]['tamanho'];
		$total_penalidades = $penalidade_1 + $penalidade_2 + $penalidade_3 + $penalidade_4 + $penalidade_5 + $penalidade_chegada;
		$total_desempate = $total_peixes + $peixes[0]['tamanho'];

		$usuario = Auth::user();
		
		$update =  " UPDATE medicao SET ";
		$update .= " peixe_1 = ".$peixe_1.", ";
		$update .= " peixe_2 = ".$peixe_2.", ";
		$update .= " peixe_3 = ".$peixe_3.", ";
		$update .= " peixe_4 = ".$peixe_4.", ";
		$update .= " peixe_5 = ".$peixe_5.", ";
		$update .= " penalidade_1 = ".$penalidade_1.", ";
		$update .= " penalidade_2 = ".$penalidade_2.", ";
		$update .= " penalidade_3 = ".$penalidade_3.", ";
		$update .= " penalidade_4 = ".$penalidade_4.", ";
		$update .= " penalidade_5 = ".$penalidade_5.", ";
		$update .= " total_peixes = ".$total_peixes.", ";
		$update .= " total_penalidades = ".$total_penalidades.", ";
		$update .= " total_desempate = ".$total_desempate.", ";
		$update .= " penalidade_chegada = ".$penalidade_chegada.", ";
		$update .= " total = ".$total.", ";
		$update .= " `data` = NOW(), ";
		$update .= " usuario = ".$usuario->id.", ";
		$update .= " updated_at = NOW() ";

		$update .= "  WHERE id = ".$id." ";
		
		DB::update($update);

		return  'Dados de medição gravados com sucesso!';

	}
	
}
