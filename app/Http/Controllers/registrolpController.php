<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\registrolp;
use Illuminate\Http\Request;
use App\ojurisdiccional;
use App\sede;
use App\texpediente;
use App\ojudicial;
use App\ecausa;
use App\asistentejudicial;
use App\eaudiencium;
use App\taudiencium;
use App\raudiencium;


class registrolpController extends Controller
{
    /**
    
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $registrolp = registrolp::with(['sede'])::where('ojurisdic', 'LIKE', "%$keyword%")
                               ->orWhere('sede', 'LIKE', "%$keyword%")
                ->orWhere('nroexpe', 'LIKE', "%$keyword%")
                ->orWhere('texpe', 'LIKE', "%$keyword%")
                ->orWhere('ojudicial', 'LIKE', "%$keyword%")
                ->orWhere('ejcausa', 'LIKE', "%$keyword%")
                ->orWhere('fechareq', 'LIKE', "%$keyword%")
                ->orWhere('fechateq', 'LIKE', "%$keyword%")
                ->orWhere('ajudicial', 'LIKE', "%$keyword%")
                ->orWhere('fechagc', 'LIKE', "%$keyword%")
                ->orWhere('fechaaudi', 'LIKE', "%$keyword%")
                ->orWhere('ejaudiencia', 'LIKE', "%$keyword%")
                ->orWhere('taudiencia', 'LIKE', "%$keyword%")
                ->orWhere('raudiencia', 'LIKE', "%$keyword%")
                ->orWhere('reproaudien', 'LIKE', "%$keyword%")
                ->latest()
                ->paginate($perPage);
        } else {
            $registrolp = registrolp::with(['sede'])->latest()->paginate($perPage);
        }

       

        return view('vendor/adminlte.registrolp.index', compact('registrolp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        

       $ojurisdiccionals= ojurisdiccional::all()?: null;
       $sedes= sede::all()?: null;
        $texpedientes= texpediente::all()?: null;
        $ojudicials = ojudicial::all()?: null;
        $ejcausas = ecausa::all()?: null;
        $ajudicials =asistentejudicial::all()?: null;
        $ejaudiencias= eaudiencium::all()?: null;
        $taudiencias= taudiencium::all()?: null;
        $raudiencias= raudiencium::all()?: null;






        return view('vendor/adminlte.registrolp.create')->with(compact('ojurisdiccionals','sedes','texpedientes','ojudicials','ejcausas','ajudicials','ejaudiencias','taudiencias','raudiencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $registro = new registrolp();
        $registro->fechain= $request->input('fechain');
        $registro->ojurisdic = $request->input('ojurisdiccional');
         $registro->sede= $request->input('sede');
         $registro->nroexpe= $request->input('nroexpe');
         $registro->ojudicial= ($request->input('ojudicial') === '0') ? null : $request->input('ojudicial');
         $registro->ejcausa= $request->input('ejcausa');
         $registro->ajudicial= $request->input('ajudicial');
         $registro->ejaudiencia= $request->input('ejaudiencia');
         $registro->taudiencia= $request->input('taudiencia');
         $registro->raudiencia= $request->input('raudiencia');
         $registro->texpe= ($request->input('texpe') === '0') ? null : $request->input('texpe');

         $registro->fechareq= $request->input('fechareq');
         $registro->fechateq= $request->input('fechateq');
         $registro->fechagc= $request->input('fechagc');
         $registro->fechacd= $request->input('fechacd');
          $registro->fechareaudiencia= $request->input('fechareaudiencia');
         $registro->fechaaudi= $request->input('fechaaudi');
         $registro->reproaudien= $request->input('reproaudien');
          $registro->fechadevol= $request->input('fechadevol');
          
         $registro->save();

      
      

        return redirect('registrolp')->with('flash_message', 'registrolp added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $registrolp = registrolp::findOrFail($id);
        
        return view('vendor/adminlte.registrolp.show', compact('registrolp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {


        $registrolp = registrolp::findOrFail($id);        
        $ojurisdiccionals= $registrolp->ojurisdic;
        $sedes= $registrolp->sede;
        $texpedientes= $registrolp->texpe;
        $ojudicials = $registrolp->ojudicial;
        $ejcausas = $registrolp->ejcausa;
        $ajudicials =$registrolp->ajudicial;
        $ejaudiencias= $registrolp->ejaudiencia;
        $taudiencias= $registrolp->taudiencia;
        $raudiencias= $registrolp->raudiencia;

        //LISTAS
        $lista_sedes= sede::all()?: null;

        return view('vendor/adminlte.registrolp.edit')->with(compact('registrolp', 'ojurisdiccionals','sedes','texpedientes','ojudicials','ejcausas','ajudicials','ejaudiencias','taudiencias','raudiencias','lista_sedes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $registrolp = registrolp::findOrFail($id);
        $registrolp->update($requestData);

        return redirect('registrolp')->with('flash_message', 'registrolp updated!');
    }


    public function calctimer($value='')
    {
        # code...
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        registrolp::destroy($id);

        return redirect('registrolp')->with('flash_message', 'registrolp deleted!');
    }
}
