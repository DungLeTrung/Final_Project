<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class GoogleSocialiteController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->with(['prompt' => 'consent'])->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $client = new Client(['verify' => false]);

            $provider = Socialite::driver('google');
            $provider->setHttpClient($client);

            $user = $provider->user();

            $finduser = User::where('social_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('/');

            }else{
                $newUser = $this->user->create([
                    'first_name' => $user->name,
                    'last_name' => 'Google',
                    'user_name' => 'Google User',
                    'phone' => '',
                    'role' => 'USER',
                    'address' => '',
                    'is_verify'=>true,
                    'is_active'=>true,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => ''
                ]);

                Auth::login($newUser);

                return redirect()->route('home-page')->with('message', 'Login successful');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
