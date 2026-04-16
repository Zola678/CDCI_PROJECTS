<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('request_services', function (Blueprint $table) {
            $table->id();

            // RELAÇÃO COM USERS
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            // RELAÇÃO COM SERVICES
            $table->foreignId('service_id')
                ->constrained()
                ->cascadeOnDelete();

            // (OPCIONAL MAS RECOMENDADO)
            $table->string('status')->default('pendente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_services');
    }
};