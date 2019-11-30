<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use Notifiable;
    protected  $guard='etudiant';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'NomUser', 'PassWord','Matricule','NomEtud','Prenoms',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return array
     */
    public function getFillable()
    {
        return $this->fillable;
    }
    public function getId()
    {
        return $this->Matricule;
    }
}
