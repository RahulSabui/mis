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
        Schema::create('employee_basic_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('name');
            $table->string('skid')->nullable();
            $table->string('phone')->nullable();
            $table->string('emergencyContact')->nullable();
            $table->string('email')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->string('qualification')->nullable();
            $table->string('academicStream')->nullable();
            $table->string('school')->nullable();
            $table->string('college')->nullable();
            $table->string('foodPreference')->nullable();
            $table->string('relation')->nullable();
            $table->string('employeeImage')->nullable();
            $table->timestamps();

            // Defining the foreign key constraint with ON DELETE CASCADE
            $table->foreign('userId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_address', function (Blueprint $table) {
            // Drop the foreign key before dropping the table
            $table->dropForeign(['employeeId']);
        });
        Schema::dropIfExists('employee_basic_info');
    }
};