<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
        
    protected $guarded = array();
    protected $table = 'patients';
    
    public function vitalsigns() {
        return $this->hasMany('App\VitaSign');
    }
}
