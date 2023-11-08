<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image',
    ];

    public function book_categories(){
        return $this->hasMany(BookCategory::class, 'book_id');
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisher_id', 'id');
    }
}
