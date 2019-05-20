<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\eaudiencium;
use Illuminate\Http\Request;

class eaudienciaController extends Controller
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
            $eaudiencia = eaudiencium::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('numero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $eaudiencia = eaudiencium::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.eaudiencia.index', compact('eaudiencia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.eaudiencia.create');
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
        
        eaudiencium::create($requestData);

        return redirect('eaudiencia')->with('flash_message', 'eaudiencium added!');
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
        $eaudiencium = eaudiencium::findOrFail($id);

        return view('vendor/adminlte.eaudiencia.show', compact('eaudiencium'));
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
        $eaudiencium = eaudiencium::findOrFail($id);

        return view('vendor/adminlte.eaudiencia.edit', compact('eaudiencium'));
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
        
        $eaudiencium = eaudiencium::findOrFail($id);
        $eaudiencium->update($requestData);

        return redirect('eaudiencia')->with('flash_message', 'eaudiencium updated!');
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
        eaudiencium::destroy($id);

        return redirect('eaudiencia')->with('flash_message', 'eaudiencium deleted!');
    }
}
