<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('conditions')->insert([
            [
                'id' => 1,
                'name' => '平屋',
            ],
            [
                'id' => 2,
                'name' => '２・３階建て',
            ],
            [
                'id' => 3,
                'name' => '～40坪台',
            ],
            [
                'di' => 4,
                'name' => '50～60坪台',
            ],
            [
                'id' => 5,
                'name' => '70～坪以上',
            ],
        ]);
    }
}
