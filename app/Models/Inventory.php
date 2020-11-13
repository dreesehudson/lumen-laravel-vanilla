<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
