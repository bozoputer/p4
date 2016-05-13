<?php

namespace projectFour;

use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    protected $fillable = ['list_name', 'user_id', 'id'];
}
