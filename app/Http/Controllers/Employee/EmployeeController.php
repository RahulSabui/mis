<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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

    public function activeEmployee()
    {
        try {
            // $activeEmployeeDetails = $this->employeeService->activeEmployeelist(null, null, null, null);
            // dd( $activeEmployeeDetails);
            $empArr = [];
            $page = request()->input('page', 1);
            $limit = request()->input('limit', 10);
            $spanId = (request()->input('spanId') != 'undefined') ? json_decode(request()->input('spanId')) : [];
            $designationId = (request()->input('designationId') != 'undefined') ? json_decode(request()->input('designationId')) : [];

            $activeEmployeeDetails = $this->employeeService->activeEmployeelist($page, $limit, $spanId, $designationId);

            foreach ($activeEmployeeDetails[0] as $key => $value) {
                // return $value;
                $dd = DB::table('employee_basic_info')->select(
                    'employee_basic_info.id AS employee_id',
                    
                    'employee_basic_info.name AS name',
                    'employee_additional_info.designationId',
                    'designation.name AS designationName'
                )
                    ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
                    ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
                    ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
                    ->where('employee_additional_info.id', $value['reportingId'])
                    ->first();

                $empArr[] = [
                    "name" => $value['name'],
                    "skid" => $value['skid'],
                    "employeeImage"=>$value['employeeImage'],
                    "designationName" => $value['designationName'],
                    "spanName" => $value['spanName'],
                    "reportingId" => $dd,
                    "email" => $value['email'],
                    "phone" => $value['phone'],
                ];


            }

            $data = [
                'activeEmployeeDetails' => $activeEmployeeDetails[0],
                'list' => $empArr,
                'allCount' => $activeEmployeeDetails[1],
                'designationName' => $activeEmployeeDetails[2],
                'designationEmployeeCount' => $activeEmployeeDetails[3],
                'spanName' => $activeEmployeeDetails[4],
                'spanEmployeeCount' => $activeEmployeeDetails[5]

            ];
            return response()->json([
                'success' => true,
                'data' => $data
            ], 200);


        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }

    }


    public function searchActiveEmployee() {
        try {
            $empArr = [];
            $page = request()->input('page', 1);
            $limit = request()->input('limit', 10);
            $search = request()->input('search');
            $activeSearchEmployeeDetails = $this->employeeService->activeSearchEmployeelist($page, $limit, $search);
            foreach ($activeSearchEmployeeDetails as $key => $value) {
                $dd = DB::table('employee_basic_info')->select(
                    'employee_basic_info.id AS employee_id',
                    'employee_basic_info.name AS name',
                    'employee_additional_info.designationId',
                    'designation.name AS designationName'
                )
                    ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
                    ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
                    ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
                    ->where('employee_additional_info.id', $value['reportingId'])
                    ->first();

                $empArr[] = [
                    "name" => $value['name'],
                    "skid" => $value['skid'],
                    "designationName" => $value['designationName'],
                    "spanName" => $value['spanName'],
                    "reportingId" => $dd,
                    "email" => $value['email'],
                    "phone" => $value['phone'],
                ];


            }
            $data = [
                'list'=> $empArr,
                'activeEmployeeDetails' => $activeSearchEmployeeDetails
            ];
            return response()->json([
                'success' => true,
                'data' => $data
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
        
    }


    public function Helper()
    {
        try {
            $designations = DB::table('designation')->get();
            $spans = DB::table('span')->get();
            return response()->json([
                'success' => true,
                'designations' => $designations,
                'spans' => $spans

            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function dateFilterActiveEmployee(Request $request)
    {
        try {
            $empArr = [];
            $date = request()->input('date');
            $logOfActiveEmployee = $this->employeeService->dataLogOfActiveEmployee($date);
            $decodedlogOfActiveEmployee = json_decode($logOfActiveEmployee->dateLog);
            
            foreach ($decodedlogOfActiveEmployee as $key => $value) {
                foreach ($value as $key => $values) {
                    $name = isset($values->name) ? $values->name : null;
                    $skid = isset($values->skid) ? $values->skid : null;
                    $designationName = isset($values->designationName) ? $values->designationName : null;
                    $reportId = isset($values->reportingId) ? $values->reportingId : null;
                    $spanName = isset($values->spanName) ? $values->spanName : null;
                    $email = isset($values->email) ? $values->email : null;
                    $phone = isset($values->phone) ? $values->phone : null;
    
                    $dd = DB::table('employee_basic_info')->select(
                        'employee_basic_info.id AS employee_id',
                        'employee_basic_info.name AS name',
                        'employee_additional_info.designationId',
                        'designation.name AS designationName'
                    )
                    ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
                    ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
                    ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
                    ->where('employee_additional_info.id', $reportId)
                    ->first();
    
                    $empArr[] = [
                        "name" => $name,
                        "skid" => $skid,
                        "designationName" => $designationName,
                        "spanName" => $spanName,
                        "email" => $email,
                        "phone" => $phone,
                        "reportingId" => $dd,
                    ];
                }
            }
    
            return response()->json([
                'success' => true,
                'data' => $logOfActiveEmployee,
                'list'=>$empArr
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
}