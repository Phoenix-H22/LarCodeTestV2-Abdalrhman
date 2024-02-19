<?php
namespace App\Services;
use App\Models\BookClub;

class BookClubService{
    public function getDetailedBookClubsForUser($userId) {
        $bookClubs = BookClub::whereHas('users', function ($query) use ($userId) {
            $query->where('users.id', $userId);
        })->withCount('users')
        ->get();

        return $bookClubs;
    }
}