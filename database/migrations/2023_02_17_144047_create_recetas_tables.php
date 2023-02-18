<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTables extends Migration
{
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('owner', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            
            $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('receta_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'receta');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('receta_slugs');
        Schema::dropIfExists('recetas');
    }
}
