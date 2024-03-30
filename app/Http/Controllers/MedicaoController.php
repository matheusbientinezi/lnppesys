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
		$lista .= " peixe_1 , ";
		$lista .= " peixe_2 , ";
		$lista .= " peixe_3 , ";
		$lista .= " peixe_4 , ";
		$lista .= " peixe_5 , ";
		$lista .= " penalidade_1 , ";
		$lista .= " penalidade_2 , ";
		$lista .= " total , ";
		$lista .= " data  ";
		$lista .= " from medicao m  ";

		$result = $connection->select($lista);

		foreach ($result as $row) {
			if ($row->etapa == '1') {
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
						"total" => $row->total,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '2') {
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
						"total" => $row->total,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '3') {
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
						"total" => $row->total,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '4') {
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
						"total" => $row->total,
						"data" => $row->data
					]
				);
			}
			if ($row->etapa == '5') {
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
				if($equipesPresenca[$i][0] == 'on' && $equipesPresenca[$i][0] != '' ){
					$numero_equipe = $equipesPresenca[$i][1];
					$nome_equipe = $equipesPresenca[$i][2];

					$insert =  " INSERT INTO medicao ";
					$insert .= " (id, numero_equipe, nome_equipe, etapa, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ";
					$insert .= " VALUES(0, '".$numero_equipe."', '".$nome_equipe."', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NOW(), '', NOW(), null, null); " ;
					
					DB::insert($insert);
				}
			};
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa2(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				if($equipesPresenca[$i][0] == 'on' && $equipesPresenca[$i][0] != '' ){
					$numero_equipe = $equipesPresenca[$i][1];
					$nome_equipe = $equipesPresenca[$i][2];

					$insert =  " INSERT INTO medicao ";
					$insert .= " (id, numero_equipe, nome_equipe, etapa, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ";
					$insert .= " VALUES(0, '".$numero_equipe."', '".$nome_equipe."', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NOW(), '', NOW(), null, null); " ;
					
					DB::insert($insert);
				}
			};
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa3(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				if($equipesPresenca[$i][0] == 'on' && $equipesPresenca[$i][0] != '' ){
					$numero_equipe = $equipesPresenca[$i][1];
					$nome_equipe = $equipesPresenca[$i][2];

					$insert =  " INSERT INTO medicao ";
					$insert .= " (id, numero_equipe, nome_equipe, etapa, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ";
					$insert .= " VALUES(0, '".$numero_equipe."', '".$nome_equipe."', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NOW(), '', NOW(), null, null); " ;
					
					DB::insert($insert);
				}
			};
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa4(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				if($equipesPresenca[$i][0] == 'on' && $equipesPresenca[$i][0] != '' ){
					$numero_equipe = $equipesPresenca[$i][1];
					$nome_equipe = $equipesPresenca[$i][2];

					$insert =  " INSERT INTO medicao ";
					$insert .= " (id, numero_equipe, nome_equipe, etapa, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ";
					$insert .= " VALUES(0, '".$numero_equipe."', '".$nome_equipe."', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NOW(), '', NOW(), null, null); " ;
					
					DB::insert($insert);
				}
			};
		}

		return redirect()
		->back()
		->with('status', 'Lista de Presença Atualizada!');
	}

	public function insertEtapa5(Request $request){
		$equipesPresenca = $request->all();
		for ($i = 0; $i < count($equipesPresenca)-1; $i++) {
			if(count($equipesPresenca[$i]) > 2){
				if($equipesPresenca[$i][0] == 'on' && $equipesPresenca[$i][0] != '' ){
					$numero_equipe = $equipesPresenca[$i][1];
					$nome_equipe = $equipesPresenca[$i][2];

					$insert =  " INSERT INTO medicao ";
					$insert .= " (id, numero_equipe, nome_equipe, etapa, peixe_1, peixe_2, peixe_3, peixe_4, peixe_5, peixe_6, peixe_7, peixe_8, peixe_9, penalidade_1, penalidade_2, penalidade_3, penalidade_4, penalidade_5, total_peixes, total_penalidades, total, total_desempate, `data`, usuario, created_at, updated_at, deleted_at) ";
					$insert .= " VALUES(0, '".$numero_equipe."', '".$nome_equipe."', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NOW(), '', NOW(), null, null); " ;
					
					DB::insert($insert);
				}
			};
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
		$penalidade_1 = floatval($request->penalidade_1);
		$total = floatval($request->total);

		$total_peixes = $peixe_1 + $peixe_2 + $peixe_3 + $peixe_4;
		$total_penalidades = $penalidade_1;
		$total_desempate = $total_peixes + $peixe_5;

		$usuario = Auth::user();
		
		$update =  " UPDATE medicao SET ";
		$update .= " peixe_1 = ".$peixe_1.", ";
		$update .= " peixe_2 = ".$peixe_2.", ";
		$update .= " peixe_3 = ".$peixe_3.", ";
		$update .= " peixe_4 = ".$peixe_4.", ";
		$update .= " peixe_5 = ".$peixe_5.", ";
		$update .= " penalidade_1 = ".$penalidade_1.", ";
		$update .= " total_peixes = ".$total_peixes.", ";
		$update .= " total_penalidades = ".$total_penalidades.", ";
		$update .= " total_desempate = ".$total_desempate.", ";
		$update .= " total = ".$total.", ";
		$update .= " `data` = NOW(), ";
		$update .= " usuario = ".$usuario->id.", ";
		$update .= " updated_at = NOW() ";

		$update .= "  WHERE id = ".$id." ";
		
		DB::update($update);

		return  'Dados de medição gravados com sucesso!';

	}
}