<?php

use App\Models\Order;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeStatusColumnTypeFromUserBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        $orders = Order::all();

        Schema::table('user_book', function (Blueprint $table) {
            $table->smallInteger('status')->change();
        });

        foreach ($orders as $order) {
            $order->status = (int)$order->status;
            $order->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $orders = Order::all();

        Schema::table('user_book', function (Blueprint $table) {
            $table->string('status')->change();
        });

        foreach ($orders as $order) {
            $order->status = (string)$order->status;
            $order->save();
        }
    }
}
