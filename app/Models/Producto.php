<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'referencia',
        'precio',
        'peso',
        'categoria',
        'stock',
    ];

     protected $casts = [
        'created_at'  => 'datetime:Y-m-d H:00',
        'updated_at'  => 'datetime:Y-m-d H:00',
    ];
}
