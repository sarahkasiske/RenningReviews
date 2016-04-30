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
  public function keywords() {
    return $this->hasMany('App\Keyword');
}
  public function distances() {
    return $this->hasMany('App\RaceDistance');
}
  public function pictures() {
    return $this->hasMany('App\Picture');
}

}
