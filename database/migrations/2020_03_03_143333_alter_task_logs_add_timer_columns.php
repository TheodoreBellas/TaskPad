<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTaskLogsAddTimerColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_logs', function(Blueprint $table) {
            $table->datetime('timer_start')->nullable()->after('user_id');
            $table->datetime('timer_end')->nullable()->after('timer_start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_logs', function(Blueprint $table) {
            $table->dropColumn('timer_start');
            $table->dropColumn('timer_end');
        });
    }
}
