<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\registrolp;
use App\ojurisdiccional;
use App\sede;
use App\texpediente;
use App\ojudicial;
use App\ecausa;
use App\asistentejudicial;
use App\eaudiencium;
use App\taudiencium;
use App\raudiencium;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }



    public function registros_mes($anio,$mes)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $registrolps=registrolp::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($registro);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;     
        }

        foreach($registrolps as $registrol){
        $diasel=intval(date("d",strtotime($registrolps->created_at) ) );
        $registros[$diasel]++;    
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return   json_encode($data);
    }


    public function total_audiencias(){
        $tiposaudiencia=taudiencium::all();
        $ctp=count($tiposaudiencia);
        $audiencias=registrolp::all();
        $ct =count($audiencias);
        
        for($i=0;$i<=$ctp-1;$i++){
         $idTP=$tiposaudiencia[$i]->id;
         $numeroaudiencia[$idTP]=0;
        }

        for($i=0;$i<=$ct-1;$i++){
         $idTP=$audiencias[$i]->taudiencia;
         $numeroaudiencia[$idTP]++;
           
        }

        $data=array("totaltipos"=>$ctp,"tipos"=>$tiposaudiencia, "numeroaudiencia"=>$numeroaudiencia);
        return json_encode($data);
    }


    public function index()
    {
        $anio=date("Y");
        $mes=date("m");
        return view("vendor/adminlte.listados.listado_graficas")
               ->with("anio",$anio)
               ->with("mes",$mes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
