<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('armor_class');
            $table->string('challange_rating');
            $table->string('hp');
            $table->integer('str');
            $table->integer('dex');
            $table->integer('con');
            $table->integer('wis');
            $table->integer('cha');
            $table->string('type');
            $table->string('size');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
