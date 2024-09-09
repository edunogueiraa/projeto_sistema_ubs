<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'tb_paciente'; 
    protected $primaryKey = 'pac_id'; 
    public $timestamps = false; 

    protected $fillable = [
        'pac_id', 'pac_nome', 'pac_nascimento', 'pac_telefone',
        'pac_endereco', 'pac_sexo', 'pac_cpf'
    ];

}
