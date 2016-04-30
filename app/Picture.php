<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class picture_table extends Model
{
  public $timestamps=false;
    public function events() {
        return $this->hasOne('App\Event');
    }
}
