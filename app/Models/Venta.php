<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = "ventas";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'producto_id',
        'cantidad'
    ];

    protected $casts = [
        'created_at'  => 'datetime:Y-m-d H:00',
        'updated_at'  => 'datetime:Y-m-d H:00',
    ];

    /**
     * Función con el modelo de producto
     * @return relation
     */
    public function producto()
    {
        return $this->hasOne(Producto::class, 'id', 'producto_id');    }
    }
