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
        Schema::create('paslon_putras', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('count_vote')->default(0);
            $table->string('path');
            $table->float('persentase');
            $table->string('asal_daerah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon_putras');
    }
};
