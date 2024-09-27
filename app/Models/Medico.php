<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    protected $primaryKey = 'cm';
    public $timestamps = false;

    protected $fillable = [
        'cm', 'nome', 'nascimento', 'email',
        'endereco', 'status', 'formacao', 'contratacao'
    ];
}
