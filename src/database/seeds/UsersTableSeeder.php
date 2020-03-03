<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'user01',
                'password' => Hash::make('1111'),
                'screen_name' => '01沢渡',
                'profile_stmt' => '運命の出会いに間違いないわ',
                'icon_image' => 'user01.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user02',
                'password' => Hash::make('2222'),
                'screen_name' => '<br>02冬坂</br>',
                'profile_stmt' => '<del>集中するのよ</del>',
                'icon_image' => 'user02.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user03',
                'password' => Hash::make('3333'),
                'screen_name' => '03南',
                'profile_stmt' => 'しっかりしないと、頑張れ私！',
                'icon_image' => 'user03.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user04',
                'password' => Hash::make('4444'),
                'screen_name' => '04鷹宮',
                'profile_stmt' => 'ケンカなら負けねぇんだが',
                'icon_image' => 'user04.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user05',
                'password' => Hash::make('5555'),
                'screen_name' => '05如月',
                'profile_stmt' => 'ピンチはチャンス！',
                'icon_image' => 'user05.jpg',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
    }
}
