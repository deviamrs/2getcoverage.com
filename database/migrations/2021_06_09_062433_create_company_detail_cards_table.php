<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_detail_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->bigInteger('company_id');
            $table->string('heading');
            $table->longText('card_content')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('card_width')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_detail_cards');
    }
}
