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
        DB::table('posts')->insert([
            'title' => 'Starwars',
            'description' => 'Perang Bintang',
            'author' => 'J.J Abrams'
        ]);

        DB::table('posts')->insert([
            'title' => 'Jurassic park',
            'description' => 'Dinosaurus',
            'author' => 'Steven Spielberg'
        ]);
        
        DB::table('posts')->insert([
            'title' => 'The Hobbit',
            'description' => 'Prequel LOTR',
            'author' => 'Jk antony'
        ]);

        factory(App\Models\Post::class, 50)->create();
    }
}
