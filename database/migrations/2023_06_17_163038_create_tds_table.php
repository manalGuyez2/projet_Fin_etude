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
        Schema::create('tds', function (Blueprint $table) {
            $table->id();
            $table->string('nomTd');
            $table->string('tdpdf');
         
            $table->bigInteger('IdModul')->unsigned();
            $table->foreign('IdModul')->references('id')->on('modules');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tds');
    }
};
