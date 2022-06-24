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



        
        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id_categorie");
            $table->string('nom_categorie')->nullable();
            $table->string('photo_categorie')->nullable();
            $table->timestamps();
            
        });
        
        
        Schema::create('places', function (Blueprint $table) {
            $table->increments("id_place")->nullable();
            $table->string('nom_place')->nullable();
            $table->string('photo_place')->nullable();
            $table->string('video_place')->nullable();
            $table->string('description_place')->nullable();
            $table->unsignedInteger("id_categorie")->nullable(); //Unique key
            $table->timestamps();
            $table->foreign('id_categorie')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');
            
        });

      
        Schema::create('galeries', function (Blueprint $table) {
            $table->increments("id_galerie");
            $table->string("photos")->nullable(); //Unique key
            $table->string("videos")->nullable(); //Unique key
            $table->unsignedInteger("id_place")->nullable(); //Unique key
            $table->foreign('id_place')
            ->references('id_place')
            ->on('places')
            ->onDelete('cascade');
        
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
        Schema::dropIfExists('categories');
    }
};
