<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'email' => 'taro@example.co.jp',
            'password' => Hash::make('taro0001'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'jiro@example.co.jp',
            'password' => Hash::make('jiro0002'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'saburo@example.co.jp',
            'password' => Hash::make('saburo0003'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'shiro@example.co.jp',
            'password' => Hash::make('shiro0004'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'goro@example.co.jp',
            'password' => Hash::make('goro0005'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'rokuro@example.co.jp',
            'password' => Hash::make('rokuro0006'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'nanaro@example.co.jp',
            'password' => Hash::make('nanaro0007'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'hachiro@example.co.jp',
            'password' => Hash::make('hachiro0008'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'kyuro@example.co.jp',
            'password' => Hash::make('kyuro0009'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
        $param = [
            'email' => 'juro@example.co.jp',
            'password' => Hash::make('juro0010'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('users')->insert($param);
    }
}
