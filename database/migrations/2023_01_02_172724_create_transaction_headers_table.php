<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_headers', function (Blueprint $table) {
            $table->foreign('TransactionID')->references('TransactionID')->on('transaction_headers');
            $table->foreign('UserID')->references('UserID')->on('users');
            $table->date('TransactionDate');
            $table->primary(['TransactionID', 'UserID']);
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

        Schema::dropIfExists('transaction_headers');
    }
}
