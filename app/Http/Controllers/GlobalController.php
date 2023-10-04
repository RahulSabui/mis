<?php

namespace App\Http\Controllers;

use App\Services\GlobalService;
use Illuminate\Http\Request;
use App\Models\state;
use App\Models\Designation;
use Illuminate\Support\Facades\DB;

class GlobalController extends Controller
{
    protected $GlobalService;

    public function __construct(GlobalService $GlobalService)
    {
        $this->GlobalService = $GlobalService;
    }

    public function states()
    {
        try {

            $data = $this->GlobalService->state();

            return response()->json(['data' => $data]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function designations()
    {
        try {

            $data = $this->GlobalService->designation();

            return response()->json(['data' => $data]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function droplocation()
    {
        try {

            $data = $this->GlobalService->dropLocation();

            return response()->json(['data' => $data]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function fileUpload(Request $request)
    {
        try {
            if ($request->hasFile('image')) {

                $uploadedFile = $request->file('image');
                $imageUrl = $this->GlobalService->imageUrl($uploadedFile);

                return response()->json([
                    'success' => true,
                    'message' => 'Image uploaded successfully',
                    'url' => $imageUrl,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file uploaded',
                ], 400);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'File upload error: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function aadharUpload(Request $request)
    {
        try {
            if ($request->hasFile('image')) {

                $uploadedFile = $request->file('image');
                $imageUrl = $this->GlobalService->aadharImageUrl($uploadedFile);

                return response()->json([
                    'success' => true,
                    'message' => 'Image uploaded successfully',
                    'url' => $imageUrl,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No file uploaded',
                ], 400);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'File upload error: ' . $e->getMessage(),
            ], 500);
        }
    }

public function checkSkid(Request $request)
{
    try {
        $skid = $request->input('skid');
        $exists = $this->GlobalService->skidChecking($skid);

            return response()->json(['exists' => $exists]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

public function checkEmail(Request $request){
    try {
        $email = $request->input('email');
        $exists = $this->GlobalService->emailChecking($email);

        return response()->json(['exists' => $exists]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}

public function checkAadhaar(Request $request){
    try {
        $email = $request->input('aadhaar');
        $exists = $this->GlobalService->aadhaarChecking($email);

        return response()->json(['exists' => $exists]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
}

    public function spans()
    {
        try {

            $data = $this->GlobalService->span();

            return response()->json(['data' => $data]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    function repotingManager($id)
    {
        return DB::table('employee_basic_info')->select(
            'employee_basic_info.id AS employee_id',
            'employee_basic_info.name AS name',
            'employee_additional_info.designationId',
            'designation.name AS designationName'
        )
            ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
            ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
            ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
            ->where('employee_additional_info.id', $id)
            ->first(); // Add this to execute the query and retrieve the results
    }

    public function fetchDesignationAndEmployees()
{
    $query = "
    SELECT ebi.name AS employee_name, ebi.id as employee_id , d.name AS designation_name
    FROM employee_basic_info ebi
    JOIN employee_additional_info eai ON ebi.id = eai.employeeId
    JOIN designation d ON eai.designationId = d.id
    WHERE d.name IS NOT NULL;
";


$employees = DB::select($query);

return response()->json($employees);
}



}