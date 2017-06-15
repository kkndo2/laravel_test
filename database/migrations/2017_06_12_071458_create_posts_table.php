<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('id', false, true);
            $table->string('title', 500)->comment('제목');
            $table->text('body')->comment('내용입니다. \n ㅇㅇ');
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id')->references('id')->on('authors');



        });
        DB::statement("ALTER TABLE `posts` comment '발행테이블 ! '");
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
