<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Classes\absence as abs;
class Absence extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [

            'Date' => $this->Jour,
            'Module' => $this->Matiere,
            'Jusfifie' => $this->justifie,
            'Matricule' => $this->Matricule,
        ];
    }
}
