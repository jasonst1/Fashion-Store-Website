<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->foreign('TransactionID')->references('TransactionID')->on('transaction_headers');
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->integer('ProductQty');
            $table->integer('TransactionPrice');
            $table->primary(['TransactionID', 'ProductID']);
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
        Schema::dropIfExists('transaction_details');
    }
}
