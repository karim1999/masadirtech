<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('avatar')->nullable(); 
            $table->text('website')->nullable();
            $table->text('website_link')->nullable();
            $table->text('author')->nullable();
            $table->text('title')->nullable();
            $table->text('link')->nullable();

            $table->text('thumbnail')->nullable();
            $table->text('description')->nullable();

            $table->text('pubDate')->nullable();
            $table->text('type')->nullable();
 
            $table->text('language')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
