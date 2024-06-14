<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Foundation\Auth\User;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= producto::all();

     return view('productos.index',compact('productos'));
    
    }

    public function catalogo()
    {
        $productos = producto::all();
       
        foreach($productos as $producto){
             if($producto->imagen){
            $producto->imagen = asset('storage/productos/' . $producto->imagen);
            }
         } 
          //  return $productos;
     return view('index',compact('productos'));
     
    
    }
    
    public function inorganico()
    {
        $productos = producto::all();
       
        foreach($productos as $producto){
             if($producto->imagen){
            $producto->imagen = asset('storage/productos/' . $producto->imagen);
            }
         } 
          //  return $productos;
     return view('inorganico',compact('productos'));
     
    
    }

 

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
  return view('productos.create' , compact('users'));

     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos= new producto();
        $productos->nombres=$request->nombres;
        $productos->tiempo_reclamo=$request->tiempo_reclamo;
        $productos->imagen=$request->imagen;
        $productos->precio=$request->precio;
        $productos->descripcion=$request->descripcion;
        $productos->user_id=$request->user_id;

          // Subir y almacenar la imagen
        if ($request->hasFile('imagen')) {
            $imageName = time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $imagenPath = $request->file('imagen')->storeAs('productos', $imageName, 'public');
            $productos->imagen = $imageName;
           //$product->image = $imagenPath;

        }


        $productos->save();

         return Redirect()->route('productos.index',$productos); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //para detalle del producto
    public function show($id)
    {
        $producto = producto::find($id);
    
        if (!$producto) {
            abort(404); // Mostrar una página de error 404 si el producto no se encuentra
        }
    
        return view('productos.detalle', compact('producto' ));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        $users = User::all(); 
        return view('productos.edit', compact('producto', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
         // Actualizar los campos
        $producto->nombres = $request->nombres;
        $producto->tiempo_reclamo = $request->tiempo_reclamo;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->user_id = $request->user_id;
    
        // Verificar si se proporcionó una nueva imagen
        if ($request->hasFile('nueva_imagen')) {
            $imageName = time() . '.' . $request->file('nueva_imagen')->getClientOriginalExtension();
            $imagenPath = $request->file('nueva_imagen')->storeAs('productos', $imageName, 'public');
            $producto->imagen = $imageName; 
        }
    
        $producto->save();
    
        return redirect()->route('productos.index')->with('success', 'Registro actualizado correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::find($id)->delete();

        return redirect()->route('productos.index')->with('success', 'Usuario eliminado exitosamente');
    }

}


