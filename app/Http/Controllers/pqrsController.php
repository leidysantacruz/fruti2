<?php

namespace App\Http\Controllers;

use App\Models\pqr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;


class pqrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pqrs=pqr::all();
        return view('pqrs.index', compact('pqrs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all(); // Obtén la lista de usuarios registrados
    
        return view('pqrs.create', compact('usuarios'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pqrs = new pqr();
        $pqrs->user_id=$request->user_id;
        $pqrs->motivo = $request->motivo;
        $pqrs->tipo=$request->tipo;
        $pqrs->save();

            // Guarda un mensaje de éxito en la sesión
          session()->flash('success', 'La PQRS se ha enviado correctamente.');

        return Redirect()->route('pqrs.create',$pqrs);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pqr = pqr::find($id); // Encuentra el PQRS por su ID
        $usuarios = User::all(); // Obtén la lista de usuarios registrados
    
        return view('pqrs.edit', compact('pqr', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pqrs = pqr::find($id);
        if (!$pqrs) {
            return redirect()->route('pqrs.index')->with('error', 'El PQRS no existe.');
        }
    
        $pqrs->user_id = $request->user_id;
        $pqrs->motivo = $request->motivo;
        $pqrs->tipo = $request->tipo;
        $pqrs->save();
    
        return redirect()->route('pqrs.index')->with('success', 'Registro actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pqrs = pqr::find($id)->delete();

        return redirect()->route('pqrs.index')->with('success', 'Usuario eliminado exitosamente');
    }
}
