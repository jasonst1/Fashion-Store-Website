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
            $table->string('ProductID');
            $table->string('ProductName');
            $table->string('ProductSlug')->unique();
            $table->string('ProductSummary');
            $table->string('ProductCategory');
            $table->integer('ProductPrice');
            $table->integer('ProductQuantity');
            $table->integer('ProductDiscount');
            $table->timestamps();
            $table->timestamp('PublishedAt')->useCurrent()->useCurrentOnUpdate();
            $table->primary(['ProductID']);
            $table->foreign('productCategory')->references('categoryID')->on('categories')->onDelete('cascade');
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
