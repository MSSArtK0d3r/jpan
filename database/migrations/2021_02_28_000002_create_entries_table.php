<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('umur');
            $table->string('jantina');
            $table->string('agama');
            $table->string('bangsa');
            $table->string('status');
            $table->smallInteger('bilAnak');
            $table->string('tinggalBersamaPasangan');
            $table->string('education');
            $table->string('jumlahGaji');
            $table->string('kesukaranGaji');
            $table->string('pernahTukarKerja');
            $table->string('masalahKesihatan');
            $table->string('tempatTinggal');
            $table->string('tinggalBersama');
            $table->string('kenderaanKerja');

            $table->smallInteger('B1');
            $table->smallInteger('B2');
            $table->smallInteger('B3');
            $table->smallInteger('B4');
            $table->smallInteger('B5');
            $table->smallInteger('B6');
            $table->smallInteger('B7');
            $table->smallInteger('B8');
            $table->smallInteger('B9');
            $table->smallInteger('B10');
            $table->smallInteger('B11');
            $table->smallInteger('B12');
            $table->smallInteger('B13');
            $table->smallInteger('B14');
            $table->smallInteger('B15');
            $table->smallInteger('B16');
            $table->smallInteger('B17');
            $table->smallInteger('B18');
            $table->smallInteger('B19');
            $table->smallInteger('B20');
            $table->smallInteger('B21');
            $table->smallInteger('B22');
            $table->smallInteger('B23');
            $table->smallInteger('B24');
            $table->smallInteger('B25');
            $table->smallInteger('B26');
            $table->smallInteger('B27');
            $table->smallInteger('B28');
            $table->smallInteger('B29');
            $table->smallInteger('B30');
            $table->smallInteger('B31');
            $table->smallInteger('B32');
            $table->smallInteger('B33');
            $table->smallInteger('B34');
            $table->smallInteger('B35');
            $table->smallInteger('B36');
            $table->smallInteger('B37');
            $table->smallInteger('B38');
            $table->smallInteger('B39');
            $table->smallInteger('B40');
            $table->smallInteger('B41');
            $table->smallInteger('B42');
            $table->smallInteger('B43');
            $table->smallInteger('B44');
            $table->smallInteger('B45');

            $table->smallInteger('C1');
            $table->smallInteger('C2');
            $table->smallInteger('C3');
            $table->smallInteger('C4');
            $table->smallInteger('C5'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
