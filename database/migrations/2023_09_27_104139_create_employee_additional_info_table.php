<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_additional_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employeeId');
            $table->unsignedBigInteger('designationId');
            $table->string('employmentStatus');
            $table->string('dateOfJoining'); // Storing date as a date
            $table->string('serviceStatus');
            $table->string('permanentDate'); // Storing date as a date
            $table->unsignedBigInteger('reportingId');
            $table->string('sourceOfHiringRequest');
            $table->string('shiftTiming');
            $table->string('salary');
            $table->string('appraisalCycle');
            $table->string('typeOfMedicalInsurance');
            $table->string('chronicMedicalCondition');
            $table->string('noticeStatus');
            $table->string('dateOfNotice'); // Storing date as a date
            $table->string('dateOfExit'); // Storing date as a date
            $table->string('exitReason');
            $table->boolean('istrainee');
            $table->string('isWfoOrWfh')->nullable(); // Making this column nullable

            // Defining the foreign key constraints with ON DELETE CASCADE
            $table->foreign('employeeId')->references('id')->on('employee_basic_info')->onDelete('cascade');
            $table->foreign('reportingId')->references('id')->on('employee_basic_info')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_additional_info', function (Blueprint $table) {
            // Drop the foreign key constraints before dropping the table
            $table->dropForeign(['employeeId']);
            $table->dropForeign(['reportingId']);
        });
        Schema::dropIfExists('employee_additional_info');
    }
};