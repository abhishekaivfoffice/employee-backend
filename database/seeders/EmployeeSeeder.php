<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::insert([

            [
                'employee_id' => 'EMP001',
                'name' => 'Rahul Kumar',
                'email' => 'rahul@gmail.com',
                'phone' => '9876543210',
                'designation' => 'Flutter Developer',
                'department' => 'IT',
                'location' => 'Chennai',
                'salary' => 75000,
                'blood_group' => 'O+',
                'profile_image' => 'https://i.pravatar.cc/300?img=1',
                'joining_date' => '2018-01-10',
                'employment_type' => 'full_time',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'employee_id' => 'EMP002',
                'name' => 'Arjun Nair',
                'email' => 'arjun@gmail.com',
                'phone' => '9876543211',
                'designation' => 'UI UX Designer',
                'department' => 'Design',
                'location' => 'Bangalore',
                'salary' => 68000,
                'blood_group' => 'A+',
                'profile_image' => 'https://i.pravatar.cc/300?img=2',
                'joining_date' => '2016-03-14',
                'employment_type' => 'full_time',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}