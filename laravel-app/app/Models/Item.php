<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'item_id';

    protected $fillable =['img','title','detail','user_id'];

}
