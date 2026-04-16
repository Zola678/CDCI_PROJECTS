<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // nome do serviço (ex: Design, Marketing, Vídeo)
            $table->string('name');

            // descrição detalhada do serviço
            $table->text('description');

            // (OPCIONAL MAS RECOMENDADO)
            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};