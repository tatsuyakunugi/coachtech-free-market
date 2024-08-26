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
        $param = [
            'user_id' => 1,
            'condition_id' => 3,
            'image_path' => 'public/items/caO6e8E7wXByaHYWyzMhSZyaXa7dYSdo1Jr2ch8w.jpg',
            'name' => 'フランス軍フィールドジャケット',
            'description' => 'カラーはオリーブ。軍物のデッドストックです。',
            'price' => 7000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 2,
            'condition_id' => 2,
            'image_path' => 'public/items/0kz6ExA8Yx1fCe8nTqgOj4XQf8MFT1Q0iHZNCOES.jpg',
            'name' => '簡易コンロ',
            'description' => '簡易コンロなります。使用回数は数回なので状態はいいと思います。',
            'price' => 3000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 2,
            'condition_id' => 2,
            'image_path' => 'public/items/lcI3dok4n6LEPdXg8LGU9BBEE4xVSHd03K65lyaW.jpg',
            'name' => 'キャンプ用バーナー',
            'description' => '持ち運び可能なバーナーです。キャンプのお供にどうぞ。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 3,
            'condition_id' => 2,
            'image_path' => 'public/items/CLO5y1Xjp85H5jyh7s5koxuSSo8R8vM1yxnlewwn.jpg',
            'name' => 'アコースティックギター',
            'description' => 'Gibson製アコースティックギター。ギターケース付き。',
            'price' => 10000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 3,
            'condition_id' => 3,
            'image_path' => 'public/items/3jlZC17lckFYeiIPwD0GQubZrXpsJAYQaeYn3lnM.jpg',
            'name' => 'エレキベース',
            'description' => '長年使用していたため使用感があります。メンテナンスは定期的にしていたので使用は問題ありません。',
            'price' => 30000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 4,
            'condition_id' => 4,
            'image_path' => 'public/items/vNappum6uWzjWSRoDrmt2Ck4SBLKdqqofOanmZmT.jpg',
            'name' => 'ルースターズ1stアルバム',
            'description' => 'ルースターズ1stアルバムのレコードです。経年による劣化が目立ちますが、もしよろしければ是非。',
            'price' => 3000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 4,
            'condition_id' => 1,
            'image_path' => 'public/items/WB3d38Xvb8UoXHUXQTvQI4wRN01oylkrYO8U4x1z.jpg',
            'name' => 'ギターアンプ',
            'description' => 'VOX製ギターアンプ。使用回数は2回ほどなのでほぼ新品です。',
            'price' => 20000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 5,
            'condition_id' => 3,
            'image_path' => 'public/items/qvTGzz6sRv75hWveEKGOfO0I1xg47WIdv6N4EmHi.jpg',
            'name' => 'ハイスコアガール全巻セット',
            'description' => '作者：押切蓮介。全巻収納のBOXセット。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 5,
            'condition_id' => 3,
            'image_path' => 'public/items/0mwK9iWVLacp2YXxNu3IXF8AIHf2CeJ8HhvlzsJj.jpg',
            'name' => 'ユリシーズ全巻セット',
            'description' => '作者：ジェイムス・ジョイス。世界的名作と名高い長編小説、ユリシーズの全巻セットです。',
            'price' => 3000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 6,
            'condition_id' => 2,
            'image_path' => 'public/items/35KQ5McqIZl1MmQlxGdB7CVjOXGRjwUqoII4yste.jpg',
            'name' => 'クォーツ式腕時計',
            'description' => 'UNIVASAL PRODUCTSで販売されていた腕時計。クォーツ式。使用感は少ないです。出品前に電池交換をしてあります。',
            'price' => 15000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 6,
            'condition_id' => 3,
            'image_path' => 'public/items/eSDzhXN4FEHdTtAavXwFMNuMJ1yZC6keMqmhpINq.jpg',
            'name' => 'リュック',
            'description' => '本体は革製。男女問わずどちらでご利用できます。',
            'price' => 10000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 7,
            'condition_id' => 2,
            'image_path' => 'public/items/OOnM0nMkO9Z1r3DgWL7wLBzA7yReV5Xl4YyUFjnj.jpg',
            'name' => '94年ワールドカップイタリア代表ユニフォーム',
            'description' => 'ロベルト・バッジョのネーム入りユニフォームのレプリカ品です。保存状態は良好ですが、購入から年月が経っているのでその点はご了承ください。',
            'price' => 12000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 7,
            'condition_id' => 3,
            'image_path' => 'public/items/BKTUYdz5l5hAJc9hF51toMSDKzWRunGiZZzC6WVD.jpg',
            'name' => 'ブランデー',
            'description' => 'アルマニャック。木箱付きでお譲りします。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 8,
            'condition_id' => 1,
            'image_path' => 'public/items/rJr9q2db4XNgURF8pkO0gTWiiRldnfhg8CKB9Y3t.jpg',
            'name' => 'スポーツシューズ',
            'description' => 'NIKE製。サイズは23㎝。試し履き1回のみの(ほぼ)新品です。',
            'price' => 10000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 8,
            'condition_id' => 1,
            'image_path' => 'public/items/20msk0hqKSilQ4c2ikK7A735msFquBMxnhvQ2Jmr.jpg',
            'name' => 'アロマオイル',
            'description' => '生活の木で購入したアロマオイル。未開封の新品です。',
            'price' => 2000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 9,
            'condition_id' => 4,
            'image_path' => 'public/items/vzxOm566UrqM3fIHCSwZbzJb3nvOkIEcClVL8LOX.jpg',
            'name' => 'ファミコン本体',
            'description' => 'ファミコン本体。修理に出し使用に問題はありませんが、かなり古い機種なのでその点だけはご了承ください。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 9,
            'condition_id' => 2,
            'image_path' => 'public/items/xjpcbjV3ldhiC0mqsWEE7N9EjrfXEXZfRQRmWumq.jpg',
            'name' => 'カメラ',
            'description' => '使用回数は少なく状態は良好です。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 10,
            'condition_id' => 3,
            'image_path' => 'public/items/16WefBPoiwmwnoVofIDoNoTd00YIoStMU5bLosfJ.jpg',
            'name' => '電動ドリル',
            'description' => '古い型ですがメンテナンス見してあるので使用に問題ありません。DIY好きな方にお譲りします。',
            'price' => 13000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 10,
            'condition_id' => 2,
            'image_path' => 'public/items/zWDKnE5Pk4vhOPLJkZi9ixkSMwR18BxZwx8RTl6j.jpg',
            'name' => 'ハンガーラック',
            'description' => '横60㎝・奥行45㎝・高さ120㎝(キャスター込み)のラックです。使用感は少ないです。',
            'price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('items')->insert($param);
    }
}
