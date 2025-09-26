<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['author_id','name','pages','isbn','price','description','image_url','stock','format','stock','language','publish_date','edition'];
  
}
