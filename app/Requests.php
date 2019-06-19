<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    public $primaryKey = 'RequestID';
}
