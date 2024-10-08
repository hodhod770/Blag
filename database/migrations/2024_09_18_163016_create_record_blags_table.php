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
        Schema::create('record_blags', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('iamge');
            $table->string('detils')->nullable();
            $table->string('ip')->nullable();
            $table->string('stute')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_blags');
    }
};
