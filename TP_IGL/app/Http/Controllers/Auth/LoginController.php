<?php

namespace App\Http\Controllers\Auth;


use App\Etudiant;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'NomUser'   => 'required',
            'password' => 'required|min:6'
        ]);


        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['NomUser' => $request->NomUser, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
           // return (view('welcome'));
           return view('Ajoutetudiant');

        }
        else {

            if (Auth::guard('etudiant')->attempt(['NomUser' => $request->NomUser, 'password' => $request->password], $request->remember))

            {
                $username=$request->NomUser;
                $request->session()->put('username', $username);
                return redirect()->route('etudiant.consulterabsences') ;
            }
            else {
                return redirect()->back()->withInput($request->only('NomUser', 'remember'));
            }
        }
    }
}
