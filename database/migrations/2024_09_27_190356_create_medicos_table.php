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
        Schema::create('medicos', function (Blueprint $table) {
            $table->integer('cm')->primary();
            $table->string('nome', 100);
            $table->date('nascimento');
            $table->string('email', 100);
            $table->string('endereco', 100);
            $table->string('status', 100);
            $table->string('formacao', 100);
            $table->date('contratacao');
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
