<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;

    protected $tables = 'authors';
    public $timestamp = true;
    public $fillable = [
        'name',
        'email',
    ];
}
