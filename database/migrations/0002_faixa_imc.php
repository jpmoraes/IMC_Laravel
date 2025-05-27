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
         Schema::create('faixas', function (Blueprint $table) {
            $table->id('idFaixa');               
            $table->string('categoria');    
       
            $table->primary("idFaixa");
        });
    }

     public function down(): void
    {
        Schema::dropIfExists('faixas');  
    }
};
