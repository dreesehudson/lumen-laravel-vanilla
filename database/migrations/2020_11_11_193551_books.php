<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->char('isbn');
            $table->integer('pages');
            $table->datetime('released');
            $table->double('value');
            $table->double('cost');
            $table->integer('edition');
            $table->unsignedBigInteger('ref_author_id');
            $table->unsignedBigInteger('ref_genre_id');
            $table->timestamps();

            // $table->foreign('ref_author_id')
            //     ->references('author_id')
            //     ->on('authors')
            //     ->onDelete('cascade');

            // $table->foreign('ref_genre_id')
            //     ->references('genre_id')
            //     ->on('genres')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
