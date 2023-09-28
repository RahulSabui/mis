<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use Illuminate\Http\Request;



class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }
    public function basicInfo(Request $request)
    {
        try {
            $payloadOfBasicInfo = json_decode(request()->input('data'), true);

            $createOrUpdateBasicInfo = $this->employeeService->createOrUpdateEmployee($payloadOfBasicInfo);

            if ($createOrUpdateBasicInfo) {
                return response()->json([
                    'success' => true,
                    'message' => $payloadOfBasicInfo['id'] ? 'Basic Info updated successfully' : 'Basic Info created successfully',
                    'id' => $createOrUpdateBasicInfo,
                ], $payloadOfBasicInfo['id'] ? 200 : 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to update or create Basic Info',
                ], 500);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function address(Request $request)
    {
        try {
            $payloadOfAddress = json_decode(request()->input('data'), true);



            $createOrUpdateEmployeeInfo = $this->employeeService->createOrUpdateAddress($payloadOfAddress);
            if ($createOrUpdateEmployeeInfo == "updated") {
                return response()->json([
                    'success' => true,
                    'message' => 'Address info updated successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Address info created successfully',
                ], 201);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function additonalInfo(Request $request)
    {
        try {
            $payloadOfAddress = json_decode(request()->input('data'), true);
            // dd($payloadOfAddress);

            $createOrUpdateEmployeeInfo = $this->employeeService->createOrUpdateEmployeeInfo($payloadOfAddress);
            if ($createOrUpdateEmployeeInfo == "updated") {
                return response()->json([
                    'success' => true,
                    'message' => 'Additional info updated successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Additional info created successfully',
                ], 201);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }

    }


    public function processAssignment(Request $request)
    {
        try {
            $payloadOfProcessAssignment = json_decode(request()->input('data'), true);
           
            $createOrUpdateEmployeeInfo = $this->employeeService->createOrUpdateEmployeerocessAssignment($payloadOfProcessAssignment);
            if ($createOrUpdateEmployeeInfo) {
                return response()->json([
                    'success' => true,
                    'message' => 'Process Assignment updated successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Process Assignment info created successfully',
                ], 201);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
    public function ijp(Request $request)
    {
        try {
            $payloadOfIjp = json_decode(request()->input('data'), true);
           

            $createOrUpdateEmployeeInfo = $this->employeeService->createOrUpdateEmployeeIjp($payloadOfIjp);
            if ($createOrUpdateEmployeeInfo) {
                return response()->json([
                    'success' => true,
                    'message' => 'Internal Job Promotion created  successfully'
                ], 200);
            } else {
                return response()->json([
                    'success' => true,
                    'message' => 'Internal Job Promotion info updated successfully',
                ], 201);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }



}