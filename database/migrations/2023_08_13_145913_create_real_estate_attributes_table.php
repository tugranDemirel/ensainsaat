<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('real_estate_id')->constrained()->onDelete('cascade');
            $table->float('price'); // price in dollars
            $table->float('area'); // area in square meters
            $table->integer('bedrooms'); // number of bedrooms
            $table->integer('bathrooms'); // number of bathrooms
            $table->integer('garages'); // number of garages
            $table->date('year_built'); // year built
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
        Schema::dropIfExists('real_estate_attributes');
    }
};
