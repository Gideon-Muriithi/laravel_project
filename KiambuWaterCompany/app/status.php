<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = ['Account Meter Number','Sewer Connetion','Water Connection','Account Category','Account Status']; 
}
