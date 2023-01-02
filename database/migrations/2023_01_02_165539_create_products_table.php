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
            $table->primary('id');
            $table->string('productName');
            $table->string('productSlug')->unique();
            $table->string('productSummary');
            $table->string('productCategory');
            $table->foreign('productCategory')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('productPrice');
            $table->integer('productQuantity');
            $table->integer('productDiscount');
            $table->timestamps();
            $table->timestamp('publishedAt')->useCurrent()->useCurrentOnUpdate();
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
