<?php

namespace projectFour;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task', 'list_id'];
}
