<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use DB;

class ReportController extends Controller
{
    //
   public function showreport(){
        $member_scores = Participant::all()->toArray();
        $dataPoints =  array(
            [ 'y'=> 21, 'label'=>"21%",  'indexLabel'=>"Video" ],
            [ 'y'=> 25, 'label'=> "25%", 'indexLabel'=> "Dining" ],
            [ 'y'=> 33, 'label'=> "33%", 'indexLabel'=> "Entertainment" ],
            [ 'y'=> 36, 'label'=> "36%", 'indexLabel'=> "News" ],
            [ 'y'=> 42, 'label'=> "42%", 'indexLabel'=> "Music" ],
            [ 'y'=> 49, 'label'=> "49%", 'indexLabel'=> "Social Networking" ],
            [ 'y'=> 50, 'label'=> "50%", 'indexLabel'=> "Maps/ Search" ],
            [ 'y'=> 55, 'label'=> "55%", 'indexLabel'=> "Weather" ],
            [ 'y'=> 61, 'label'=> "61%", 'indexLabel'=> "Games" ]
        );
        // dd($member_scores);
        $i = 0;
        $dataPoint = [];
        foreach ($member_scores as $key) {
            $dataPoint[$i] = [ 'y'=> $key['current_score'], 'label'=>$key['current_score'],  'indexLabel'=>$key['username'] ];
            
            // print_r($key);

            // $d = $key['username'];
            // array_push([ 'y'=> $d, 'label'=>"21%",  'indexLabel'=>$d ]);
            $i++;
        }
        // dd($dataPoint, $i);

        $result =DB::select(DB::raw("SELECT count(product_id) as No_sales, products.name FROM sales LEFT JOIN products ON products.id = sales.product_id GROUP BY sales.product_id;"));
        $data=" ";
        foreach($result as $val){
          $data.="['".$val->name."',  ".$val->No_sales."],";    
        }
        $chartdata=$data;
        // dd($result);
        // dd($data);
        return \view('admin.report',['dataPoint' => $dataPoint],compact('chartdata'));
    }
}

