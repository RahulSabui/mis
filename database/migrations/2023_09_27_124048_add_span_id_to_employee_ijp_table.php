<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_ijp', function (Blueprint $table) {
            if (Schema::hasColumn('employee_ijp', 'spanId')) {
                $table->unsignedBigInteger('spanId')->change();
            } else {
                $table->unsignedBigInteger('spanId');
            }
    
            $table->foreign('spanId')
                  ->references('id')
                  ->on('span');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_ijp', function (Blueprint $table) {
            $table->dropColumn('spanId');
        });
    }
};
