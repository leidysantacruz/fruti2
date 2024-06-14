<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    public function carritoCompra()
    {
        return $this->belongsTo('App\Models\carrito_compra');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
}
