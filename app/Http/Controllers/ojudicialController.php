<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ojudicial;
use Illuminate\Http\Request;

class ojudicialController extends Controller
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
            $ojudicial = ojudicial::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ojudicial = ojudicial::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.ojudicial.index', compact('ojudicial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.ojudicial.create');
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
        
        ojudicial::create($requestData);

        return redirect('ojudicial')->with('flash_message', 'ojudicial added!');
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
        $ojudicial = ojudicial::findOrFail($id);

        return view('vendor/adminlte.ojudicial.show', compact('ojudicial'));
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
        $ojudicial = ojudicial::findOrFail($id);

        return view('vendor/adminlte.ojudicial.edit', compact('ojudicial'));
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
        
        $ojudicial = ojudicial::findOrFail($id);
        $ojudicial->update($requestData);

        return redirect('ojudicial')->with('flash_message', 'ojudicial updated!');
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
        ojudicial::destroy($id);

        return redirect('ojudicial')->with('flash_message', 'ojudicial deleted!');
    }
}
