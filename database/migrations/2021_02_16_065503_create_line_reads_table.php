<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_reads', function (Blueprint $table) {
            $table->id()->unique();
            $table->foreignId('line_id')->constrained('lines');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('transaction_id')->constrained('transactions');
            $table->foreignId('time_read_id')->constrained('time_reads');
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
        Schema::dropIfExists('line_reads');
    }
}
