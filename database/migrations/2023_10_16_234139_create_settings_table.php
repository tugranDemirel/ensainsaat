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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table ->string('title')->nullable();
            $table ->string('meta_description')->nullable();
            $table ->string('meta_keywords')->nullable();
            $table->string('header_text')->nullable();
            $table->string('footer_text')->nullable();
            $table ->string('logo')->nullable();
            $table ->string('favicon')->nullable();
            $table ->string('facebook')->nullable();
            $table ->string('twitter')->nullable();
            $table ->string('instagram')->nullable();
            $table ->string('linkedin')->nullable();
            $table ->string('youtube')->nullable();
            $table ->string('address')->nullable();
            $table ->string('phone')->nullable();
            $table ->string('fax')->nullable();
            $table ->string('email')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
