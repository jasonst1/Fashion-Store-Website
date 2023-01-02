<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_photos', function (Blueprint $table) {
            $table->string('ReviewID')->references('ReviewID')->on('reviews');
            $table->string('PhotoID');
            $table->string('Photo');
            $table->primary(['ReviewID', 'PhotoID']);
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
        Schema::dropIfExists('review_photos');
    }
}
