<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Rol;
use App\Models\Abastecimiento;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $abastecimientos = Abastecimiento::all();
        return view('users.create', compact('roles', 'abastecimientos'));
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->edad = $request->edad;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Encripta la contraseña

        // Asignar una foto predeterminada
        $user->profile_picture = 'img/default_profile_picture.png';

        // Procesar y guardar la foto de perfil si se proporciona una
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        // Redirigir a la lista de usuarios después de crear uno nuevo
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Rol::all();
        $abastecimientos = Abastecimiento::all();
        return view('users.edit', compact('user', 'roles', 'abastecimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        $user->nombres = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->edad = $request->edad;
        $user->telefono = $request->telefono;
        $user->email = $request->email;

        // Actualizar la contraseña solo si se proporciona una nueva
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        // Actualizar la foto de perfil si se proporciona una nueva
        if ($request->hasFile('profile_picture')) {
            // Eliminar la foto de perfil anterior si no es la predeterminada
            if ($user->profile_picture && $user->profile_picture !== 'img/default_profile_picture.png') {
                Storage::disk('public')->delete($user->profile_picture);
            }
            // Guardar la nueva foto de perfil
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        } elseif ($request->has('remove_profile_picture') && $request->remove_profile_picture == 1) {
            // Si se proporciona un campo remove_profile_picture y es igual a 1, elimina la foto de perfil
            if ($user->profile_picture && $user->profile_picture !== 'img/default_profile_picture.png') {
                Storage::disk('public')->delete($user->profile_picture);
                $user->profile_picture = null;
            }
        }

        $user->save();

        return redirect()->route('users.edit', ['user' => $user->id])->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Eliminar la foto de perfil si no es la predeterminada
        if ($user->profile_picture && $user->profile_picture !== 'img/default_profile_picture.png') {
            Storage::disk('public')->delete($user->profile_picture);
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
