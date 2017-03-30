<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    //
    public function icon(){
        return $this->hasOne('App\Photo','owner_id','id');
    }

}
