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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title', 100);
            $table->string('type', 100);
            $table->text('description')->nullable();
            $table->text('body')->nullable();
            $table->string('image_url', 100)->nullable();
            $table->json('tags')->nullable();
            $table->string('price')->default(0);
            $table->time('time')->default('00:00:00');
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('comment_count')->default(0);
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
        Schema::dropIfExists('courses');
    }
};
