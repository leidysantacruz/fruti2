<?php

namespace App\Http\Controllers;

use App\Models\abastecimiento;

use Illuminate\Http\Request;

class AbastecimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abastecimientos = abastecimiento::all();
        return view('abastecimientos.index' , compact('abastecimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abastecimientos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abastecimientos = new abastecimiento();
        $abastecimientos->nombre = $request->nombre;
        $abastecimientos->ubicacion = $request->ubicacion;
        $abastecimientos->horario_atencion = $request->horario_atencion ;
        $abastecimientos->save();
        return Redirect()->route('abastecimientos.index',$abastecimientos);
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
    public function edit(abastecimiento $abastecimiento)
    {
        return view('abastecimientos.edit', compact('abastecimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, abastecimiento $abastecimiento)
    {
        $abastecimiento->nombre = $request->nombre;
        $abastecimiento->ubicacion = $request->ubicacion;
        $abastecimiento->horario_atencion = $request->horario_atencion ;
        $abastecimiento->save();
        return redirect()->route('abastecimientos.index')->with('success', 'Registro actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abastecimiento = abastecimiento::find($id)->delete();

        return redirect()->route('abastecimientos.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
