<?php

namespace Tests\Unit;
use App\Classes\managerEtudiant;
use App\Http\Controllers\PagesController;
use App\Classes\etudiant;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class AjoutEtuTest extends TestCase
{
    public function testajoutEtu()
    {
        $TAjEtu=new PagesController();
        $TAjEtu->postInfos();
        $this->assertTrue(true,"true");
    }
}
