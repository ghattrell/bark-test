<?php

namespace App\Guestbook\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = ['first_name', 'last_name', 'message', 'rating', 'coming_back'];
}
