<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ==========ここから追加する==========
        DB::table('contacts')->insert([
            [
                'id' => 1,
                'conditions_id' => 1,
                'designs_id' => 1,
                'email' => 'test@mail.com',
                'tel_number' => '090-1234-5678',
                'fax_number' => '1234-4567-7890',
                'zipcode' => 1600001,
                'pref' => '東京都',
                'city' => '新宿区',
                'street' => '片町',
                'surname' => 'ユーザー',
                'name' => '１',
                'memo' => '営業部への伝言',
                'private_memo' => 'マーケティング部のメモ'
            ],
            [
                'id' => 2,
                'conditions_id' => 2,
                'designs_id' => 2,
                'email' => 'test@mail.com',
                'tel_number' => '090-1234-5678',
                'fax_number' => '1234-4567-7890',
                'zipcode' => 1600001,
                'pref' => '東京都',
                'city' => '新宿区',
                'street' => '片町',
                'surname' => 'ユーザー',
                'name' => '２',
                'memo' => '営業部への伝言',
                'private_memo' => 'マーケティング部のメモ'
            ],
            [
                'id' => 3,
                'conditions_id' => 3,
                'designs_id' => 3,
                'email' => 'test@mail.com',
                'tel_number' => '090-1234-5678',
                'fax_number' => '1234-4567-7890',
                'zipcode' => 1600001,
                'pref' => '東京都',
                'city' => '新宿区',
                'street' => '片町',
                'surname' => 'ユーザー',
                'name' => '３',
                'memo' => '営業部への伝言',
                'private_memo' => 'マーケティング部のメモ'
            ],
            [
                'id' => 4,
                'conditions_id' => 4,
                'designs_id' => 4,
                'email' => 'test@mail.com',
                'tel_number' => '090-1234-5678',
                'fax_number' => '1234-4567-7890',
                'zipcode' => 1600001,
                'pref' => '東京都',
                'city' => '新宿区',
                'street' => '片町',
                'surname' => 'ユーザー',
                'name' => '４',
                'memo' => '営業部への伝言',
                'private_memo' => 'マーケティング部のメモ'
            ],
            [
                'id' => 5,
                'conditions_id' => 5,
                'designs_id' => 5,
                'email' => 'test@mail.com',
                'tel_number' => '090-1234-5678',
                'fax_number' => '1234-4567-7890',
                'zipcode' => 1600001,
                'pref' => '東京都',
                'city' => '新宿区',
                'street' => '片町',
                'surname' => 'ユーザー',
                'name' => '５',
                'memo' => '営業部への伝言',
                'private_memo' => 'マーケティング部のメモ'
            ],
        ]);
        // ==========ここまで追加する==========
    }
}
