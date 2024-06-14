<?php

namespace App\Http\Controllers;

use App\Models\pago;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class pagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pago=pago::all();
        return view('pagos.index' , compact('pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pagos.create' ,compact('users'));   //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pagos = new pago();
        $pagos->facturas = $request->facturas;
        $pagos->user_id=$request->user_id;
        $pagos->save();
        return Redirect()->route('pagos.index',$pagos);
   
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
    public function edit(pago $pago)
    {
        $users = User::all(); 
        return view('pagos.edit', compact('pago', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pago $pago)
    {
        $pago->facturas = $request->facturas;
        $pago->user_id=$request->user_id;
        $pago->save();
        return redirect()->route('pagos.index')->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagos = pago::find($id)->delete();

        return redirect()->route('pagos.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
