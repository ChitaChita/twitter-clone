<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->truncate();

        for ($i = 1; $i <= 5; $i++) {
          DB::table('tweets')->insert([
            'user_id'    => $i,
            'message' => 'これはテスト投稿' .$i,
            'created_at' => now(),
            'updated_at' => now()
          ]);
        }
    }
}
