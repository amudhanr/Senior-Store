<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('total_amount')->unsigned();
			$table->mediumInteger('unit_price')->unsigned(); 
			$table->integer('product_id')->unsigned();
			// $table->foreign(‘product_id’)->reference(‘id’)->on(‘products’);
			$table->smallInteger('quantity')->unsigned();
			// $table->integer(‘type_id’)->unsigned();
			// $table->foreign(‘type_id’)->reference(‘id’)->on(‘types’);
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
        Schema::dropIfExists('inventory');
    }
}
