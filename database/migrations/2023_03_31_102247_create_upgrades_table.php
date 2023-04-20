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
        Schema::create('upgrades', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('cin_file');
            $table->string('certificat');
            $table->string('service');
            $table->string('status')->default('InProgress');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
            ->references('id')->on('services')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upgrades');
    }
};
