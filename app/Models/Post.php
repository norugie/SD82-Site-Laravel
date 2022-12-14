<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function department ()
    {
        return $this->belongsTo(Department::class);
    }

    public function categories ()
    {
        return $this->belongsToMany(Category::class)->where('categories.status', 'Active');
    }

    public function media ()
    {
        return $this->hasMany(Media::class);
    }
}
