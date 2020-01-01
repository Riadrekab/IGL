<?php

namespace Tests\Unit;
use App\Http\Controllers\AbsencesController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ConsulterEtudiantTest extends TestCase
{
    public  function testPrintabs()
    {
        $absC=new AbsencesController();
        $mat="10/1222";
        $abs=[];
        $abs=$absC->index($mat);
        foreach ($abs as $value) {
            print_r($value);
        }
        $this->assertTrue(true,"true");



    }
}
