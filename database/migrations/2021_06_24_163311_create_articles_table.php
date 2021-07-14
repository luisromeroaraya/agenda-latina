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
            $table->string('source', 256);
            $table->string('title', 256);
            $table->string('author', 256);
            $table->string('description', 256);
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
