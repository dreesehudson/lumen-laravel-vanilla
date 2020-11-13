<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $title = 'title';
    public $isbn = 'isbn';
    public $pages = 'pages';
    public $released = 'released';
    public $value = 'value';
    public $cost = 'cost';
    public $edition = 'edition';
    public $author = 'ref_author_id';
    public $genre = 'ref_genre_id';
    public $incrementing = true;
    public $timestamps = true;

}
