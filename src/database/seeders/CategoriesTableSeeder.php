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
            'name' => 'メンズ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'レディース',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ベビー・キッズ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '洋服',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '和服・着物',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '浴衣',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'スーツ・フォーマル',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '靴',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'カバン',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'アクセサリー・小物',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ゲーム・ゲーム機',
        ];
        $param = [
            'name' => 'おもちゃ・グッズ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ホビー',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '楽器',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '音響機材',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'アート',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'チケット',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '本',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '雑誌',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '小説',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '漫画',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ＣＤ・レコード',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ＤＶＤ・ブルーレイ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'スマホ・タブレット',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'パソコン・周辺機器',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'テレビ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'オーディオ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'カメラ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '生活家電・空調',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'スポーツ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'アウトドア・釣り',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '旅行用品',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'コスメ・美容',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ダイエット・健康',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '食品',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '飲料',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'アルコール類',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'キッチン・日用品',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '家具・インテリア',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ペット用品',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ＤＩＹ・工具',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'フラワー・ガーデニング',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ハンドメイド・手芸',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '車',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'バイク',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '自転車',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'その他',
        ];
        DB::table('categories')->insert($param);
    }
}
