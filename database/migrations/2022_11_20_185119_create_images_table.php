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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('images');
//            $table->foreignId('saved_by')->constrained('users');

            $table->string('path');
            $table->string('filename', 50);
            $table->string('format', 20);
            $table->unsignedInteger('size');
            $table->string('resolution', 10);
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
        Schema::dropIfExists('images');
    }
};
