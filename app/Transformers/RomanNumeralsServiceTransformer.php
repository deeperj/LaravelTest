<?php

namespace App\Transformers;

use App\RomanNumeralsService;
use League\Fractal\TransformerAbstract;

class RomanNumeralsServiceTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
	public function transform(RomanNumeralsService $api)
	{
	    return [
	        'id'      => (int) $api->id,
	        'romanNumeralConversion'   => $api->romanNumeralConversion,
	        'conversionCount'    => (int) $api->conversionCount,
	        'theNumber'    => (int) $api->theNumber
	    ];
    } 
 }
