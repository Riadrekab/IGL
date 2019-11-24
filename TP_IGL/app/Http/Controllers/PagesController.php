<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use Illuminate\Support\Facades\Input;




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

    public function postInfos(Request $request)
    {
        // return 'Le nom est ' . $request->input('nom');
        require ('Pageajouteretudiantc.php');
        $matricule=$request->input('matricule');
        $nom=$request->input('nom');
        $prenom=$request->input('prenom');
        $nomUtil=$request->input("NomUtil");
        $Mdp = Hash::make($request->input("Mdp"));
        AjoutEtuP($matricule,$nom,$prenom,$nomUtil,$Mdp);
        return view('Ajoutetudiant');
    }



}
