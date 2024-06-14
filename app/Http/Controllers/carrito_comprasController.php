<?php

namespace App\Http\Controllers;

use App\Models\carrito_compra;
use App\Models\producto;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class carrito_comprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $carrito_compra=carrito_compra::all();
        return view('cars.index' , compact('carrito_compra'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $productos = producto::all();
        return view('cars.create', compact('users', 'productos'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new carrito_compra();
        $cars->cantida_productos = $request->cantida_productos;
        $cars->user_id=$request->user_id;
        $cars->producto_id=$request->producto_id;
        $cars->save();
        return Redirect()->route('cars.index',$cars);
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
    public function edit( carrito_compra $car)
    {
        $users = User::all(); 
        $productos = producto::all(); 
        return view('cars.edit', compact('car', 'users','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,carrito_compra $car)
    {
        $car->cantida_productos = $request->cantida_productos;
        $car->user_id=$request->user_id;
        $car->producto_id=$request->producto_id;
        $car->save();
        return redirect()->route('cars.index')->with('success', 'Registro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = carrito_compra::find($id)->delete();

        return redirect()->route('cars.index')->with('success', 'Usuario eliminado exitosamente');
    } 
    }

