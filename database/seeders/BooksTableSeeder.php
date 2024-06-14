<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'To Kill a Mockingbird',
                'description' => "A classic novel that deals with the issues of racial injustice and the moral courage to stand up for what's right.",
                'isbn' => '978-0446310789',
                'published_at' => '1960-07-11',
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Great Gatsby',
                'description' => "A captivating story about the lavish and tragic life of a mysterious millionaire in the 1920s.",
                'isbn' => '978-0743273565',
                'published_at' => '1925-04-10',
                'price' => 7.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => "A classic novel that explores the themes of love, marriage, and societal expectations in 19th-century England.",
                'isbn' => '978-0141439513',
                'published_at' => '1813-01-28',
                'price' => 6.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Hunger Games',
                'description' => "A gripping dystopian novel about a young girl's fight for survival in a future society.",
                'isbn' => '978-0439023481',
                'published_at' => '2008-09-14',
                'price' => 12.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Da Vinci Code',
                'description' => "A thrilling mystery novel that explores the hidden secrets of the Catholic Church and the Holy Grail.",
                'isbn' => '978-0385504201',
                'published_at' => '2003-03-18',
                'price' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
