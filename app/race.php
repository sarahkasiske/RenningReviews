<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class race extends Model
{
    public $timestamps=false;
    public function comments() {
      return $this->hasMany('App\comment');
  }
     public function ratings() {
      return $this->hasMany('App\rating');
    }
}
