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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
    
        //adicionar o relacionamento com a tabela produtos

        Schema::table('produtos_label', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
            

        });

        Schema::table('produtp_detalhes', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
            

        });
    }
        //adicionar o relacionamento com a tablke de produtos_detalhes
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('produtp_detalhes', function (Blueprint $table){

            $table->dropForeign('produtp_detalhes_unidade_id_foreign');

            $table->dropColumn('unidade_id');
        
            

        });

    
        Schema::dropIfExists('unidades');
    }
};
