<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Socialite;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from $service.
     *
     * @return Response
     */
    public function handleProviderCallback($service)
    {
        $user = Socialite::driver($service)->stateless()->user();
        
        $name = $user->getName();
        $email = $user->getEmail();
        $password =bcrypt('password1234');
        $count=0;

        $database = DB::table('users')->get();
         foreach($database as $DE){
             $dataEmail= $DE->email;   
             if($dataEmail == $email){
                $count++;
             }
            }
            if ($count == 0){
                         DB::table('users')->insert([
                        [
                            'name' => $name ,
                            'email' => $email,
                            'password' => $password,  

                        ],
                ]);
                
            }
            
           $pass="password1234";
          $credentials = [
        'email' => $email,
        'password' => $pass,
    ];

    // Attempt to login the user
    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }

    return 'Failure';
    }







}