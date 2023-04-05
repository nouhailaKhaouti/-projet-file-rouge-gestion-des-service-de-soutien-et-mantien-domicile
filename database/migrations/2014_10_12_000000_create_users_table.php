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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Prenom');
            $table->string('Description');
            $table->string('icon');
            $table->string('phone');
            $table->string('adresse');
            $table->string('postal_code');
            $table->string('city');
            $table->string('country');
            $table->string('age');
            $table->integer('access')->default(0);
            $table->integer('warning')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
