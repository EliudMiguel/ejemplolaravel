<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
=======
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->boolean('active')->default(true);
            $table->enum('type',['admin','user']);
>>>>>>> subo new proyecto angeles
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
