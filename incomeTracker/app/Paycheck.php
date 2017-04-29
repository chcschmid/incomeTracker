<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paycheck extends Model
{
    protected $fillable = ['individual', 'amount', 'tithing', 'savings', 'tithingPaid', 'savingsTransferred', 'employer'];
}
