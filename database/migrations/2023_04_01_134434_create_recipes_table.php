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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description');
            $table->text('description');
            $table->string('image')->default("https://picsum.photos/200/300")->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('is_active')->default(0)->nullable();
            $table->tinyInteger('is_best')->default(0)->nullable();
            $table->tinyText('materials');
            $table->bigInteger('view_count')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
