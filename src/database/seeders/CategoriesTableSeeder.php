<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '洋服',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'メンズ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'レディース',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'トップス',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ジャケット・アウター',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'パンツ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'スカート',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ワンピース',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '靴',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'バッグ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '時計',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '帽子',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'アクセサリー',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'スーツ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ルームウェア・パジャマ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '下着・アンダーウェア',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'レッグウェア',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '水着・ラッシュガード',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '学生服',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '着物・浴衣',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ヘアアクセサリー',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ウィッグ・エクステ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'マタニティー',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ベビー・キッズ',
        ];
        DB::table('categories')->insert($param);
    }
}
