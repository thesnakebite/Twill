<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTables extends Migration
{
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('pagina_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'pagina');
            $table->string('title', 1000)->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->text('meta_description', 200)->nullable();
        });

        Schema::create('pagina_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'pagina');
        });

        Schema::create('pagina_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'pagina');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagina_revisions');
        Schema::dropIfExists('pagina_translations');
        Schema::dropIfExists('pagina_slugs');
        Schema::dropIfExists('paginas');
    }
}
