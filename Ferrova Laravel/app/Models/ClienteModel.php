<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function consultas()
    {
        return $this->hasMany(ContactoModel::class, 'id_cliente', 'id_cliente');
    }
}
