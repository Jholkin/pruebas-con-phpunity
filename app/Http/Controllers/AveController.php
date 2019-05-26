<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ave;
use Session;

class AveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aves = Ave::orderBy('id','DESC')->paginate(5);
        return view('Ave.index', compact('aves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Ave.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ave' => 'required',
            'cantidad' => 'required',
            'lugar_referencia' => 'required',
            'responsable' => 'required'
        ]);

        Ave::create($request->all());

        Session::flash('message', 'Avistamiento registrado con éxito');

        return redirect()->route('ave.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ave $ave)
    {
        //
        return view('ave.show', compact('ave'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ave $ave)
    {
        //
        return view('Ave.edit', compact('ave'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ave $ave)
    {
        //
        $request->validate([
            'ave' => 'required',
            'cantidad' => 'required',
            'lugar_referencia' => 'required',
            'responsable' => 'required'
        ]);

        $ave->update($request->all());
        Session::flash('message', 'Avistamiento actualizado con éxito');

        return redirect()->route('ave.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ave $ave)
    {
        //
        $ave->delete();
        Session::flash('message', 'Avistamiento eliminado con éxito');

        return redirect()->route('ave.index');
    }
}
