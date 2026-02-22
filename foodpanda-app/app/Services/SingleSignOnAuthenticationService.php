<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\User;

class SingleSignOnAuthenticationService
{
    public function authenticateUsingAccessToken(string $accessToken): ?User
    {
        $response = Http::withToken($accessToken)
            ->get(env('ECOMMERCE_APPLICATION_URL') . '/api/authenticated-user');

        if (!$response->successful()) {
            return null;
        }

        $externalUser = $response->json();

        return User::firstOrCreate(
            ['email' => $externalUser['email']],
            [
                'name' => $externalUser['name'],
                'password' => bcrypt('temporary-password')
            ]
        );
    }
}