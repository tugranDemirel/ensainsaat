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
        Schema::create('real_estates', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // title of the real estate
            $table->string('slug')->unique(); // seo için slug
            $table->string('address'); // address of the real estate
            $table->text('description'); // description of the real estate
            $table->string('image'); // main image
            $table->tinyInteger('status'); // sold, for sale, for rent
            $table->tinyInteger('type'); // house, apartment, condo, studio, villa
            $table->tinyInteger('purpose'); // for rent or for sale
            $table->string('video')->nullable(); // video url
            $table->string('map')->nullable(); // harita url
            $table->boolean('is_active')->default(true); // active real estate
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
        Schema::dropIfExists('real_estates');
    }
};
