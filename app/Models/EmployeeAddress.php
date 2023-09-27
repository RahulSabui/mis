<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{
    use HasFactory;
    protected $table = 'employee_address';

    protected $fillable = [
        'employeeId',
        'permanentAddress',
        'isSameAsPermanentAddress',
        'residentialAddress',
    ];

    public function employee()
    {
        return $this->belongsTo(EmployeeBasicInfo::class, 'employeeId');
    }
}