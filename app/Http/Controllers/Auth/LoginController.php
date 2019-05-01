<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\User;


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
    protected $redirectTo = '/adminpanel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
    *display login page
    */
    public function login()
    {
        return view('admin.login');
    } 

    /**
    *check login function 
    */
    public function checkLogin(Request $request)
    { 
        $validator = Validator::make($request->all(), [ 
              'email' => 'required|email',
              'password' => 'required',     
        ]);

        if ($validator->fails()) {    

            $json['errors'] = implode('<br>',$validator->errors()->all());
        }else{ 

             $login_data = ['email' => $request->get('email'),
             'password' => $request->get('password')];   
            
            if(Auth::attempt($login_data))
            {
                $json['success'] = 'Login Successfully';
                $json['redirect'] = 'dashboard';
            }else
               $json['error'] = 'Invalid email or password';
            
        }  
        return response()->json($json, 200); 
    }

    /**
    *logout function 
    */
    public function logout(Request $request) {
      Auth::logout();
      return view('admin.login');
    }
}
