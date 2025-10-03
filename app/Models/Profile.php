<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nama_yayasan','image','motto','description','visi','misi','history'];
}
