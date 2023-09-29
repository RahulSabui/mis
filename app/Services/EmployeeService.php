<?php
namespace App\Services;

use App\Models\Employee;
use App\Models\EmployeeAdditionalInfo;
use App\Models\EmployeeAddress;
use App\Models\EmployeeIjp;
use App\Models\EmployeeProcessAssignment;


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
            'employeeImage' => isset($data["image"]) ? json_encode($data["image"]) : null,
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

        $permanentaddress = json_encode($permanentAddress);
        $residentialaddress = json_encode($residentialAddress);


            $existingRecord = EmployeeAddress::where('employeeId', $employeeId)->lockForUpdate()->first();

            if ($existingRecord) {
                $existingRecord->update([
                    'permanentAddress' => $permanentaddress,
                    'residentialAddress' => $residentialaddress,
                    'isSameAsPermanentAddress' => $isSameAsPermanentAddress,
                ]);
            } else {
                EmployeeAddress::create([
                    'permanentAddress' => $permanentaddress,
                    'residentialAddress' => $residentialaddress,
                    'isSameAsPermanentAddress' => $isSameAsPermanentAddress,
                    'employeeId' => $employeeId,
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

        // First, delete existing records for the employee
        EmployeeProcessAssignment::where('employeeId', $employeeId)->delete();

        // Loop through the data and insert new records
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

        // First, delete existing records for the employee
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

            // Use Eloquent to create a new EmployeeIjp record
            $employeeIjp = EmployeeIjp::create($insertData);

            if ($employeeIjp) {
                $insertResults[] = $employeeIjp->id;
            }
        }

        return true;
    }
}