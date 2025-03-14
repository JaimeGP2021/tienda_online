<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linea extends Model
{
    /** @use HasFactory<\Database\Factories\LineaFactory> */
    use HasFactory;
    use SoftDeletes;

    public function ticket()
    {
        return $this->belongsTo(Producto::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
