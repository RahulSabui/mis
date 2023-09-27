<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('employee_additional_info', function (Blueprint $table) {
            // Check if the column exists before modifying it
            if (Schema::hasColumn('employee_additional_info', 'designationId')) {
                $table->unsignedBigInteger('designationId')->change();
            } else {
                // If the column doesn't exist, add it
                $table->unsignedBigInteger('designationId');
            }
    
            $table->foreign('designationId')
                  ->references('id')
                  ->on('designation');
        });
    }

    public function down()
    {
        Schema::table('employee_additional_info', function (Blueprint $table) {
            $table->dropColumn('designationId');
        });
    }
};
