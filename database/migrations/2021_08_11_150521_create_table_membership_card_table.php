<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMembershipCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_card', function (Blueprint $table) {
            $table->bigIncrements('id_memcard');
            $table->string('memcard_name');
            $table->bigInteger('id_typemem')->unsigned();
            $table->foreign('id_typemem')->references('id_typemem')->on('type_member')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('membership_card');
    }
}
