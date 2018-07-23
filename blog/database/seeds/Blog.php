<?php

use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => str_random(10),
            'body' => str_random(50),
            'published_at' => \Carbon\Carbon::now()
        ]);
    }
}
