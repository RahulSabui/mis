<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAdditionalInfo extends Model
{
    use HasFactory;
    // Define the table name associated with this model
    protected $table = 'employee_additional_info';

    // Define the fillable columns that can be mass-assigned
    protected $fillable = [
        'employeeId',
        'designationId',
        'employmentStatus',
        'dateOfJoining',
        'aadharImage',
        'aadhaarNumber',
        'serviceStatus',
        'permanentDate',
        'reportingId',
        'sourceOfHiringRequest',
        'shiftTiming',
        'salary',
        'appraisalCycle',
        'typeOfMedicalInsurance',
        'chronicMedicalCondition',
        'noticeStatus',
        'dateOfNotice',
        'dateOfExit',
        'exitReason',
        'istrainee',
        'isWfoOrWfh',
    ];

    // Define the relationships with other models, if any
    public function employeeBasicInfo()
    {
        return $this->belongsTo(EmployeeBasicInfo::class, 'employeeId');
    }

    public function reportingEmployee()
    {
        return $this->belongsTo(EmployeeBasicInfo::class, 'reportingId');
    }
}