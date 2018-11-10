<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create_role=new Permission();
        $create_role->name="Role-create";
        $create_role->Description="This is Role Create Permission";
        $create_role->save();



        $role_edit=new Permission();
        $role_edit->name="Role-Update";
        $role_edit->Description="This is Role Edit Permission";
        $role_edit->save();



        $role_read=new Permission();
        $role_read->name="Role-Read";
        $role_read->Description="This is Role Permission";
        $role_read->save();



        $role_delete=new Permission();
        $role_delete->name="Role-Delete";
        $role_delete->Description="This is Delete Role Permission";
        $role_delete->save();
    }
}
