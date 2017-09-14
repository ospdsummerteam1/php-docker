<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendItem extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'send_item_id';

    protected $fillable = ['item_id','img','detail'];

}
