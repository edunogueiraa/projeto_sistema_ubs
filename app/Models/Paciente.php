<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false; 

    protected $fillable = [
        'id', 'nome', 'nascimento', 'telefone',
        'endereco', 'sexo', 'cpf'
    ];

}
