<?php


use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role
        Role::create(["name"=>"ผู้ใช้ทั่วไป"]);
        Role::create(["name"=>"ผู้จัดงาน"]);
        Role::create(["name"=>"ผู้จองสถานที่"]);
    }
}
