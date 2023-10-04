<?php
namespace App\Services;

use App\Models\Employee;
use App\Models\EmployeeAdditionalInfo;
use App\Models\EmployeeAddress;
use App\Models\EmployeeIjp;
use App\Models\EmployeeProcessAssignment;
use Illuminate\Support\Facades\DB;


class EmployeeService
{
    public function createOrUpdateEmployee($data)
    {
        $id = isset($data['id']) ? intval($data['id']) : null;

        $employeeData = [
            'userId' => isset($data["userId"]) ? $data["userId"] : 1,
            'name' => isset($data["name"]) ? $data["name"] : null,
            'skid' => isset($data["SKID"]) ? $data["SKID"] : null,
            'phone' => isset($data["phone"]) ? $data["phone"] : null,
            'emergencyContact' => isset($data["emergencyContact"]) ? $data["emergencyContact"] : null,
            'email' => isset($data["email"]) ? $data["email"] : null,
            'age' => isset($data["age"]) ? $data["age"] : null,
            'gender' => isset($data["gender"]) ? $data["gender"] : null,
            'religion' => isset($data["religion"]) ? $data["religion"] : null,
            'bloodGroup' => isset($data["bloodGroup"]) ? $data["bloodGroup"] : null,
            'qualification' => isset($data["qualification"]) ? $data["qualification"] : null,
            'academicStream' => isset($data["academicStream"]) ? $data["academicStream"] : null,
            'school' => isset($data["school"]) ? $data["school"] : null,
            'college' => isset($data["college"]) ? $data["college"] : null,
            'foodPreference' => isset($data["foodPreference"]) ? $data["foodPreference"] : null,
            'relation' => isset($data["relation"]) ? json_encode($data["relation"]) : null,
            'employeeImage' => isset($data["image"]) ? ($data["image"]) : null,
        ];

        if ($id) {
            $employee = Employee::find($id);

            if (!$employee) {
                throw new \Exception("Employee not found");
            }

            $employee->update($employeeData);

            return $employee->id;
        } else {
            $employee = Employee::create($employeeData);

            return $employee->id;
        }
    }

