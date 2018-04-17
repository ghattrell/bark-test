<?php

namespace App\Guestbook\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['full_name', 'message'];
}
