<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTitleGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_title_genre', function (Blueprint $table) {
            $table->bigInteger('book_title_id'); // FK to 'book_titles'
            $table->bigInteger('genre_id'); // FK to 'genres'
            $table->timestamps();
            $table->primary(['book_title_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_title_genre');
    }
}
