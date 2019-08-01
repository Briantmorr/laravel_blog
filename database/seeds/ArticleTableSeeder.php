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
            'body' => 'Laravel Dusk provides an expressive, easy-to-use browser automation and testing API.
                        By default, Dusk does not require you to install JDK or Selenium on your machine.
                        Instead, Dusk uses a standalone ChromeDriver installation.
                        However, you are free to utilize any other Selenium compatible driver you wish.',
            'author_id' => 1,
            'category_id' => Mscategory::FRONT_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);

        Article::create([
            'title' => 'Laravel Telescope',
            'body' => 'Laravel Telescope is an elegant debug assistant for the Laravel framework.
                        Telescope provides insight into the requests coming into your application, exceptions, 
                        log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps and more.
                        Telescope makes a wonderful companion to your local Laravel development environment',
            'author_id' => 1,
            'category_id' => Mscategory::BACK_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);

        Article::create([
            'title' => 'Laravel Redis',
            'body' => 'Redis is an open source, advanced key-value store.
                        It is often referred to as a data structure server since keys can contain strings, hashes, lists, sets, and sorted sets. 
                        ou may interact with Redis by calling various methods on the Redis facade.
                        The Redis facade supports dynamic methods, meaning you may call any Redis command on the facade and the command will be passed directly to Redis.
                        In this example, we will call the Redis GET command by calling the get method on the Redis facade:',
            'author_id' => 2,
            'category_id' => Mscategory::BACK_END,
            'status_id' => Msstatus::PUBLISHED,
        ]);
    }
}
