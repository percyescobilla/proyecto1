<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\raudiencium;
use Illuminate\Http\Request;

class raudienciaController extends Controller
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
            $raudiencia = raudiencium::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $raudiencia = raudiencium::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.raudiencia.index', compact('raudiencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.raudiencia.create');
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
        
        raudiencium::create($requestData);

        return redirect('raudiencia')->with('flash_message', 'raudiencium added!');
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
        $raudiencium = raudiencium::findOrFail($id);

        return view('vendor/adminlte.raudiencia.show', compact('raudiencium'));
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
        $raudiencium = raudiencium::findOrFail($id);

        return view('vendor/adminlte.raudiencia.edit', compact('raudiencium'));
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
        
        $raudiencium = raudiencium::findOrFail($id);
        $raudiencium->update($requestData);

        return redirect('raudiencia')->with('flash_message', 'raudiencium updated!');
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
        raudiencium::destroy($id);

        return redirect('raudiencia')->with('flash_message', 'raudiencium deleted!');
    }
}
