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
        Schema::create('relation', function (Blueprint $table) {
            $table->string('user_id')->unique();
            $table->string('role_id');
            $table->timestamps();
        });
        $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation');
    }
};
