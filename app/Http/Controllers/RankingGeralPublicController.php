<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class RankingGeralPublicController extends Controller
{
	public function index(): View
	{
		$equipes = [];

		$count = 0;

		$connection = DB::connection('mysql');
		// $query  ="select DISTINCT m.numero_equipe , m.nome_equipe , '' as posicao, ";
		// $query .="( select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') as etapa_1,";
		// $query .="( select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') as etapa_2,";
		// $query .="( select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') as etapa_3,";
		// $query .="( select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') as etapa_4,";
		// $query .="( select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') as etapa_5,";
		// $query .="( ";
		// $query .="	( select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') +";
		// $query .="	( select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') +";
		// $query .="	( select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') +	";
		// $query .="	( select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') + ";
		// $query .="	( select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5')";
		// $query .=") as total,";
		// $query .="GREATEST( ";
		// $query .="	";
		// $query .="	( select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1'), ";
		// $query .="	( select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2'), ";
		// $query .="	( select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3'),	";
		// $query .="	( select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4'), ";
		// $query .="	( select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') ";
		// $query .="	";
		// $query .=") as maior_nota ";
		// $query .=" from medicao m ";
		// $query .=" ORDER BY total DESC, maior_nota DESC, etapa_1 DESC, etapa_2 DESC, etapa_3 DESC, etapa_4 DESC, etapa_5 DESC";

		$query = " select DISTINCT m.numero_equipe , m.nome_equipe , '' as posicao, ";
		$query .= " ";
		$query .= " if( (select COUNT(*) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') = 0 , 0, (select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') ) as etapa_1,";
		$query .= " if( (select COUNT(*) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') = 0 , 0, (select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') ) as etapa_2,";
		$query .= " if( (select COUNT(*) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') = 0 , 0, (select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') ) as etapa_3,";
		$query .= " if( (select COUNT(*) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') = 0 , 0, (select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') ) as etapa_4,";
		$query .= " if( (select COUNT(*) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') = 0 , 0, (select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') ) as etapa_5,";
		$query .= " ";
		$query .= " ( ";
		$query .= " 	if( (select COUNT(*) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') = 0 , 0, ( select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') ) +";
		$query .= " 	if( (select COUNT(*) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') = 0 , 0, ( select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') ) +";
		$query .= " 	if( (select COUNT(*) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') = 0 , 0, ( select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') ) +";
		$query .= " 	if( (select COUNT(*) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') = 0 , 0, ( select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') ) +";
		$query .= " 	if( (select COUNT(*) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') = 0 , 0, ( select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') )";
		$query .= " ";
		$query .= " ) as total,";
		$query .= " ";
		$query .= " GREATEST( ";
		$query .= " 	";
		$query .= " 	if( (select COUNT(*) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') = 0 , 0, ( select CAST(m1.total AS DECIMAL(10,2)) from medicao m1 where m1.numero_equipe = m.numero_equipe and m1.etapa = '1') ) ,";
		$query .= " 	if( (select COUNT(*) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') = 0 , 0, ( select CAST(m2.total AS DECIMAL(10,2)) from medicao m2 where m2.numero_equipe = m.numero_equipe and m2.etapa = '2') ) ,";
		$query .= " 	if( (select COUNT(*) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') = 0 , 0, ( select CAST(m3.total AS DECIMAL(10,2)) from medicao m3 where m3.numero_equipe = m.numero_equipe and m3.etapa = '3') ) ,";
		$query .= " 	if( (select COUNT(*) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') = 0 , 0, ( select CAST(m4.total AS DECIMAL(10,2)) from medicao m4 where m4.numero_equipe = m.numero_equipe and m4.etapa = '4') ) ,";
		$query .= " 	if( (select COUNT(*) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') = 0 , 0, ( select CAST(m5.total AS DECIMAL(10,2)) from medicao m5 where m5.numero_equipe = m.numero_equipe and m5.etapa = '5') ) ";
		$query .= " 	";
		$query .= " ) as maior_nota ";
		$query .= " from medicao m ";
		$query .= " ORDER BY total DESC, maior_nota DESC, etapa_1 DESC, etapa_2 DESC, etapa_3 DESC, etapa_4 DESC, etapa_5 DESC";
		
		$listEquipe = $connection->select($query);

		foreach ($listEquipe as $key => $row) {
			$count++;
			array_push(
				$equipes,
				[
					//"id" => $row->id,
					"posicao" => $count,
					"numero_equipe" => $row->numero_equipe,
					"nome_equipe"   => $row->nome_equipe,
					"etapa_1" => $row->etapa_1,
					"etapa_2" => $row->etapa_2,
					"etapa_3" => $row->etapa_3,
					"etapa_4" => $row->etapa_4,
					"etapa_5" => $row->etapa_5,
					"total" => $row->total,
				]
			);
		}

		//dd($etapa1_maior_peixe);

		return view('rankinggeralpublic', [
			'equipes' => $equipes,
		]);
	}
}
