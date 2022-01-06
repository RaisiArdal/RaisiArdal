<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewspostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsposts', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->boolean('show');
            $table->string('end');
            $table->bigInteger('publisher_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->text('title');
            $table->text('description');
            $table->integer('visit');
            $table->integer('like');
            $table->string('filename');
            $table->string('slug')->unique();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('newsposts');
    }
}
