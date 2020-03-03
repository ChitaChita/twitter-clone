<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relations')->insert(
            [
                'user_id' => 1,
                'follow_id' => 2
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 1,
                'follow_id' => 3
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 1,
                'follow_id' => 4
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 1,
                'follow_id' => 5
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 2,
                'follow_id' => 1
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 2,
                'follow_id' => 3
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 3,
                'follow_id' => 4
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 3,
                'follow_id' => 5
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 4,
                'follow_id' => 3
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 5,
                'follow_id' => 2
            ]
        );
        DB::table('relations')->insert(
            [
                'user_id' => 5,
                'follow_id' => 4
            ]
        );
    }
}
