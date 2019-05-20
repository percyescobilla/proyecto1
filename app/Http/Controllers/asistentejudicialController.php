<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\asistentejudicial;
use Illuminate\Http\Request;

class asistentejudicialController extends Controller
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
            $asistentejudicial = asistentejudicial::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('numero', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $asistentejudicial = asistentejudicial::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.asistentejudicial.index', compact('asistentejudicial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.asistentejudicial.create');
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
        
        asistentejudicial::create($requestData);

        return redirect('asistentejudicial')->with('flash_message', 'asistentejudicial added!');
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
        $asistentejudicial = asistentejudicial::findOrFail($id);

        return view('vendor/adminlte.asistentejudicial.show', compact('asistentejudicial'));
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
        $asistentejudicial = asistentejudicial::findOrFail($id);

        return view('vendor/adminlte.asistentejudicial.edit', compact('asistentejudicial'));
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
        
        $asistentejudicial = asistentejudicial::findOrFail($id);
        $asistentejudicial->update($requestData);

        return redirect('asistentejudicial')->with('flash_message', 'asistentejudicial updated!');
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
        asistentejudicial::destroy($id);

        return redirect('asistentejudicial')->with('flash_message', 'asistentejudicial deleted!');
    }
}
