<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Carbon\Carbon;
use Socialite;
use Auth;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	//Login Social Media
	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	 public function handleProviderCallback()
	{
		try {
			$user = Socialite::driver('google')->user();
		} catch (\Exception $e) {
			return redirect('/login');
		}
		// // only allow people with @company.com to login
		// if(explode("@", $user->email)[1] !== 'company.com'){
		//     return redirect()->to('/');
		// }
		// check if they're an existing user
		$existingUser = User::where('email', $user->email)->first();
		if($existingUser){
			// log them in
			if ($existingUser->google_id == "" || $existingUser->avatar != $user->avatar || $existingUser->avatar_original != $user->avatar_original ) {
				$updateUser = User::find($existingUser->id);
				$updateUser->google_id         = $user->id;
				$updateUser->avatar            = $user->avatar;
				$updateUser->avatar_original   = $user->avatar_original;
				$updateUser->save();
			}
			auth()->login($existingUser, true);
		} else {
			//create a new user
			$newUser                    = new User;
			$newUser->name              = $user->name;
			$newUser->email             = $user->email;
			$newUser->email_verified_at = Carbon::now();
			$newUser->google_id         = $user->id;
			$newUser->avatar            = $user->avatar;
			$newUser->avatar_original   = $user->avatar_original;
			$newUser->save();
			auth()->login($newUser, true);
			return redirect()->to('login/google/setPassword');
		}

		if (Auth::user()->password == "") {
			return redirect()->to('login/google/setPassword');
		}
		
		return redirect()->to('/home');
	}
	//
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}


}
