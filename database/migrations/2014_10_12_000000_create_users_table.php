<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('family')->nullable();
            $table->tinyInteger('dob_day')->nullable();
            $table->tinyInteger('dob_month')->nullable();
            $table->smallInteger('dob_year')->nullable();
            $table->enum('gender', ['male', 'female', 'unknown']);
            $table->timestamp('email_verified_at')->nullable();
            // It's better to use this, rather then sub-queries
//            $table->integer('lines_read')->default(0);
//            $table->integer('times_read')->default(0);
//            $table->integer('membership_rewards')->default(0);
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
        Schema::dropIfExists('users');
    }
}
