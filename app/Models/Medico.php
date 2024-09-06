<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'tb_medico';
    protected $primaryKey = 'med_cm';
    public $timestamps = false;

    protected $fillable = [
        'med_cm', 'med_nome', 'med_nascimento', 'med_email',
        'med_endereco', 'med_status', 'med_formacao', 'med_contratacao'
    ];
}
