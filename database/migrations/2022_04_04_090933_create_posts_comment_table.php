<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_comment', function (Blueprint $table) {
            $table->string('id', 100)->unique('news_comment_un');
            $table->string('code', 100);
            $table->string('create_date', 100)->default('CURRENT_TIMESTAMP');
            $table->unsignedInteger('post_id')->nullable();
            $table->text('comment');
            $table->string('full_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_comment');
    }
}
