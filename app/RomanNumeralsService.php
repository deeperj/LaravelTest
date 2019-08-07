<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RomanNumeralsService extends Model
{
    protected $fillable = ['theNumber', 'romanNumeralConversion', 'conversionCount'];
}
