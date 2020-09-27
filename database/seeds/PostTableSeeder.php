<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];

        for ($i = 1; $i < 10; $i++) {
            $inserts[] = [
                'slug' =>  sprintf('タイトル%dです', $i),
                'title' => sprintf('タイトル%dです', $i),
                'content' => sprintf('本文%dです', $i),
            ];
        }

        DB::table('posts')->insert($inserts);
    }
}
