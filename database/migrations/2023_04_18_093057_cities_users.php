<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cities_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('city_id')->unsigned();
            $table->unsignedBiginteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')
                 ->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')
                ->on('cities')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities_users');
    }
};
