<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\sede;

class registrolp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registrolps';

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
    protected $fillable = ['fechain','ojurisdic', 'sede', 'nroexpe', 'texpe', 'ojudicial', 'ejcausa', 'fechareq', 'fechateq', 'ajudicial', 'fechagc', 'fechareaudiencia', 'fechaaudi', 'ejaudiencia', 'taudiencia', 'raudiencia', 'reproaudien','fechadevol'];


    public function sede(){
        return $this->belongsTo('App\Sede');
    }

}
