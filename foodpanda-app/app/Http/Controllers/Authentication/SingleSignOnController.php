<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Services\SingleSignOnAuthenticationService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleSignOnController extends Controller
{
    public function login(Request $request, SingleSignOnAuthenticationService $authenticationService)
    {
        $authenticatedUser = $authenticationService
            ->authenticateUsingAccessToken($request->token);

        if (!$authenticatedUser) {
            return redirect('/login')->withErrors('Single Sign-On authentication failed.');
        }

        Auth::login($authenticatedUser);

        return redirect('/dashboard');
    }
}
