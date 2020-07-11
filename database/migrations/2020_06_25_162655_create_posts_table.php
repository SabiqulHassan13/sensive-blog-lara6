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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0)->nullable();
            // $table->integer('posted_by')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
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
