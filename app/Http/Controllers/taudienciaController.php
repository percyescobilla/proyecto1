<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\taudiencium;
use Illuminate\Http\Request;

class taudienciaController extends Controller
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
            $taudiencia = taudiencium::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $taudiencia = taudiencium::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.taudiencia.index', compact('taudiencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.taudiencia.create');
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
        
        $requestData = $request->all();
        
        taudiencium::create($requestData);

        return redirect('taudiencia')->with('flash_message', 'taudiencium added!');
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
        $taudiencium = taudiencium::findOrFail($id);

        return view('vendor/adminlte.taudiencia.show', compact('taudiencium'));
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
        $taudiencium = taudiencium::findOrFail($id);

        return view('vendor/adminlte.taudiencia.edit', compact('taudiencium'));
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
        
        $taudiencium = taudiencium::findOrFail($id);
        $taudiencium->update($requestData);

        return redirect('taudiencia')->with('flash_message', 'taudiencium updated!');
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
        taudiencium::destroy($id);

        return redirect('taudiencia')->with('flash_message', 'taudiencium deleted!');
    }
}
