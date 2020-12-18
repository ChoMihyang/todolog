<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => '사용자1',
                'email' => 'user1@myhost.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => '사용자2',
                'email' => 'user2@myhost.com',
                'password' => bcrypt('secret'),
            ]
        ];
        // 두 명의 유저 정보를 포함한 배열을 DB 내 users 테이블에 저장
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
