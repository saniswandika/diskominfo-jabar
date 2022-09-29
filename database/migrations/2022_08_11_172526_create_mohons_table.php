<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email');
            $table->integer('No_Ktp');
            $table->integer('kontak');
            $table->text('alamat');
            $table->text('permintaan_informasi');
            $table->text('tujuan');
            $table->string('image_ktp');
            $table->string('name_ktp');
            $table->string('extension_ktp');
            $table->integer('size_ktp');
            $table->string('mime_ktp');
            $table->string('image_ttd');
            $table->string('name_ttd');
            $table->string('extension_ttd');
            $table->integer('size_ttd');
            $table->string('mime_ttd');
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
        Schema::dropIfExists('mohons');
    }
}
