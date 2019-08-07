<?php

namespace App;

interface IntegerConversionInterface
{
    public function integerToRoman($integer);
    public function recentConversions($int);
    public function popularConversions($int);
}
