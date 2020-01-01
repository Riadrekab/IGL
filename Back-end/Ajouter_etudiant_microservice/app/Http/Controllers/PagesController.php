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
use Illuminate\Database\QueryException;



class PagesController extends Controller
{



    public function postInfos()
    {
        // return 'Le nom est ' . $request->input('nom');
       // require ('Pageajouteretudiantc.php');
        $matricule=request('matricule');

        $nom=request('nom');
        $prenom=request('prenom');
        $nomUtil=request("NomUtil");
        $Mdp = Hash::make(request("Mdp"));
       try {
           //return response()->json(['err'=> '0']);
           Etudiant::create([
               'Matricule' => request('matricule'),
               'NomEtud' => request('nom'),
               'Prenoms' => request('prenom'),
               'NomUser' => request('NomUtil'),
               'PassWord' => $Mdp,
           ]);
           $res=[
               'Erreur' => '0',
           ];
           return response()->json($res);
       }
       catch (QueryException $e){
           $errorCode = $e->errorInfo[1];
           if($errorCode == 1062)

           {
               $res=[
                   'Erreur' => 'Le Matricule entré existe deja',

                    ];

               return response()->json($res);
               // houston, we have a duplicate entry problem
           }

       }
     //   AjoutEtuP($matricule,$nom,$prenom,$nomUtil,$Mdp);
       // return view('Ajoutetudiant');


    }




}
