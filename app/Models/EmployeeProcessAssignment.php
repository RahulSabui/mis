<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProcessAssignment extends Model
{
    use HasFactory;
    protected $table = 'employee_proccess_assignment';

    protected $fillable = [
        'employeeId',
        'spanId',
        'clientId',
        'processId',
        'billableStatus',
        'contribution',
    ];

    // Define the relationship with the employee_basic_info table
    public function employee()
    {
        return $this->belongsTo(EmployeeBasicInfo::class, 'employeeId');
    }
}