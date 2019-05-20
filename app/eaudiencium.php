<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eaudiencium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'eaudiencias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'numero'];

    
     public function registrolp()
        {
            return $this->hasMany('App\Registrolp');
        }


    
}