    public function createOrUpdateAddress($data)
    {
        $employeeId = isset($data['employeeId']) ? intval($data['employeeId']) : null;
        $isSameAsPermanentAddress = isset($data["sameAddress"]) ? $data["sameAddress"] : null;

        $permanentAddress = [
            "streetAddress1" => isset($data["streetAddress1"]) ? $data["streetAddress1"] : null,
            "streetAddress2" => isset($data["streetAddress2"]) ? $data["streetAddress2"] : null,
            "area" => isset($data["area"]) ? $data["area"] : null,
            "state" => isset($data["state"]) ? $data["state"] : null,
            "pin" => isset($data["pin"]) ? $data["pin"] : null,
        ];

        $residentialAddress = [
            "residentialStreetAddress" => isset($data["residentialStreetAddress"]) ? $data["residentialStreetAddress"] : null,
            "residentialStreetAddress2" => isset($data["residentialStreetAddress2"]) ? $data["residentialStreetAddress2"] : null,
            "residentialArea" => isset($data["residentialArea"]) ? $data["residentialArea"] : null,
            "residentialState" => isset($data["residentialState"]) ? $data["residentialState"] : null,
            "residentialPin" => isset($data["residentialPin"]) ? $data["residentialPin"] : null,
            "dropLocation" => isset($data["dropLocation"]) ? $data["dropLocation"] : null,
        ];

        $dropLocation = isset($data["dropLocation"]) ? $data["dropLocation"] : null;

        $permanentaddress = json_encode($permanentAddress);
        $residentialaddress = json_encode($residentialAddress);


        $existingRecord = EmployeeAddress::where('employeeId', $employeeId)->lockForUpdate()->first();

        if ($existingRecord) {
            $existingRecord->update([
                'permanentAddress' => $permanentaddress,
                'residentialAddress' => $residentialaddress,
                'isSameAsPermanentAddress' => $isSameAsPermanentAddress,
                'dropLocationId' => $dropLocation
            ]);
        } else {
            EmployeeAddress::create([
                'permanentAddress' => $permanentaddress,
                'residentialAddress' => $residentialaddress,
                'isSameAsPermanentAddress' => $isSameAsPermanentAddress,
                'employeeId' => $employeeId,
                'dropLocationId' => $dropLocation
            ]);
        }


        return isset($existingRecord) ? 'updated' : 'created';

    }
    public function createOrUpdateEmployeeInfo($data)
    {
        $employeeId = $data['employeeId'];
        $employeeAdditionalInfo = EmployeeAdditionalInfo::where('employeeId', $employeeId)->first();

        // Prepare data for update or insert
        $employeeData = [
            'employeeId' => $employeeId,
            'designationId' => isset($data["designation"]) ? $data["designation"] : null,
            'employmentStatus' => isset($data["employmentStatus"]) ? $data["employmentStatus"] : null,
            'dateOfJoining' => isset($data["dateOfJoining"]) && $data["dateOfJoining"] != "" ? date_create_from_format('m-d-Y', $data["dateOfJoining"])->format('Y-m-d') : null,
            'aadharImage' => isset($data["aadharImage"]) ? json_encode($data["aadharImage"]) : null,
            'shiftTiming' => isset($data["shiftTiming"]) ? $data["shiftTiming"] : null,
            'serviceStatus' => isset($data["serviceStatus"]) ? $data["serviceStatus"] : null,
            'appraisalCycle' => isset($data["appraisalCycle"]) ? $data["appraisalCycle"] : null,
            'typeOfMedicalInsurance' => isset($data["typeOfMedicalInsurance"]) ? $data["typeOfMedicalInsurance"] : null,
            'chronicMedicalCondition' => isset($data["chronicMedicalCondition"]) ? $data["chronicMedicalCondition"] : null,
            'salary' => isset($data["salary"]) ? $data["salary"] : null,
            'reportingId' => isset($data["reporting"]) ? $data["reporting"] : null,
            'istrainee' => isset($data["istrainee"]) ? $data["istrainee"] : null,
            'sourceOfHiringRequest' => isset($data["sourceOfHiringRequest"]) ? $data["sourceOfHiringRequest"] : null,
            'permanentDate' => isset($data["permanentDate"]) && $data["permanentDate"] != "" ? date_create_from_format('m-d-Y', $data["permanentDate"])->format('Y-m-d') : null,
            'noticeStatus' => isset($data["noticeStatus"]) ? $data["noticeStatus"] : null,
            'dateOfNotice' => isset($data["dateOfNotice"]) && $data["dateOfNotice"] != "" ? date_create_from_format('m-d-Y', $data["dateOfNotice"])->format('Y-m-d') : null,
            'dateOfExit' => isset($data["dateOfExit"]) && $data["dateOfExit"] != "" ? date_create_from_format('m-d-Y', $data["dateOfExit"])->format('Y-m-d') : null,
            'exitReason' => isset($data["exitReason"]) ? $data["exitReason"] : null,
            'isWfoOrWfh' => isset($data["isWfoOrWfh"]) ? $data["isWfoOrWfh"] : null,
        ];


        if ($employeeAdditionalInfo) {
            dd("sjsjs");
            $updateResult = $employeeAdditionalInfo->update($employeeData);
        } else {
            $insertResult = EmployeeAdditionalInfo::create($employeeData);
        }

        return $insertResult ? 'created' : 'updated';
    }

    public function createOrUpdateEmployeerocessAssignment($data)
    {
        $employeeId = $data['employeeId'];
        $dataArr = $data['arr'];

        EmployeeProcessAssignment::where('employeeId', $employeeId)->delete();

        foreach ($dataArr as $value) {
            EmployeeProcessAssignment::create([
                'employeeId' => $employeeId,
                'spanId' => $value['spanId'],
                'clientId' => $value['clientId'],
                'processId' => $value['processId'],
                'billableStatus' => $value['billableStatus'],
                'contribution' => $value['contribution'],
            ]);
        }

        return true;
    }
    public function createOrUpdateEmployeeIjp($data)
    {

        $insertResults = [];

        $employeeId = $data['employeeId'];
        $dataArr = $data['arr2'];

        EmployeeIjp::where('employeeId', $employeeId)->delete();

        foreach ($dataArr as $value) {
            $insertData = [
                'employeeId' => $employeeId,
                'ijpName' => $value['IjpName'],
                'dateOfApplication' => $value['IjpDateOfApplication'],
                'status' => $value['IjpStatus'],
                'dateOfClosure' => $value['IjpClosure'],
                'spanId' => $value['IjpSpan'],
                'processId' => $value['IjpProcess'],
                'clientId' => $value['IjpClient'],
                'billableStatus' => $value['IjpBillableStatus'],
            ];

            $employeeIjp = EmployeeIjp::create($insertData);

            if ($employeeIjp) {
                $insertResults[] = $employeeIjp->id;
            }
        }

        return true;
    }

