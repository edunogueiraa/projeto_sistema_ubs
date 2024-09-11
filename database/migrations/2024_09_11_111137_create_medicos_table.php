<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_medico', function (Blueprint $table) {
            $table->integer('med_cm')->primary();
            $table->string('med_nome', 100);
            $table->date('med_nascimento');
            $table->string('med_email', 100);
            $table->string('med_endereco', 100);
            $table->string('med_status', 100);
            $table->string('med_formacao', 100);
            $table->date('med_contratacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
