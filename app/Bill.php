<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  public function categories()
{
    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
    return $this->belongsToMany('App\Categorie')->withTimestamps();
}
}
