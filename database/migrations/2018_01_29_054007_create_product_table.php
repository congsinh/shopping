<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')){
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('alias');
                $table->integer('price');
                $table->integer('discount')->nullable()->default(0);
                $table->integer('sales')->nullable()->default(0);
                $table->integer('quantity');
                $table->string('keywords')->nullable();
                $table->text('description')->nullable();;
                $table->integer('subcate_id')->unsigned();
                $table->foreign('subcate_id')->references('id')->on('sub_categories')->onDelete('cascade');
                $table->integer('provider_id')->unsigned();
                $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
