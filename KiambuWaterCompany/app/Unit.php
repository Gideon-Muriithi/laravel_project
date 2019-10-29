<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['Year','Month','PreviousUnits','CurrentUnits','UnitsDue']; 
}
