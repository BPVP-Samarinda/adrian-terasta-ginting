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
        // Schema::create('komsumen', function($table){
        //     $table->id();
        //     $table->string('nama')->nullable();
        //     $table->string('jkelamin')->nullable();
        //     $table->string('telp')->nullable();
        //     $table->string('email')->nullable();
        //     $table->text('alamat')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('konsumen');
        
    }
};
