<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee_basic_info'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'userId',
        'name',
        'skid',
        'phone',
        'emergencyContact',
        'email',
        'age',
        'gender',
        'religion',
        'bloodGroup',
        'qualification',
        'academicStream',
        'school',
        'college',
        'foodPreference',
        'relation',
        'employeeImage',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

}
