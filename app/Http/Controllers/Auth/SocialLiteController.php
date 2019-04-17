<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class SocialLiteController extends Controller
{
    public function signin()
    {
        return view('auth/signin');
    }

    public function login()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $auth_user = Socialite::driver('facebook')->stateless()->user();
 
        $user = User::updateOrCreate(
            [
                'email' => $auth_user->email
            ],
            [
                'token' => $auth_user->token,
                'name'  =>  $auth_user->name
            ]
        );
    
        Auth::login($user, true);
        return redirect()->to('/books'); 
        
    }
}
