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
    public function up()
    {
        Schema::create('user_xes', function (Blueprint $table) {
            $table->increments("id_mdc");
            $table->string("mdc_one")->nullable(); 
            $table->timestamps();
        });

        Schema::create('user_3amek', function (Blueprint $table) {
            $table->id();
            $table->string("mdc_two")->nullable(); 
            $table->timestamps();
            $table->unsignedInteger("id_mdc")->nullable(); 
            $table->foreign('id_mdc')
              ->references("id_mdc")
              ->on('user_xes')

            ->onDelete('cascade'); 
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_xes');
    }
};
