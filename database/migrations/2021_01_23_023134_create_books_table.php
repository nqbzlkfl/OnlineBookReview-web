<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bName');
            $table->string('bAuthor');
            $table->string('bDesc');
            $table->string('bInfo');
            $table->string('bPhoto')->nullable();
            $table->string('bRate')->nullable();
            $table->string('bBuy1')->nullable();
            $table->string('bBuy2')->nullable();
            $table->string('bBuy3')->nullable();
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
        Schema::dropIfExists('books');
    }
}
