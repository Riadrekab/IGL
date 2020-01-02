<?php

namespace Tests\Unit;
use App\Http\Controllers\AbsencesController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PDO;
use App\Classes\absence;


class ConsulterEtudiantTest extends TestCase
{
    public  function testPrintabs()
    {

        $bdd = new PDO('mysql:host=localhost;dbname=scolaritebdd;charset=utf8', 'root', '');
        $test12= $bdd->query('SELECT * from absences WHERE Matricule =\'10/1222\'' );
        $absC=new AbsencesController();
        $mat="10/1222";

        $abs=$absC->index($mat);
        $ok=$test12->fetchAll( PDO::FETCH_CLASS, "App\Classes\absence" );

        $booleg=false;
       $i=0;
       $tableau=[];
       foreach ($ok as $value)
       {
           $tableau[$i]=$value->Matiere;
           $i++;

       }
        $i2=0;
        foreach ($abs as $resulttest)
        {
           if ($resulttest["Matiere"]==$tableau[$i2])
           {
               $booleg=true;
           }
           $i2++;
        }
        $this->assertTrue($booleg,"true");



    }
}
