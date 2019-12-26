<?php

namespace App\Http\Controllers\Auth;


use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

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
    //ancien entete (Request $request)
    public function login(Request $request2)
    {

        $request2->NomUser=request('nomuser');
        $request2->password=request('mdp');
        // Validate the form data
       // $this->validate($request2, [
         //   'NomUser'   => 'required',
          //  'password' => 'required|min:6'
       // ]);


        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['NomUser' => $request2->NomUser, 'password' => $request2->password], $request2->remember)) {
            // if successful, then redirect to their intended location
           // return (view('welcome'));
            //
            $res=[

                'Logged' => 'yes',
                'Type' => 'admin',
                'Nomuser'=>'',
            ];

            return response()->json($res);
           // return view('Ajoutetudiant');

        }
        else {

            if (Auth::guard('etudiant')->attempt(['NomUser' => $request2->NomUser, 'password' => $request2->password], $request2->remember))

            {
                $mat=Auth::guard('etudiant')->user()->Matricule;
                $res=[

                    'Logged' => 'yes',
                    'Type' => 'etudiant',
                    'Matirucle'=>$mat,
                ];




              //  $request->session()->put('Matricule', $mat);
              //  $request->session()->put('nom', Auth::guard('etudiant')->user()->NomEtu);
              //  $request->session()->put('prenom', Auth::guard('etudiant')->user()->Prenoms);

                //return redirect()->route('etudiant.consulterabsences') ;
                return response()->json($res);
            }
            else {
                $res=[

                    'Logged' => 'no',
                    'Type' => '',
                    'Nomuser'=>'',
                ];
               // return redirect()->back()->withInput($request2->only('NomUser', 'remember'));
                return response()->json($res);
            }
        }
    }
}
