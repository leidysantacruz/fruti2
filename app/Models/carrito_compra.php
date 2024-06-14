<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito_compra extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function producto()
    {
        return $this->belongsTo('App\Models\producto');
    }

    public function compras()
    {
        return $this->hasMany('App\Models\compra');
    }
}
