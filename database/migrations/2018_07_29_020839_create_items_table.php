<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('cat_id')->index();
            $table->text('name');
            $table->text('desc')->nullable();;
            $table->double('price');
            $table->text('location');
            $table->boolean('is_available');
            $table->text('pic1')->nullable();;
            $table->text('pic2')->nullable();;
            $table->text('pic3')->nullable();;
            $table->text('pic4')->nullable();;
            $table->text('pic5')->nullable();;
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
        Schema::dropIfExists('items');
    }
}
