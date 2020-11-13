<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

    use HasFactory;
    
    //UPDATE functions
    public function checkout()
    {
        $this->checked_out = true;
        $this->save();
    }

    public function checkin()
    {
        $this->checked_out = false;
        $this->save();
    }
}
