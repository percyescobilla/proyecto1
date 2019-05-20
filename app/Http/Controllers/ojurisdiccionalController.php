<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ojurisdiccional;
use Illuminate\Http\Request;

class ojurisdiccionalController extends Controller
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
            $ojurisdiccional = ojurisdiccional::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ojurisdiccional = ojurisdiccional::latest()->paginate($perPage);
        }

        return view('vendor/adminlte.ojurisdiccional.index', compact('ojurisdiccional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vendor/adminlte.ojurisdiccional.create');
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
        
        ojurisdiccional::create($requestData);

        return redirect('ojurisdiccional')->with('flash_message', 'ojurisdiccional added!');
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
        $ojurisdiccional = ojurisdiccional::findOrFail($id);

        return view('vendor/adminlte.ojurisdiccional.show', compact('ojurisdiccional'));
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
        $ojurisdiccional = ojurisdiccional::findOrFail($id);

        return view('vendor/adminlte.ojurisdiccional.edit', compact('ojurisdiccional'));
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
        
        $ojurisdiccional = ojurisdiccional::findOrFail($id);
        $ojurisdiccional->update($requestData);

        return redirect('ojurisdiccional')->with('flash_message', 'ojurisdiccional updated!');
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
        ojurisdiccional::destroy($id);

        return redirect('ojurisdiccional')->with('flash_message', 'ojurisdiccional deleted!');
    }
}
