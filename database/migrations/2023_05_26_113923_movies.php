<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verify');
            $table->boolean('role');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')->references('id')->on('account');
            $table->string('email')->unique();
            $table->string('full_name');
            $table->timestamp('created_at')->nullable();
            $table->integer('phone');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar');
            $table->date('premiere_date');
            $table->string('country');
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('amount');
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->date('movie_date');
            $table->time('time_begin');
            $table->time('time_end');
            $table->timestamps();
        });
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedule');
            $table->boolean('status');
            $table->timestamps();
        });
        

        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('ticket');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->datetime('book_date');
            $table->string('code');
            $table->decimal('total_price');
            $table->timestamps();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

       

        Schema::create('movies_cat', function (Blueprint $table) {
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_cat');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('schedule');
        Schema::dropIfExists('ticket');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('users');
        Schema::dropIfExists('account');
    }
}
