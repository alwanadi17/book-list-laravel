<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Harper Lee',
                'email' => 'harperlee@example.com',
                'date_of_birth' => '1926-04-28',
                'biography' => 'Harper Lee was an American novelist best known for her 1960 novel, To Kill a Mockingbird.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'F. Scott Fitzgerald',
                'email' => 'fscottfitzgerald@example.com',
                'date_of_birth' => '1896-09-24',
                'biography' => 'F. Scott Fitzgerald was an American novelist, widely regarded as one of the greatest writers of the 20th century.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Austen',
                'email' => 'janeausten@example.com',
                'date_of_birth' => '1775-12-16',
                'biography' => 'Jane Austen was an English novelist known for her witty and insightful novels that explored the societal norms of her time.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suzanne Collins',
                'email' => 'suzannecollins@example.com',
                'date_of_birth' => '1962-08-10',
                'biography' => 'Suzanne Collins is an American author best known for her bestselling Hunger Games trilogy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dan Brown',
                'email' => 'danbrown@example.com',
                'date_of_birth' => '1964-06-22',
                'biography' => 'Dan Brown is an American author best known for his bestselling novels, including The Da Vinci Code and Angels & Demons.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}