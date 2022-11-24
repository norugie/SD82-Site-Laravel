<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    public function department ()
    {
        return $this->belongsTo(Department::class);
    }

    public function role ()
    {
        return $this->belongsTo(Role::class);
    }

    public function posts ()
    {
        return $this->hasMany(Post::class)->where('posts.status', 'Active');
    }
}
