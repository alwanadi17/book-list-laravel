<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            [
                'name' => 'J.K. Rowling',
                'email' => 'jkrowling@example.com',
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'email' => 'jrrtolkien@example.com',
            ],
            [
                'name' => 'George R.R. Martin',
                'email' => 'grrmartin@example.com',
            ],
            [
                'name' => 'Neil Gaiman',
                'email' => 'neilgaiman@example.com',
            ],
            [
                'name' => 'Stephen King',
                'email' => 'stephenking@example.com',
            ],
        ];
        foreach ($authors as $author) {
            Authors::create($author);
        }
    }
}