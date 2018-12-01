<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\News::class, 25)->create();

        // DB::table('news')->insert([
        //     'title' => str_random(20),
        //     'content' => str_random(1000)
        //  ]);
    }
}