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
        Schema::create('employee_address', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employeeId');
            $table->json('permanentAddress')->nullable();
            $table->boolean('isSameAsPermanentAddress')->nullable();
            $table->json('residentialAddress')->nullable();
            $table->integer('dropLocationId')->nullable();
            
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
        Schema::table('employee_address', function (Blueprint $table) {
            // Drop the foreign key before dropping the table
            $table->dropForeign(['employeeId']);
        });
        Schema::dropIfExists('employee_address');
    }
};