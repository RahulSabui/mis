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
            $payloadOfBasicInfo = json_decode($request->getContent(), true);
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
}