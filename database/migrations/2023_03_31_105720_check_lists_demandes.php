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
        Schema::create('check_lists_demandes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('demande_id')->unsigned();
            $table->unsignedBiginteger('check_list_id')->unsigned();

            $table->foreign('demande_id')->references('id')
                 ->on('demandes')->onDelete('cascade');
            $table->foreign('check_list_id')->references('id')
                ->on('check_lists')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_lists_demandes');
    }
};
