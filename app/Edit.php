<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
      public function events() {
          return $this->hasOne('App\Event');
      }
}
