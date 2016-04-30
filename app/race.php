<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class race extends Model
{
    public $timestamps=false;
    public function races() {
      return $this->hasMany('App\comment');
  }
     public function racesTwo() {
      return $this->hasMany('App\rating');
    }
}
