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
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 1,
        ]);
        
        DB::table('posts')->insert([
            'title' => 'エラー文',
            'body' => '読めるようになれば怖くない',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'category_id' => 1,
    ]);
    }
}
