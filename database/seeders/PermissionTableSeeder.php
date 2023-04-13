<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',

            
            'userdoctorhistory-list',
            'userdoctorhistory-create',
            'userdoctorhistory-edit',
            'userdoctorhistory-delete',

            'usermedicinehistory-list',
            'usermedicinehistory-create',
            'usermedicinehistory-edit',
            'usermedicinehistory-delete',

            'package-list',
            'package-create',
            'package-edit',
            'package-delete',

            'packagedetail-list',
            'packagedetail-create',
            'packagedetail-edit',
            'packagedetail-delete',

            'testcenter-list',
            'testcenter-create',
            'testcenter-edit',
            'testcenter-delete',

            'doctormaster-list',
            'doctormaster-create',
            'doctormaster-edit',
            'doctormaster-delete',

            'userpackage-list',
            'userpackage-create',
            'userpackage-edit',
            'userpackage-delete',

            'userlabreport-list',
            'userlabreport-create',
            'userlabreport-edit',
            'userlabreport-delete',

            'usertestcenter-list',
            'usertestcenter-create',
            'usertestcenter-edit',
            'usertestcenter-delete',

            'usermaster-list',
            'usermaster-create',
            'usermaster-edit',
            'usermaster-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
