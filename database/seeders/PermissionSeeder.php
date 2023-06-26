<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permission Hospital
        Permission::create(['name' => 'View_Hospital']);
        Permission::create(['name' => 'create_Hospital']);
        Permission::create(['name' => 'Store_Hospital']);
        Permission::create(['name' => 'Edit_Hospital']);
        Permission::create(['name' => 'Delete_Hospital']);
        
        // Permission for Doctor
        Permission::create(['name' => 'View_Doctor']);
        Permission::create(['name' => 'create_Doctor']);
        Permission::create(['name' => 'Store_Doctor']);
        Permission::create(['name' => 'Edit_Doctor']);
        Permission::create(['name' => 'Delete_Doctor']);
        
        // Permission for Appointment
        Permission::create(['name' => 'View_Appointment']);
        Permission::create(['name' => 'create_Appointment']);
        Permission::create(['name' => 'Store_Appointment']);
        Permission::create(['name' => 'Edit_Appointment']);
        Permission::create(['name' => 'Delete_Appointment']);

        // Permission for Operation
        Permission::create(['name' => 'View_Operation']);
        Permission::create(['name' => 'create_Operation']);
        Permission::create(['name' => 'Store_Operation']);
        Permission::create(['name' => 'Edit_Operation']);
        Permission::create(['name' => 'Delete_Operation']);

        // Permission for Patient
        Permission::create(['name' => 'View_Patient']);
        Permission::create(['name' => 'create_Patient']);
        Permission::create(['name' => 'Store_Patient']);
        Permission::create(['name' => 'Edit_Patient']);
        Permission::create(['name' => 'Delete_Patient']);

        // Permission for Payment
        Permission::create(['name' => 'View_Payment']);
        Permission::create(['name' => 'create_Payment']);
        Permission::create(['name' => 'Store_Payment']);
        Permission::create(['name' => 'Edit_Payment']);
        Permission::create(['name' => 'Delete_Payment']);

        // Permission for Receipt
        Permission::create(['name' => 'View_Receipt']);
        Permission::create(['name' => 'create_Receipt']);
        Permission::create(['name' => 'Store_Receipt']);
        Permission::create(['name' => 'Edit_Receipt']);
        Permission::create(['name' => 'Delete_Receipt']);

        // Permission for Workday
        Permission::create(['name' => 'View_Workday']);
        Permission::create(['name' => 'create_Workday']);
        Permission::create(['name' => 'Store_Workday']);
        Permission::create(['name' => 'Edit_Workday']);
        Permission::create(['name' => 'Delete_Workday']);

        //تعديل
        //Permission for User
        Permission::create(['name' => 'View_User']);
        Permission::create(['name' => 'create_User']);
        Permission::create(['name' => 'Store_User']);
        Permission::create(['name' => 'Edit_User']);
        Permission::create(['name' => 'Delete_User']);

        //Permission for Role
        Permission::create(['name' => 'View_Role']);
        Permission::create(['name' => 'create_Role']);
        Permission::create(['name' => 'Store_Role']);
        Permission::create(['name' => 'Edit_Role']);
        Permission::create(['name' => 'Delete_Role']);

        //Permission for Permission
        Permission::create(['name' => 'View_Permission']);
        Permission::create(['name' => 'create_Permission']);
        Permission::create(['name' => 'Store_Permission']);
        Permission::create(['name' => 'Edit_Permission']);
        Permission::create(['name' => 'Delete_Permission']);
    }
}