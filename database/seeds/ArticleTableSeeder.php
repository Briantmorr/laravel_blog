<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Mscategory;
use App\Models\Msstatus;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Laravel Dusk',
            'body' => 'Lorem Ipsum, lots of stuff',
            'author_id' => 1,
            'category_id' => Mscategory::FRONT_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);

        Article::create([
            'title' => 'Laravel Telescope',
            'body' => 'Lorem Ipsum, lots of stuff',
            'author_id' => 1,
            'category_id' => Mscategory::BACK_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);

        Article::create([
            'title' => 'Laravel Redis',
            'body' => 'Lorem Ipsum, lots of stuff',
            'author_id' => 2,
            'category_id' => Mscategory::BACK_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);
    }
}
