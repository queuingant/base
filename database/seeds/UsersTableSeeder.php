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
    }
}
