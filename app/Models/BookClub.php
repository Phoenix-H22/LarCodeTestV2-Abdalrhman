<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description', // or any other attributes you wish to have
    ];

    
    // TODO: Implement relationships.

    public function books()
    {
        return $this->hasMany(Book::class, 'club_id');
    }

    public function  users()
    {
        return $this->belongsToMany(User::class,'book_clubs_users','club_id' ,'user_id');
    }
}

