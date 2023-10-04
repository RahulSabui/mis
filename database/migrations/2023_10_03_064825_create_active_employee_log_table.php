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
        Schema::create('active_employee_log', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('date');
            $table->integer('employeeId');
            $table->string('name');
            $table->string('skid');
            $table->string('email');
            $table->string('phone');
            $table->string('reportingManger');
            $table->integer('reportingId');
            $table->string('spanId');
            $table->string('spanName');
            $table->string('designationId');
            $table->string('designationName');
            $table->string('billable');
            $table->string('isTrainee');
            $table->string('UnderNotice');
            $table->string('Probation');
            $table->string('Revenue');
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
        Schema::dropIfExists('active_employee_log');
    }
};
