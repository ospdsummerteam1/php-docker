<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'question_id';

    protected $fillable = ['question', 'item_id'];
}
