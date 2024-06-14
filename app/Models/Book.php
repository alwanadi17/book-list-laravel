<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'isbn',
        'release_date',
        'description',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}