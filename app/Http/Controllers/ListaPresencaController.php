<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ListaPresencaController extends Controller
{
    public function index(): View
    {
        $etapa1 = [];
        $etapa2 = [];
        $etapa3 = [];
        $etapa4 = [];
        $etapa5 = [];
        $presenca = '';

        $connection = DB::connection('mysql2');

        $lista = "  SELECT ";
        $lista .= " wp.ID,  ";
        $lista .= " wp2.meta_value , ";
        $lista .= " wwoi.order_item_name,  ";
        $lista .= " (select wp3.meta_value from wpno_postmeta wp3 where wp3.post_id = wp.ID and wp3.meta_key IN ('numero_equipe') ) as numero_equipe, ";
        $lista .= " '' as presenca ";
        $lista .= " from wpno_posts wp  ";
        $lista .= " inner join wpno_postmeta wp2  on wp2.post_id  = wp.ID  ";
        $lista .= " inner join wpno_woocommerce_order_items wwoi  on wwoi.order_id  = wp.ID  ";
        $lista .= " where wp.post_date > '2024-01-01 00:00:00' ";
        $lista .= " AND wp2.meta_key  in ('nome_equipe') ";
       
        $result = $connection->select($lista);

        $medicao = "  SELECT * from medicao ";
        $resultMedicao = DB::select($medicao);

        foreach ($result as $row) {            
            if($row->order_item_name == "Etapa - 1"){
                foreach($resultMedicao as $key => $value) {
                    if($row->numero_equipe == $value->numero_equipe
                        && $value->etapa == '1'
                    ) {
                        $row->presenca = 'checked';
                    }
                }

                array_push($etapa1, ["numero_equipe"=>$row->numero_equipe ,"equipe" => $row->meta_value, "presenca" => $row->presenca]);
            }
            if($row->order_item_name == "Etapa - 2"){
                foreach($resultMedicao as $key => $value) {
                    if($row->numero_equipe == $value->numero_equipe
                        && $value->etapa == '2'
                    ) {
                        $row->presenca = 'checked';
                    }
                }

                array_push($etapa2, ["numero_equipe"=>$row->numero_equipe ,"equipe" => $row->meta_value, "presenca" => $row->presenca ]);
            }
            if($row->order_item_name == "Etapa - 3"){
                foreach($resultMedicao as $key => $value) {
                    if($row->numero_equipe == $value->numero_equipe
                        && $value->etapa == '3'
                    ) {
                        $row->presenca = 'checked';
                    }
                }

                array_push($etapa3, ["numero_equipe"=>$row->numero_equipe ,"equipe" => $row->meta_value, "presenca" => $row->presenca ]);
            }
            if($row->order_item_name == "Etapa - 4"){
                foreach($resultMedicao as $key => $value) {
                    if($row->numero_equipe == $value->numero_equipe
                        && $value->etapa == '4'
                    ) {
                        $row->presenca = 'checked';
                    }
                }

                array_push($etapa4, ["numero_equipe"=>$row->numero_equipe ,"equipe" => $row->meta_value, "presenca" => $row->presenca ]);
            }
            if($row->order_item_name == "Etapa - 5"){
                foreach($resultMedicao as $key => $value) {
                    if($row->numero_equipe == $value->numero_equipe
                        && $value->etapa == '5'
                    ) {
                        $row->presenca = 'checked';
                    }
                }
                array_push($etapa5, ["numero_equipe"=>$row->numero_equipe ,"equipe" => $row->meta_value, "presenca" => $row->presenca ]);
            }

        };

        return view('presenca', [
            'etapa1' => $etapa1,
            'etapa2' => $etapa2,
            'etapa3' => $etapa3,
            'etapa4' => $etapa4,
            'etapa5' => $etapa5,
        ]);
    }


    public function postPresenca(){

    }
}


