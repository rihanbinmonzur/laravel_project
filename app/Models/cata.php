<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cata extends Model
{
    use HasFactory;
    protected $fillable=['name','batch_no','email','date']; 
}
