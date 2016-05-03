<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = [
    'event_id'
  ];
    public function events() {
        return $this->hasOne('App\Event');
    }
}
