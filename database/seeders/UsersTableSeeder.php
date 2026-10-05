<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'over_name' => '朝美',
                'under_name' => '絢',
                'over_name_kana' => 'アサミ',
                'under_name_kana' => 'ジュン',
                'mail_address' => 'asami@gmail.com',
                'sex' => '1',
                'birth_day' => '2000-11-06',
                'role' => '4',
                'password' => Hash::make('asami000'),
            ],
            [
                'over_name' => '侑輝',
                'under_name' => '大弥',
                'over_name_kana' => 'ユキ',
                'under_name_kana' => 'ダイヤ',
                'mail_address' => 'daiya@gmail.com',
                'sex' => '1',
                'birth_day' => '2000-07-02',
                'role' => '4',
                'password' => Hash::make('daiya000'),
            ],
            [
                'over_name' => '星空',
                'under_name' => '美咲',
                'over_name_kana' => 'ホシゾラ',
                'under_name_kana' => 'ミサキ',
                'mail_address' => 'misaki@gmail.com',
                'sex' => '2',
                'birth_day' => '2000-03-25',
                'role' => '1',
                'password' => Hash::make('misaki000'),
            ],

        ]);

    }
}
