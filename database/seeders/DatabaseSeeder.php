<?php

namespace Database\Seeders;

use App\Models\Learner;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $roles = ['admin', 'employee', 'learner'];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $admin = User::firstOrCreate(
            ['email' => 'admin@skilltrack.test'],
            [
                'name' => 'Admin User',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole('admin');

        $employee = User::firstOrCreate(
            ['email' => 'employee@skilltrack.test'],
            [
                'name' => 'Employee User',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );
        $employee->assignRole('employee');

        $learnerUser = User::firstOrCreate(
            ['email' => 'learner@skilltrack.test'],
            [
                'name' => 'Learner User',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );
        $learnerUser->assignRole('learner');

        $learners = [
            ['fname' => 'Ayaan', 'mname' => 'R.', 'lname' => 'Khan', 'email' => 'ayaan.khan@skilltrack.test', 'grade_level' => 'Grade 10', 'section' => 'A', 'qr_code' => 'ST-LEARNER-1001'],
            ['fname' => 'Sara', 'mname' => 'M.', 'lname' => 'Ahmed', 'email' => 'sara.ahmed@skilltrack.test', 'grade_level' => 'Grade 11', 'section' => 'B', 'qr_code' => 'ST-LEARNER-1002'],
            ['fname' => 'Hamza', 'mname' => 'S.', 'lname' => 'Ali', 'email' => 'hamza.ali@skilltrack.test', 'grade_level' => 'Grade 12', 'section' => 'A', 'qr_code' => 'ST-LEARNER-1003'],
        ];

        foreach ($learners as $learner) {
            Learner::firstOrCreate(['email' => $learner['email']], $learner);
        }
    }
}
