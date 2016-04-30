<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
      public function events() {
          return $this->hasOne('App\Event');
      }
}
