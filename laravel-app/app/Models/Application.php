<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'application_id';

    protected $fillable = ['user_id','item_id'];
}
