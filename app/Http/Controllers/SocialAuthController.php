<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

use Auth;
use Socialite;

class SocialAuthController extends Controller
{
    //
    /**
     redirect
     */
    public function redirect()
    {
       return Socialite::driver('facebook')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('facebook')->user();
        $auth_user = $this->findOrCreateUser($user);
        Auth::login($auth_user,true);
        return redirect()->route('index');
    }
    private function findOrCreateUser($fbUser)
    {

        if ($authUser =User::where('social_id', $fbUser->id)->first()) {
            return $authUser;
        }
        return User::create([
            'name' => $fbUser->name,
            'email' => $fbUser->email,
            'social_id' => $fbUser->id,
            'avatar' => $fbUser->avatar
        ]);
    }
}
