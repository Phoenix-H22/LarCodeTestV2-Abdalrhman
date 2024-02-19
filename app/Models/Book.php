<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'isbn', // or any other attributes you wish to have
    ];

    // TODO: Implement relationships.

    public function club()
    {
        return $this->belongsTo(BookClub::class, 'club_id');
    }
}

