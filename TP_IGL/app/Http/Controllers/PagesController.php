<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use App\Etudiant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class PagesController extends Controller
{
    public function home()
    {
        $username=Session()->get('username');


    $test1='salut';
    $test2='ouais';
   // return view('home',compact('test1','test2'));
      require ('Pageabsencec.php');
      $tab_abs= affichieretudiant($username);
      return view('Consulterabsences',compact('test1','test2','tab_abs'));
    }

    public function Afficheretudiant()
    {
        require ('Pageajouteretudiantc.php');
        return view('Ajoutetudiant');
    }

    public function postInfos()
    {
        // return 'Le nom est ' . $request->input('nom');
       // require ('Pageajouteretudiantc.php');
        $matricule=request('matricule');

        $nom=request('nom');
        $prenom=request('prenom');
        $nomUtil=request("NomUtil");
        $Mdp = Hash::make(request("Mdp"));
        Etudiant::create([
            'Matricule' => request('matricule'),
            'NomEtud' => request('nom'),
            'Prenoms' => request('prenom'),
            'NomUser' => request('NomUtil'),
            'PassWord' => $Mdp,
        ]);
     //   AjoutEtuP($matricule,$nom,$prenom,$nomUtil,$Mdp);
       // return view('Ajoutetudiant');
    }
    public function postInfos2(Request $request)
    {
        // return 'Le nom est ' . $request->input('nom');
        // require ('Pageajouteretudiantc.php');
        $matricule=$request->input('matricule');
       // echo($matricule);
        $nom=$request->input('nom');
        $prenom=$request->input('prenom');
        $nomUtil=$request->input("NomUtil");
        $Mdp = Hash::make($request->input("Mdp"));
        AjoutEtuP($matricule,$nom,$prenom,$nomUtil,$Mdp);
        // return view('Ajoutetudiant');
    }



}
