<?php

namespace App\Models;

use CodeIgniter\Model;

class TareaModel extends Model
{
    protected $table = 'tareas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'descripcion', 'fecha_vencimiento', 'estado', 'usuario_id'];
}
