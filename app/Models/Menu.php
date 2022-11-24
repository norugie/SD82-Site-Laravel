<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function submenu ()
    {
        return $this->hasMany(Submenu::class)->where('submenus.status', 'Active');
    }
}
