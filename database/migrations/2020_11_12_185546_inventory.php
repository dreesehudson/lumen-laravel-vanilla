<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ref_book_id');
            $table->boolean('checked_out')->default(false);
            $table->datetime('checkout_date')->nullable();
            $table->datetime('due_date')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('ref_user_id')->nullable();
            $table->timestamps ();

            $table->foreign('ref_book_id')
                ->references('id')
                ->on('books')
                ->onDelete('cascade');

            $table->foreign('ref_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
