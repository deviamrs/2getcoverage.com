<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsuranceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurance_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->bigInteger('insure_category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('sub_heading')->nullable();
            $table->boolean('status')->default(0);
            $table->longText('insurance_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_types');
    }
}
