<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
      $user = Socialite::driver('google')->stateless()->user();
      $exits= \App\User::where('email',$user->getEmail())->first();
      //echo $exits->email;
//      echo $user->getId(); echo "<br>";
//      echo $user->getNickname();echo "<br>";
//      echo $user->getName();echo "<br>";
//      echo $user->getEmail();
//      
     // $this->create($user);

        if($exits)
        {
            if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        }
        else
        {
             User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt('1111111'),
        ]);
       
        if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
        return redirect()->intended('/');
        
        }
        }
      
    }

//-----------------login wiht github-------------
     public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleGithubCallback()
    {
      $user = Socialite::driver('github')->stateless()->user();
      $exits= \App\User::where('email',$user->getEmail())->first();
      //echo $exits->email;
//      echo $user->getId(); echo "<br>";
//      echo $user->getNickname();echo "<br>";
//      echo $user->getName();echo "<br>";
//      echo $user->getEmail();
//      
     // $this->create($user);

        if($exits)
        {
            if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        }
        else
        {
             User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt('1111111'),
        ]);
       
        if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
        return redirect()->intended('/');
        
        }
        }
      
    }
//--------------------Login wiht twitter------------
     public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleTwitterCallback()
    {
      $user = Socialite::driver('twitter')->user();
      $exits= \App\User::where('email',$user->getEmail())->first();
      //echo $exits->email;
//      echo $user->getId(); echo "<br>";
//      echo $user->getNickname();echo "<br>";
//      echo $user->getName();echo "<br>";
//      echo $user->getEmail();
//      
     // $this->create($user);

        if($exits)
        {
            if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        }
        else
        {
             User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => bcrypt('1111111'),
        ]);
       
        if (Auth::attempt(['email' => $user->getEmail(), 'password' => '1111111'])) {
            // Authentication passed...
        return redirect()->intended('/');
        
        }
        }
      
    }
}
