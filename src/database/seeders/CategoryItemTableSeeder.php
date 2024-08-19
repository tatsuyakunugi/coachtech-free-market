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
    }
}
