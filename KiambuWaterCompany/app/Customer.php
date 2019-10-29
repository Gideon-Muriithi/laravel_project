<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['AccountNumber', 'AccountName', 'PhoneNumber', 'IdNumber',
    'Description']; 
}
