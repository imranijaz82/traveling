<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use App\admin\package;

class PackageModel extends Model
{
    public $fillable = array('name','active','ordering');
}
