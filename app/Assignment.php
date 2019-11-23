<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete(){
        $this->completed = true; //if its true update the completed column with 1
        $this->save();
    }
}
