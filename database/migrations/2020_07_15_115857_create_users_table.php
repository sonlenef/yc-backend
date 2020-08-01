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
            $table->increments('id');
            $table->string('username', 100);
            $table->string('password', 200);
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name', 100)->default('');
            $table->string('image', 100)->default('');
            $table->string('email', 50)->default('');
            $table->string('phone', 10)->default('');
            $table->string('address', 200)->default('');
            $table->integer('point')->length(10)->default(0);
            $table->string('userStatus', 200)->default('');
            $table->boolean('verified')->default(1);
            $table->boolean('enabled')->default(1);
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
