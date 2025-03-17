<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'nombre_usuario',
        'email',
        'articulo_id',
    ];

    public function articulos()

    {
        return $this->belongsTo(Articulo::class);
    }
}
