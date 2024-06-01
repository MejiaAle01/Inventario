<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;


    public function transacciones()
    {
        return $this->hasMany(Transacciones::class, 'id');
    }

    public function productos()
    {
        return $this->hasMany(Productos::class, 'id');
    }
    public $timestamps = false;
}
