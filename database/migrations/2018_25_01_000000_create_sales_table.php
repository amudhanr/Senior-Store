<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			//$table->foreign('user_id')->reference(‘id’)->on(‘users’);
			$table->mediumInteger('total_amount')->unsigned();
			$table->mediumInteger('unit_price')->unsigned(); //doesn’t this reference to the product table?
			$table->integer('product_id')->unsigned();
			//$table->foreign('product_id')->reference(‘id’)->on(‘products’);
			$table->smallInteger('quantity')->unsigned();
			//you should have unit price and total price as well
			    // $table->integer('type_id')->unsigned();
			// $table->foreign('type_id')->reference(‘id’)->on(‘types’);
			$table->text('description');
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
        Schema::dropIfExists('sales');
    }
}
