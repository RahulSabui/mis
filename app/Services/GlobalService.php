<?php
namespace App\Services;

use App\Models\state;
use App\Models\Designation;
use Illuminate\Support\Facades\Storage;
use App\Models\Employee;
use App\Models\EmployeeAdditionalInfo;
use App\Models\Droplocation;
class GlobalService
{
    public function state(){
       return $data = state::orderBy('name', 'asc')->get();
    }

    public function designation(){
        return $data =  Designation::all();
    }

    public function dropLocation(){
        return $data = Droplocation::all();
    }

    public function imageUrl($uploadedFile){
        $filename = $uploadedFile->getClientOriginalName();
        $destination = public_path('uploads'); 
        if (!file_exists($destination)) {
            mkdir($destination, 0777, true);
        }
        $uploadedFile->move($destination, $filename);
        $baseUrl = url('uploads'); 
        $imageUrl = $baseUrl . '/' . $filename;
        return $imageUrl;
    }

    public function aadharImageUrl($uploadedFile){
        $filename = $uploadedFile->getClientOriginalName();
        $destination = public_path('uploads/employees/aadhar'); 
        if (!file_exists($destination)) {
            mkdir($destination, 0777, true);
        }
        $uploadedFile->move($destination, $filename);
        $baseUrl = url('uploads/employees/aadhar'); 
        $imageUrl = $baseUrl . '/' . $filename;
        return $imageUrl;
    }

    public function skidChecking($skid)
    {
        $exists = Employee::where('skid', '=', $skid)->exists();

        return $exists;
    }

    public function emailChecking($email)
    {
        $exists = Employee::where('email', '=', $email)->exists();

        return $exists;
    }

    public function aadhaarChecking($aadhaar)
    {
        $exists = EmployeeAdditionalInfo::where('aadhaarNumber', '=', $aadhaar)->exists();

        return $exists;
    }
}