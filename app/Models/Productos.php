<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }

    public $timestamps = false;
}
