<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->unique();
            $table->text('picture');
            $table->text('description');
            $table->time('runtime');
            $table->date('releaseDate');
            $table->integer('director_id')->nullable()->unsigned();
            $table->integer('actor_id')->nullable()->unsigned();
            $table->integer('genre_id')->nullable()->unsigned();
            $table->integer('users_id')->nullable()->unsigned();

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
        Schema::dropIfExists('movies');
    }
}
