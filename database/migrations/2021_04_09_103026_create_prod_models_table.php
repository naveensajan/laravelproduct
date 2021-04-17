<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_models', function (Blueprint $table) {
            $table->id();
            $table->string("pc");
            $table->string("pn");
            $table->string("pd");
            $table->string("pi");
            $table->string("pm");
            $table->string("pe");
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod_models');
    }
}
