<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  public function edits() {
    return $this->hasMany('App\Event');
}
  public function reviews() {
    return $this->hasMany('App\Review');
}

}
