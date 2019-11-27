<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = factory(\App\Models\User::class)->times(1000)->make()->each(function ($user){

        });

        \App\Models\User::insert($statuses->toArray());

        $user = \App\Models\User::find(1);
        $user->email = '1332726782@qq.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
