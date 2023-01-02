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
            $table->string('productID');
            $table->string('productName');
            $table->string('productSlug')->unique();
            $table->string('productSummary');
            $table->string('productCategory');
            $table->integer('productPrice');
            $table->integer('productQuantity');
            $table->integer('productDiscount');
            $table->timestamps();
            $table->timestamp('publishedAt')->useCurrent()->useCurrentOnUpdate();
            $table->primary(['productID']);
            // $table->foreign('productCategory')->references('categoryID')->on('categories')->onDelete('cascade');
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
