<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;

    protected $table = 'consultas';
    protected $primaryKey = 'id_consulta';
    protected $fillable = ['id_cliente', 'asunto', 'mensaje', 'fecha'];

    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class,'id_cliente','id_cliente');
    }
}
