<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['logo','nama','foto1', 'foto2', 'foto3','deskripsi', 'alamat', 'email', 'phone', 'video', 'ytb', 'fb', 'ig','tiktok'];
}
