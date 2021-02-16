<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->id()->unique();
            $table->bigInteger('number')->default(1);
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('chapter_id')->constrained('chapters');
            $table->longText('content');
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
        Schema::dropIfExists('lines');
    }
}