    public function activeEmployeelist($page, $limit, $spanId, $designationId)
    {
        $filteredArray=[];
        $filteredArray1=[];
        if ($spanId) {
           
            $filteredArray = array_filter($spanId, function ($value) {
               return $value !== "";
           });
        }
        if ($designationId) {
            $filteredArray1 = array_filter($designationId, function ($value) {
                return $value !== "";
            });
        }

        $query = Employee::select(
            'employee_basic_info.id AS employee_id',
            'employee_basic_info.name AS name',
            'employee_basic_info.skid AS skid',
            'employee_basic_info.email AS email',
            'employee_basic_info.phone AS phone',
            'employee_basic_info.employeeImage AS employeeImage',
            'employee_additional_info.reportingId',
            'employee_additional_info.designationId',
            'designation.name AS designationName',
            'employee_proccess_assignment.spanId',
            'span.name AS spanName'
        )
            ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
            ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
            ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
            ->leftJoin('employee_proccess_assignment', 'employee_basic_info.id', '=', 'employee_proccess_assignment.employeeId')
            ->leftJoin('span', 'span.id', '=', 'employee_proccess_assignment.spanId')
            
            ->where('employee_additional_info.employmentStatus', 'Active');
           
       

            if (count($filteredArray) > 0 || count($filteredArray1) > 0) {
                $query->where(function ($query) use ($filteredArray, $filteredArray1) {
                    if (count($filteredArray) > 0) {
                        $query->whereIn('employee_proccess_assignment.spanId', $filteredArray);
                    }
                    if (count($filteredArray1) > 0) {
                        $query->orWhereIn('employee_additional_info.designationId', $filteredArray1);
                    }
                });
            }
            if ($limit && $page) {
                $employeeList = $query->paginate($limit, ['*'], 'page', $page);
            }else{
                $employeeList = $query->get();
            }

        $resultQuery = DB::table('employee_basic_info')
            ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
            ->leftJoin('employee_proccess_assignment', 'employee_basic_info.id', '=', 'employee_proccess_assignment.employeeId')
            ->selectRaw('COUNT(CASE WHEN employee_additional_info.employmentStatus = "active" THEN 1 END) AS active_count,
                        COUNT(CASE WHEN employee_proccess_assignment.billableStatus = "billable" THEN 1 END) AS billable_count,
                        COUNT(CASE WHEN employee_proccess_assignment.billableStatus = "buffer" THEN 1 END) AS buffer_count,
                        COUNT(CASE WHEN employee_additional_info.noticeStatus = "under notice" THEN 1 END) AS under_notice_count,
                        COUNT(CASE WHEN employee_additional_info.istrainee = 1 THEN 1 END) AS trainee_count,
                        COUNT(CASE WHEN employee_additional_info.serviceStatus = "probation" THEN 1 END) AS probation_count')
            ->where('employee_additional_info.employmentStatus', 'Active');
            if (count($filteredArray) > 0 || count($filteredArray1) > 0) {
                $resultQuery->where(function ($resultQuery) use ($filteredArray, $filteredArray1) {
                    if (count($filteredArray) > 0) {
                        $resultQuery->whereIn('employee_proccess_assignment.spanId', $filteredArray);
                    }
                    if (count($filteredArray1) > 0) {
                        $resultQuery->orWhereIn('employee_additional_info.designationId', $filteredArray1);
                    }
                });
            }
            $result = $resultQuery->first();

        $countArray = [
            'activeCount' => $result->active_count,
            'billableCount' => $result->billable_count,
            'bufferCount' => $result->buffer_count,
            'underNoticeCount' => $result->under_notice_count,
            'traineeCount' => $result->trainee_count,
            'probationCount' => $result->probation_count,
        ];

        $resultForDesignation = DB::table('designation')
        ->leftJoin('employee_additional_info', 'designation.id', '=', 'employee_additional_info.designationId')
        ->leftJoin('employee_basic_info', 'employee_additional_info.employeeId', '=', 'employee_basic_info.id')
        ->leftJoin('employee_proccess_assignment', 'employee_proccess_assignment.employeeId', '=', 'employee_basic_info.id') 
        ->select('designation.name AS designation_name', DB::raw('COUNT(employee_additional_info.employeeId) AS employee_count'))
        ->groupBy('designation.id', 'designation.name')
        ->when(count($filteredArray) > 0 || count($filteredArray1) > 0, function ($query) use ($filteredArray, $filteredArray1) {
            $query->where(function ($query) use ($filteredArray, $filteredArray1) {
                // if (count($filteredArray) > 0) {
                //     $query->whereIn('employee_proccess_assignment.spanId', $filteredArray);
                // }
                if (count($filteredArray1) > 0) {
                    $query->orWhereIn('employee_additional_info.designationId', $filteredArray1);
                }
            });
        })
        ->get();
        
    
    
    
    



        foreach ($resultForDesignation as $row) {
            $designationName[] = $row->designation_name;
            $employeeCount[] = $row->employee_count;

        }
        $resultForSpan = DB::table('span')
        ->leftJoin('employee_proccess_assignment', 'span.id', '=', 'employee_proccess_assignment.spanId')
        ->leftJoin('employee_basic_info', 'employee_proccess_assignment.employeeId', '=', 'employee_basic_info.id')
        ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
        ->select('span.name AS span_name', DB::raw('COUNT(employee_proccess_assignment.employeeId) AS employee_count'))
        ->groupBy('span.id', 'span.name')
        ->when(count($filteredArray) > 0 || count($filteredArray1) > 0, function ($query) use ($filteredArray, $filteredArray1) {
            $query->where(function ($query) use ($filteredArray, $filteredArray1) {
                if (count($filteredArray) > 0) {
                    $query->whereIn('employee_proccess_assignment.spanId', $filteredArray);
                }
                // if (count($filteredArray1) > 0) {
                //     $query->orWhereIn('employee_additional_info.designationId', $filteredArray1);
                // }
            });
        })
        ->get();
    
    

        foreach ($resultForSpan as $row) {
            $spanName[] = $row->span_name;
            $spanEmployeeCount[] = $row->employee_count;


        }


        return [
            $employeeList,
            $countArray,
            $designationName,
            $employeeCount,
            $spanName,
            $spanEmployeeCount
        ];
    }

    public function activeSearchEmployeelist($page, $limit, $search){
        $query = Employee::select(
            'employee_basic_info.id AS employee_id',
            'employee_basic_info.name AS name',
            'employee_basic_info.skid AS skid',
            'employee_basic_info.email AS email',
            'employee_basic_info.phone AS phone',
            'employee_basic_info.employeeImage AS employeeImage',
            'employee_additional_info.reportingId',
            'employee_additional_info.designationId',
            'designation.name AS designationName',
            'employee_proccess_assignment.spanId',
            'span.name AS spanName'
        )
            ->leftJoin('employee_additional_info', 'employee_basic_info.id', '=', 'employee_additional_info.employeeId')
            ->leftJoin('designation', 'employee_additional_info.designationId', '=', 'designation.id')
            ->leftJoin('designation AS reportingdesignation', 'employee_additional_info.reportingId', '=', 'reportingdesignation.id')
            ->leftJoin('employee_proccess_assignment', 'employee_basic_info.id', '=', 'employee_proccess_assignment.employeeId')
            ->leftJoin('span', 'span.id', '=', 'employee_proccess_assignment.spanId')
            ->where('employee_additional_info.employmentStatus', 'Active')
            ->where('employee_basic_info.name', 'like', '%' . $search . '%')
            ->orwhere('employee_basic_info.skid', 'like', '%' . $search . '%')
            ->orwhere('employee_basic_info.email', 'like', '%' . $search . '%')
            ->orwhere('employee_basic_info.phone', 'like', '%' . $search . '%')            
            ->paginate($limit, ['*'], 'page', $page);


            return $query;

    }

    public function dataLogOfActiveEmployee($date) {

        $dataLog = DB::table('active_employee_log')
        ->where('date', $date)
        ->first();

        return $dataLog;
    }
}