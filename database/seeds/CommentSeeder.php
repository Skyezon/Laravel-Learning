<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            'title' => 'Starwars',
            'isi' => 'Perang Bintang',
            'angka' => 10
        ]);

        DB::table('comments')->insert([
            'title' => 'Jurassic park',
            'isi' => 'Dinosaurus',
            'angka' => 15
        ]);
        
        DB::table('comments')->insert([
            'title' => 'The Hobbit',
            'isi' => 'Prequel LOTR',
            'angka' => 20
        ]);


        factory(App\Models\Comment::class, 50)->create();
    }
}
