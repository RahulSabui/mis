<?php
namespace App\Services;

use App\Models\state;
use App\Models\Designation;
use Illuminate\Support\Facades\Storage;
use App\Models\Employee;
class GlobalService
{
    public function state(){
       return $data = state::all();
    }

    public function designation(){
        return $data =  Designation::all();
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

    public function skidChecking($skid)
    {
        $exists = Employee::where('skid', '=', $skid)->exists();

        return $exists;
    }
}