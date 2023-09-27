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
        Schema::create('employee_proccess_assignment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employeeId')->nullable();
            $table->integer('spanId')->nullable();
            $table->integer('clientId')->nullable();
            $table->integer('processId')->nullable();
            $table->string('billableStatus')->nullable();
            $table->string('contribution')->nullable();
            $table->timestamps();

            // Defining the foreign key constraint with ON DELETE CASCADE
            $table->foreign('employeeId')
                ->references('id')
                ->on('employee_basic_info')
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
        Schema::table('employee_proccess_assignment', function (Blueprint $table) {
            // Drop the foreign key before dropping the table
            $table->dropForeign(['employeeId']);
        });
        Schema::dropIfExists('employee_proccess_assignment');
    }
};