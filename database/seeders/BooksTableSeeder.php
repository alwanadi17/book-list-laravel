<?php

namespace Database\Seeders;

use App\Models\Books;
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
        $books = [
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'genre' => 'Fantasy',
                'author_id' => 1,
                'release' => '1997-06-26',
                'description' => 'This is the first book in the Harry Potter series.',
                'isbn' => '0747532747',
            ],
            [
                'title' => 'The Lord of the Rings',
                'genre' => 'Fantasy',
                'author_id' => 2,
                'release' => '1954-07-29',
                'description' => 'This is the first book in the Lord of the Rings series.',
                'isbn' => '0261103601',
            ],
            [
                'title' => 'A Game of Thrones',
                'genre' => 'Fantasy',
                'author_id' => 3,
                'release' => '1996-08-01',
                'description' => 'This is the first book in the A Song of Ice and Fire series.',
                'isbn' => '0553574979',
            ],
            [
                'title' => 'American Gods',
                'genre' => 'Fantasy',
                'author_id' => 4,
                'release' => '2001-03-21',
                'description' => 'This is a novel by Neil Gaiman.',
                'isbn' => '0060530928',
            ],
            [
                'title' => 'The Shining',
                'genre' => 'Horror',
                'author_id' => 5,
                'release' => '1977-01-28',
                'description' => 'This is a horror novel by Stephen King.',
                'isbn' => '0345409641',
            ],
        ];

        foreach ($books as $book) {
            Books::create($book);
        }
    }
}
