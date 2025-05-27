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
        Schema::create('imc', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('peso');
            $table->double('altura');
            $table->string('url')->nullable();
            
          //CRIANDO A COLUNA DA FK
            $table->bigInteger('idFaixa')->unsigned();
                      //CRIANDO A COLUNA DA FK
            $table->bigInteger('idUsers')->unsigned();

            //DEFININDO A FK
            $table->foreign('idFaixa')
                  ->references('idFaixa')
                  ->on('faixas')
                  ->onDelete('cascade');                
            //DEFININDO A FK
            $table->foreign('idUsers')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                  
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
           Schema::dropIfExists('imc');
    }
};
