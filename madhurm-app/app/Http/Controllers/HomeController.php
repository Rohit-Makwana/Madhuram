<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class HomeController extends Controller
{
    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle() {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email',$user?->email)->first();
            if(!$findUser) {
                // login
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = '12321313';
                $findUser->save();
            }
            session()->put('id',$findUser?->id);
            session()->put('isType',$findUser);

            return redirect('/')->with('status','login Success fully');

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
