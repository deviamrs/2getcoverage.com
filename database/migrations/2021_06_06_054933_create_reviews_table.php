<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        //  table columns
            $table->string('name');
            $table->string('location')->nullable();
            $table->text('content')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('front_status')->default(0);
            $table->float('rating_score');
            $table->integer('full_stars');
            $table->boolean('half_stars');
            $table->integer('empty_stars');

        //  table columns   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
