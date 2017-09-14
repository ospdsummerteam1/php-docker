<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'answer_id';

    protected $fillable = ['answer','question_id','application_id'];


}
