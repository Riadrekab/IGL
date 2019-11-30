<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Resources\Absence As AbsenceResource;
use App\Classes\Managerabsence;
//use App\Etudiant;
use App\Classes\absence;
use App\Absence as Absmod;
use App\Classes\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class AbsencesController extends Controller {

/**

Create a new controller instance.



@return void

**/
    public function __construct()
    {
        $this->middleware('guest');
    }

	/**
	 * Display a listing of the resource.
	 * GET /absences
	 *
	 * @return Response
	 */




	public function index()

	{




        $etudiant=new etudiant();
        $manager= new Managerabsence(NULL);
            $etudiant->setMatricule('10/1222');
           // $etudiant->setNom(Session()->get('nom'));
          //  $etudiant->setPrenom(Session()->get('prenom'));
           // $mat=$etudiant->getMatricule();

        //    $tab_abs = $manager->printAbs($etudiant);

	   // return  new AbsenceResource::collection(Absmod::where('Matricule','=','2025')->get());
	    return AbsenceResource::collection(Absmod::where('Matricule','=','10/1222')->get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /absences/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /absences
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /absences/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /absences/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /absences/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /absences/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
