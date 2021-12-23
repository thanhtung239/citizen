<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Thanh Tung Hoang',
            'email' => 'admin@citizen.gov.vn',
            'password' => bcrypt('1')
        ]);

        DB::table('central_admins')->insert([
            'name' => 'Central Admin',
            'email' => 'central@citizen.gov.vn',
            'password' => bcrypt('1')
        ]);

        DB::table('province_admins')->insert([
            'name' => 'Province Admin',
            'email' => 'thaibinh@citizen.gov.vn',
            'employee_number' => '22',
            'password' => bcrypt('1')
        ]);

        DB::table('district_admins')->insert([
            'name' => 'District Admin',
            'email' => 'kienxuong@citizen.gov.vn',
            'employee_number' => '2207',
            'password' => bcrypt('1')
        ]);

        DB::table('ward_admins')->insert([
            'name' => 'Ward Admin',
            'email' => 'thanhne@citizen.gov.vn',
            'employee_number' => '220701',
            'password' => bcrypt('1')
        ]);
    }
}
