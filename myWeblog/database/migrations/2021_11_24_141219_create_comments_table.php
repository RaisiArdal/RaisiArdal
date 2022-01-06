<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('newspost_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->text('description');
            $table->bigInteger('like');
            $table->boolean('show');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('newspost_id')->references('id')->on('newsposts')->onDelete('cascade');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('comments');
    }
}
