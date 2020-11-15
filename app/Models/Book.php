<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function Author () {
        return $this->Book::hasOne('Author');
    }

    public function Genre () {
        return $this->Book::hasOne('Genre');
    }

    
}