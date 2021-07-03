<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSukienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sukien', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('TENSK');
            $table->string('ANH');
            $table->string('CHUDE');
            $table->string('NHATOCUC');
            $table->string('NOIDUNGSK');
            $table->string('THANHPHO');
            $table->string('DIACHI');
            $table->dateTime('NGAYBATDAU');
            $table->dateTime('NGAYKETTHUC');
            $table->string('SEO_tieude');
            $table->string('SEO_mota');
            $table->string('SEO_tukhoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sukien');
    }
}
