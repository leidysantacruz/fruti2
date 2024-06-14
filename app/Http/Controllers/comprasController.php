<?php

namespace App\Http\Controllers;

use App\Models\carrito_compra;
use App\Models\compra;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class comprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compra=compra::all();
        return view('compras.index' , compact('compra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $users = User::all(); 
        $carritos = carrito_compra::all(); 
        return view('compras.create', compact('users', 'carritos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compras = new compra();
        $compras->qr = $request->qr;
        $compras->cantida = $request->cantida;
        $compras->user_id=$request->user_id;
        $compras->carrito_compra_id=$request->carrito_compra_id;
        $compras->save();
        return Redirect()->route('compras.index',$compras);
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
    public function edit(compra $compra)
    {
        
        $users = User::all(); 
        $carrito_compras = carrito_compra::all(); 
        return view('compras.edit', compact('compra', 'users','carrito_compras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compra $compra)
    {
        $compra->user_id=$request->user_id;
        $compra->carrito_compra_id=$request->carrito_compra_id;
        $compra->qr = $request->qr;
        $compra->cantida = $request->cantida;
        $compra->save();
        return redirect()->route('compras.index')->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compra = compra::find($id)->delete();

        return redirect()->route('compras.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
