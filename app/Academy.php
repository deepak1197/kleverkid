<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Model has to be singular and table in db has to plural;
class Academy extends Model
{
    protected $table = 'academys';
    public $timestamps = false;
}
