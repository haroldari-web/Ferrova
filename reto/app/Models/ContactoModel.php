<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;

    protected $table = 'consultas';
    protected $primaryKey = 'id_consulta';
    protected $fillable = ['nombre', 'correo', 'telefono', 'asunto', 'mensaje', 'fecha'];
    protected $casts = ['fecha' => 'datetime',];
}
