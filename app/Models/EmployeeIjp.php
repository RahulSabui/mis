<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeIjp extends Model
{
    use HasFactory;
    protected $table = 'employee_ijp'; // Define the table name
    protected $primaryKey = 'id'; // Define the primary key field

    protected $fillable = [
        'employeeId',
        'ijpName',
        'dateOfApplication',
        'billableStatus',
        'dateOfClosure',
        'spanId',
        'processId',
        'clientId',
        'status',
    ];

    // Define the relationship with the EmployeeBasicInfo model
    public function employee()
    {
        return $this->belongsTo(EmployeeBasicInfo::class, 'employeeId');
    }
}