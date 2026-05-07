<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all()->map(function ($employee) {

            $experience =
                Carbon::parse($employee->joining_date)->age;

            return [
    'id' => $employee->id,
    'employee_id' => $employee->employee_id,
    'name' => $employee->name,
    'email' => $employee->email,
    'phone' => $employee->phone,
    'gender' => $employee->gender,
    'dob' => $employee->dob,
    'designation' => $employee->designation,
    'department' => $employee->department,
    'location' => $employee->location,
    'address' => $employee->address,
    'salary' => $employee->salary,
    'blood_group' => $employee->blood_group,
    'emergency_contact' =>
        $employee->emergency_contact,
    'profile_image' => $employee->profile_image,
    'joining_date' => $employee->joining_date,
    'employment_type' =>
        $employee->employment_type,
    'status' => $employee->status,
    'experience' => $experience,
    'show_badge' =>
        $employee->status == 'active' &&
        $experience >= 5
];
        });

        return response()->json($employees);
    }
}