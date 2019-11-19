<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    $test1='salut';
    $test2='ouais';
    //return view('home',compact('test1','test2'));
        require ('Pageabsencec.php');
        affichieretudiant();
    }

    public function Afficheretudiant()
    {
        require ('Pageajouteretudiantc.php');
        Ajouteretudiant();
    }



}
