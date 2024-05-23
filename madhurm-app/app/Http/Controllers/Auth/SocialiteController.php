<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
        /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                dd($user);
                // If the user already exists, log them in
                Auth::login($user);
            } else {
                // If the user does not exist, create a new user and log them in
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(str_random(16)),
                ]);
                Auth::login($user);
            }

            return redirect()->route('home');
        } catch (\Exception $e) {
            // Handle the error
            return redirect()->route('login')->withErrors(['error' => 'Unable to login using Google. Please try again.']);
        }
    }
}
