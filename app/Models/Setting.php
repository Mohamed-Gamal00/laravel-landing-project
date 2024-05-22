<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = array(
        'phone',
        'email',
        'fb_link',
        'tw_link',
        'insta_link',
        'linkin_link'
    );
}
