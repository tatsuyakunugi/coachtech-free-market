<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'condition_id' => 3,
            'image_path' => 'public/items/0lpWQeNB0v3WzKnJBaz2HCiJ67iAdjZrTGwlX56o.jpg',
            'name' => 'ストライプシャツ',
            'description' => 'カラーはベージュ。サイズ表記はSですが大き目の作りになっています。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
    }
}
