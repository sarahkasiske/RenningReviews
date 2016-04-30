<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword_table extends Model
{
 public $timestamps=false;
    public function event() {
        return $this->hasOne('App\event_table');
    }
}
