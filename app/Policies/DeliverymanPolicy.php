<?php

namespace App\Policies;

use App\Models\User;

class DeliverymanPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function isDeliveryman(User $user)
    {
        return $user->role === 'deliveryman';
    }
}
