<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompleteForAllsection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->boolean('completedA')->after('kenderaanKerjaDetail')->nullable();
            $table->boolean('completedB')->after('B19')->nullable();
            $table->boolean('completedC')->after('C2')->nullable();
            $table->boolean('completedD')->after('D1')->nullable();
            $table->boolean('completedE')->after('E6')->nullable();
            $table->boolean('completedF')->after('F6')->nullable();
            $table->boolean('completedG')->after('G10')->nullable();
            $table->boolean('completedH1')->after('H10')->nullable();
            $table->boolean('completedH2')->after('H20')->nullable();
            $table->boolean('completedH3')->after('H30')->nullable();
            $table->boolean('completedH4')->after('H35')->nullable();
            $table->boolean('completedI')->after('I3')->nullable();
            $table->boolean('completedJ')->after('J10')->nullable();
            $table->boolean('completedK')->after('K10')->nullable();
            $table->boolean('completedL')->after('L4')->nullable();
            $table->boolean('completedM')->after('M3')->nullable();
            $table->boolean('completedN')->after('N4')->nullable();
            $table->boolean('completedO')->after('O5')->nullable();
            $table->boolean('completedP')->after('P2')->nullable();
            $table->boolean('completedQ')->after('Q4')->nullable();
            $table->boolean('completedR')->after('cadangan')->nullable();
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
            $table->dropColumn('completedA');
            $table->dropColumn('completedB');
            $table->dropColumn('completedC');
            $table->dropColumn('completedD');
            $table->dropColumn('completedE');
            $table->dropColumn('completedF');
            $table->dropColumn('completedG');
            $table->dropColumn('completedH1');
            $table->dropColumn('completedH2');
            $table->dropColumn('completedH3');
            $table->dropColumn('completedH4');
            $table->dropColumn('completedI');
            $table->dropColumn('completedJ');
            $table->dropColumn('completedK');
            $table->dropColumn('completedL');
            $table->dropColumn('completedM');
            $table->dropColumn('completedN');
            $table->dropColumn('completedO');
            $table->dropColumn('completedP');
            $table->dropColumn('completedQ');
            $table->dropColumn('completedR');
        });
    }
}
