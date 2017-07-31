<?php

namespace Vitapro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    Use SoftDeletes;

    protected $table = 'people';
}
