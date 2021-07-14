<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('source', 128);
            $table->string('title', 128);
            $table->string('author', 128);
            $table->text('description');
            $table->text('content');
            $table->string('url', 256);
            $table->string('urlToImage', 256);
            $table->dateTime('publishedAt', $precision = 0);
            $table->boolean('highlight')->default('0');
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
        Schema::dropIfExists('articles');
    }
}
