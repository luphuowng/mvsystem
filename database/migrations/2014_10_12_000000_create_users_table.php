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
            $table->bigIncrements('id_user');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->date('birthday');
            $table->boolean('sex')->nullable();
            $table->string('address')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('points')->nullable();
            $table->bigInteger('id_type')->unsigned();
            $table->foreign('id_type')->references('id_type')->on('type_acc')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_typemem')->unsigned();
            $table->foreign('id_typemem')->references('id_typemem')->on('type_member')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_voucher')->unsigned();
            $table->foreign('id_voucher')->references('id_voucher')->on('voucher')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
