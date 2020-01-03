<?php

namespace Tests\Unit;
use App\Classes\managerEtudiant;
use App\Http\Controllers\PagesController;
use App\Classes\etudiant;
use GuzzleHttp\RequestOptions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class AjoutEtuTest extends TestCase
{
    public function testajoutEtu()
    {

        $data= ['Matricule' => '12/12199',
            'NomEtud' => 'Okey1',
            'Prenoms' => 'Okey2',
            'NomUser' => 'Okey12',
            'PassWord' =>'test1212' ,

        ];

        $response = $this->call('POST', '/ajouter_etudiant', $data);
        $this->assertDataBaseHas('etudiants',$data);
        $this->assertEquals(200,$response->getStatusCode());
    }
}
