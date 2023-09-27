<?php
namespace App\Services;

use App\Models\Employee;


class EmployeeService
{
    public function createOrUpdateEmployee($data)
    {
        $id = isset($data['id']) ? intval($data['id']) : null;

        $employeeData = [
            'userId' => isset($data["userId"]) ? $data["userId"] : 1,
            'name' => isset($data["name"]) ? $data["name"] : null,
            'skid' => isset($data["skid"]) ? $data["skid"] : null,
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
}