<?php

namespace App\Services;

use App\Models\User;

class SingleSignOnTokenService
{
  
    public function generateAccessToken(User $user): string
    {
        return $user->createToken('single-sign-on-token')
            ->plainTextToken;
    }
}