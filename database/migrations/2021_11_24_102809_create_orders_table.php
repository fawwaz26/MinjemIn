<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('user_id');
            $table->integer('id_pinejaman');
            $table->string('Nama_Lengkap');
            $table->string('nim');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('no_hp');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->string('status');
            $table->string('ktm');
            $table->string('kk');
            $table->string('ktp');
            $table->dateTime('waktu_pinjaman');
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
        Schema::dropIfExists('orders');
    }
}
