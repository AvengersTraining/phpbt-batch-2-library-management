<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_book', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('book_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('return_date')->nullable();
            $table->string('status');
            $table->bigInteger('admin_id_create'); // FK to 'users'
            $table->bigInteger('admin_id_return'); // FK to 'users'
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
        Schema::dropIfExists('user_book');
    }
}
