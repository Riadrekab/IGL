<?php

namespace App\Http\Controllers\Auth;


use App\Etudiant;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;


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

               $mat=Auth::guard('etudiant')->user()->Matricule;


                $request->session()->put('Matricule', $mat);
                $request->session()->put('nom', Auth::guard('etudiant')->user()->NomEtu);
                $request->session()->put('prenom', Auth::guard('etudiant')->user()->Prenoms);

                return redirect()->route('etudiant.consulterabsences') ;
            }
            else {
                return redirect()->back()->withInput($request->only('NomUser', 'remember'));
            }
        }
    }
}
