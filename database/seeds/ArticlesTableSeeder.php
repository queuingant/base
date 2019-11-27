<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = factory(\App\Models\Article::class)->times(10000)->make()->each(function ($user){

        });

        \App\Models\Article::insert($statuses->toArray());
    }
}
