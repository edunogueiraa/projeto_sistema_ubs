<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
 
    public function up(): void{
        Schema::create('tb_paciente', function (Blueprint $table) {
            $table->id('pac_id'); 
            $table->string('pac_nome', 100); 
            $table->date('pac_nascimento'); 
            $table->string('pac_telefone', 15); 
            $table->string('pac_endereco', 255); 
            $table->string('pac_sexo', 10); 
            $table->string('pac_cpf', 14)->unique(); 
            $table->timestamps(); 
        });
    }


    public function down(): void{
        Schema::dropIfExists('tb_paciente');
    }
};
