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
        Schema::create('b_l_o_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('main_title')->required;
            $table->string('image')->required;
            $table->string('alt_text')->required;
            $table->text('Introduction')->required;
            $table->string('blog_tags')->required;
            $table->text('meta_description')->required;
            $table->text('sub_title_one')->nullable();
            $table->text('description_one')->nullable();
            $table->text('sub_title_two')->nullable();
            $table->text('description_two')->nullable();
            $table->text('sub_title_three')->nullable();
            $table->text('description_three')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_l_o_g_s');
    }
};
