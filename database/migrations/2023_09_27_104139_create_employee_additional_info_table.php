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
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->integer('designationId')->nullable();
            $table->string('employmentStatus')->nullable();
            $table->string('dateOfJoining')->nullable(); // Storing date as a date
            $table->string('serviceStatus')->nullable();
            $table->string('permanentDate')->nullable(); // Storing date as a date
            $table->integer('reportingId')->nullable();
            $table->string('sourceOfHiringRequest')->nullable();
            $table->string('shiftTiming')->nullable();
            $table->string('salary')->nullable();
            $table->string('appraisalCycle')->nullable();
            $table->string('typeOfMedicalInsurance')->nullable();
            $table->string('chronicMedicalCondition')->nullable();
            $table->string('noticeStatus')->nullable();
            $table->string('dateOfNotice')->nullable(); // Storing date as a date
            $table->string('dateOfExit')->nullable(); // Storing date as a date
            $table->string('exitReason')->nullable();
            $table->boolean('istrainee')->nullable();
            $table->string('isWfoOrWfh')->nullable(); // Making this column nullable
            $table->timestamps();


            // Defining the foreign key constraints with ON DELETE CASCADE
            $table->foreign('employeeId')->references('id')->on('employee_basic_info')->onDelete('cascade');
            // $table->foreign('reportingId')->references('id')->on('employee_basic_info')->onDelete('cascade');

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