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
        $response = $this->call('POST', '/ajouter_etudiant', ['name' => 'Taylor']);
        echo $response->status();

    }
}
