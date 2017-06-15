<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=['email', 'password'];
    public $timestamps = false;
}
