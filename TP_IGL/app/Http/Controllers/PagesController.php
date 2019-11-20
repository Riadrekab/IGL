<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;



class PagesController extends Controller
{
    public function home()
    {
    $test1='salut';
    $test2='ouais';
   // return view('home',compact('test1','test2'));
        require ('Pageabsencec.php');
        $tab_abs= affichieretudiant();
        return view('home',compact('test1','test2','tab_abs'));
    }

    public function Afficheretudiant()
    {
        require ('Pageajouteretudiantc.php');
        Ajouteretudiant();
        return view('Ajoutetudiant');
    }

    public function postInfos(Request $request)
    {
        return 'Le nom est ' . $request->input('nom');
    }



}
