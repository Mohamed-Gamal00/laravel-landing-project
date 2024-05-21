<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = array('name', 'image', 'description', 'link', 'client', 'work_year', 'started', 'finished');
}
