<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genres';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function Book () {
        return $this->Genre::hasMany('Book');
    }

}
