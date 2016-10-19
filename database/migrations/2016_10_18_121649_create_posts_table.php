<?php

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
            $table->increments('id');
            $table->timestampsTz();
            $table->text('body');
            $table->integer('user_id');
            $table->string('image');
            $table->string('status')->default('pending');
            $table->softDeletes();
            $table->string('confirmed')->default('unconfirmed');
            $table->timestampTz('started_at');
            $table->timestampTz('finished_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
