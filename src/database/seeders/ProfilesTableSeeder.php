<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
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
            'image_path' => '',
            'name' => 'test太郎',
            'post_code' => '111-1111',
            'address' => '東京都新宿区西新宿1-1-1',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 2,
            'image_path' => '',
            'name' => 'test次郎',
            'post_code' => '222-2222',
            'address' => '北海道札幌市中央区2-2-2',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 3,
            'image_path' => '',
            'name' => 'test三郎',
            'post_code' => '333-3333',
            'address' => '宮城県仙台市青葉区3-3-3',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 4,
            'image_path' => '',
            'name' => 'test四郎',
            'post_code' => '444-4444',
            'address' => '新潟県新潟市中央区4-4-4',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 5,
            'image_path' => '',
            'name' => 'test五郎',
            'post_code' => '555-5555',
            'address' => '神奈川県横浜市港南区5-5-5',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 6,
            'image_path' => '',
            'name' => 'test六郎',
            'post_code' => '666-6666',
            'address' => '愛知県名古屋市中区6-6-6',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 7,
            'image_path' => '',
            'name' => 'test七郎',
            'post_code' => '777-7777',
            'address' => '大阪府大阪市中央区7-7-7',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 8,
            'image_path' => '',
            'name' => 'test八郎',
            'post_code' => '888-8888',
            'address' => '広島県広島市中区8-8-8',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 9,
            'image_path' => '',
            'name' => 'test九郎',
            'post_code' => '999-9999',
            'address' => '福岡県福岡市博多区9-9-9',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
        $param = [
            'user_id' => 10,
            'image_path' => '',
            'name' => 'test十郎',
            'post_code' => '100-1010',
            'address' => '沖縄県那覇市曙10-10-10',
            'building' => '',
        ];
        DB::table('profiles')->insert($param);
    }
}
