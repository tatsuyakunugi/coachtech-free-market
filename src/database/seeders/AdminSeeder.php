<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'login_id' => 'admin0001',
            'password' => Hash::make('adminpass'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('admins')->insert($param);
    }
}
