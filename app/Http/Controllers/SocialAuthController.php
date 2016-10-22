<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\SocialAccountService;

//use Laravel\Socialite\Facades\Socialite;

use Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
	    return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
	    //$user = Socialite::driver('facebook')->user();
	    $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
	    auth()->login($user);
	    return $this->redirect()->to('/');
    }
}