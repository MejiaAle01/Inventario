<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    use HasFactory;

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }

    public $timestamps = false;
}
