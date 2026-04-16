<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('image')->nullable();
            $table->string('token')->nullable();
            $table->boolean('is_admin')->default(false);

            // soft deletes
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            // REMOVER COLUNAS (IMPORTANTE PARA ROLLBACK)
            $table->dropColumn([
                'image',
                'token',
                'is_admin'
            ]);

            // remover soft deletes
            $table->dropSoftDeletes();
        });
    }
};