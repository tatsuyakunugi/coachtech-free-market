<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'item_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 1,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 2,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 2,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 3,
            'category_id' => 37,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 4,
            'category_id' => 30,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 5,
            'category_id' => 13,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 6,
            'category_id' => 13,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 7,
            'category_id' => 21,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 8,
            'category_id' => 14,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 9,
            'category_id' => 17,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 9,
            'category_id' => 20,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 10,
            'category_id' => 17,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 10,
            'category_id' => 19,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 11,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 11,
            'category_id' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 12,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 12,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 12,
            'category_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 13,
            'category_id' => 29,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 14,
            'category_id' => 35,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 14,
            'category_id' => 36,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 15,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 15,
            'category_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 16,
            'category_id' => 32,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 17,
            'category_id' => 11,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 18,
            'category_id' => 27,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 19,
            'category_id' => 40,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
        $param = [
            'item_id' => 20,
            'category_id' => 38,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('category_item')->insert($param);
    }
}
