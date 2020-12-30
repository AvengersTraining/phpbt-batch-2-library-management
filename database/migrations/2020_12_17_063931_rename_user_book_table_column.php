<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUserBookTableColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_book', function (Blueprint $table) {
            $table->renameColumn('admin_id_create', 'created_by_admin_id');
            $table->renameColumn('admin_id_return', 'returned_by_admin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_book', function (Blueprint $table) {
            $table->renameColumn('created_by_admin_id', 'admin_id_create');
            $table->renameColumn('returned_by_admin_id', 'admin_id_return');
        });
    }
}
