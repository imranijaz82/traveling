<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use App\admin\package;

class package extends Model
{
    public $fillab = array('name','active','ordering');
}
