<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Test Post 1',
            'image_name' => 'test_image.jpg',
            'description' => 'This is my first test post! La-dee-frickin-da!',
            'created_at' => new Carbon(),
            'updated_at' => new Carbon()
        ]);
    }
}
