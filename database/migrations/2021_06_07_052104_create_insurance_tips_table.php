<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_tips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tip_name');
            $table->string('image');
            $table->string('tip_sub_head')->nullable();
            $table->string('slug');
            $table->boolean('status')->default(0);
            $table->boolean('front_status')->default(0);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_tips');
    }
}
