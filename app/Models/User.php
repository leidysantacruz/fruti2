<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'edad',
        'telefono',
        'email',
        'password',
        'profile_picture',
        'rol_id',
        'abastecimiento_id'
    ];

    // Nombre de la tabla si es diferente al convencional
    protected $table = 'users';

    // Relaciones con otros modelos
    public function mensajes()
    {
        return $this->hasMany(Mensaje::class);
    }

    public function pqrs()
    {
        return $this->hasMany(Pqr::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function carritoCompras()
    {
        return $this->hasMany(Carrito_Compra::class);
    }

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    public function abastecimiento()
    {
        return $this->belongsTo(Abastecimiento::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
