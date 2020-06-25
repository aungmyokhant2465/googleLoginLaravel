<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;

class SocialiteFBController extends Controller
{
public function index()
{
return view('login');
}

public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}

public function callback($provider)
{
    $getInfo = Socialite::driver($provider)->user();
    $user = $this->create($getInfo,$provider);
    auth()->login($user);
    return redirect()->to('/home');
}

function create($getInfo,$provider)
{

    $user = User::where('provider_id', $getInfo->id)->first();
    if (!$user) {
        $user = User::create([
            'name'     => $getInfo->name,
            'email'    => $getInfo->email,
            'provider' => $provider,
            'provider_id' => $getInfo->id
        ]);
    }
    return $user;
}

}
