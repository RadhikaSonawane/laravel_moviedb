<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actors() {
        return $this->belongsToMany('App\Actor');
    }

    public function director() {
        return $this->belongsTo('App\Director');
    }

    public function genres() {
        return $this->belongsToMany('App\Genre');
    }

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function ratings ()
  {
       return $this->hasMany('App\Ratings');
   }

  }
