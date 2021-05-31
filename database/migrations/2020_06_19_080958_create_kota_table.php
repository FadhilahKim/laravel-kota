<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('kota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namakota');
            $table->string('namapemimpin');
            $table->integer('jmlpenduduk', 10);
            $table->float('luaswilayah', 10);
            $table->string('jeniskota', 15);
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
        Schema::dropIfExists('kota');
    }
}
