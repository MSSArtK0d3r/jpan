<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilledColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->tinyInteger('filledB')->nullable()->before('completedB');
            $table->tinyInteger('filledC')->nullable()->before('completedC');
            $table->tinyInteger('filledD')->nullable()->before('completedD');
            $table->tinyInteger('filledE')->nullable()->before('completedE');
            $table->tinyInteger('filledF')->nullable()->before('completedF');
            $table->tinyInteger('filledG')->nullable()->before('completedG');
            $table->tinyInteger('filledH1')->nullable()->before('completedH1');
            $table->tinyInteger('filledH2')->nullable()->before('completedH2');
            $table->tinyInteger('filledH3')->nullable()->before('completedH3');
            $table->tinyInteger('filledH4')->nullable()->before('completedH4');
            $table->tinyInteger('filledI')->nullable()->before('completedI');
            $table->tinyInteger('filledJ')->nullable()->before('completedJ');
            $table->tinyInteger('filledK')->nullable()->before('completedK');
            $table->tinyInteger('filledL')->nullable()->before('completedL');
            $table->tinyInteger('filledM')->nullable()->before('completedM');
            $table->tinyInteger('filledN')->nullable()->before('completedN');
            $table->tinyInteger('filledO')->nullable()->before('completedO');
            $table->tinyInteger('filledP')->nullable()->before('completedP');
            $table->tinyInteger('filledQ')->nullable()->before('completedQ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->dropColumn(
                'filledB',
                'filledC',
                'filledD',
                'filledE',
                'filledF',
                'filledG',
                'filledH',
                'filledH1',
                'filledH2',
                'filledH3',
                'filledH4',
                'filledI',
                'filledJ',
                'filledK',
                'filledL',
                'filledM',
                'filledN',
                'filledO',
                'filledP',
                'filledQ'
            );
        });
    }
}
