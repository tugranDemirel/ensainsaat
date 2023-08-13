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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_description');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->integer('order')->nullable();
            $table->boolean('is_active')->default(1)->comment('1: aktif 0: pasif'); // Aktif mi?
            $table->boolean('is_home')->default(0)->comment('Anasayfa da gösterilsin mi?'); // Anasayfada gösterilsin mi?
            $table->boolean('is_featured')->default(0)->comment('Öne çıkan hizmetlerde gösterilsin mi?'); // Öne çıkan hizmetlerde gösterilsin mi?
            $table->string('meta_title')->nullable(); // Meta başlık
            $table->string('meta_description')->nullable(); // Meta açıklama
            $table->string('meta_keywords')->nullable(); // Meta anahtar kelimeler
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
        Schema::dropIfExists('services');
    }
};
