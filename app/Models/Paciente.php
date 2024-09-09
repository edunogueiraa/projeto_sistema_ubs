<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'tb_paciente'; // Nome da tabela no banco de dados
    protected $primaryKey = 'pac_id'; // Nome da chave primária
    public $timestamps = false; // Se você não está usando timestamps

    protected $fillable = [
        'pac_id', 'pac_nome', 'pac_nascimento', 'pac_telefone',
        'pac_endereco', 'pac_sexo', 'pac_cpf'
    ];

    // Caso você deseje usar timestamps, remova a linha 'public $timestamps = false;'
    // public $timestamps = true;
}
