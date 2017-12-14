<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  public function bills()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->belongsToMany('App\Bill')->withTimestamps();
}
}
