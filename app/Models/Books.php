<?php

namespace App\Models;

use App\Models\Authors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    protected $tables = 'books';
    public $timestamp = true;
    public $fillable = [
        'title',
        'genre',
        'author_id',
        'release',
        'description',
        'isbn'
    ];

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }
}
