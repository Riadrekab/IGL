<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    //
    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    /**
     * The table associated with the model.
     *
     * @var string
     */

    //protected $table = 'absences';
    /**
     * @var array
     */
    protected $fillable = ['Anscol', 'Sem', 'Martricule','Jour','justifie','TypeAbs'];
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }
}
