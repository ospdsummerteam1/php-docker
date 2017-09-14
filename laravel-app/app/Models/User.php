<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticauleTrait;

class User extends Model implements Authenticatable
{
    use AuthenticauleTrait;
    public $timestamps = false;

    protected $fillable = ['user_id','user_name','introduction','icon'];
}
