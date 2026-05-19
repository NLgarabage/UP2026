<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('likes');
            $table->string('category_id');
        });
        $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
