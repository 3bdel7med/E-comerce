<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cat_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->text('small_description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('image');
            $table->string('qty');
            $table->string('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');


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
        Schema::dropIfExists('products');
    }
}
