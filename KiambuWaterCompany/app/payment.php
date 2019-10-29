<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = ['Year','Month','C/F','Amount Paid','B/F','Amount Due']; 
}
