<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期ユーザー(管理者)
        $users = [
            [
                'id' => 'root',
                'password' => 'root',
                'user_name' => '管理',
            ]
        ];

        //登録
        foreach ($users as $user){
            \App\User::create($user);
        }
    }
}
