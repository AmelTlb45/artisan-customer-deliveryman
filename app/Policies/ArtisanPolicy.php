<?php

namespace App\Policies;

use App\Models\User;

class ArtisanPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function isArtisan(User $user)
{
    return $user->role === 'artisan';
}

}
