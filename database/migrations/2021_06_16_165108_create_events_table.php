<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->dateTime('date_start', $precision = 0);
            $table->dateTime('date_end', $precision = 0);
            $table->string('name', 256);
            $table->string('img_src', 256);
            $table->text('description');
            $table->string('place', 256);
            $table->string('address', 256);
            $table->string('telephone', 256);
            $table->string('email', 256);
            $table->string('url', 256);
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
        Schema::dropIfExists('events');
    }
}
