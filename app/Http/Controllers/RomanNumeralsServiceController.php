<?php

namespace App\Http\Controllers;

use App\RomanNumeralsService;
use App\IntegerConversion;
use App\Transformers\RomanNumeralsServiceTransformer;
use Illuminate\Http\Request;

class RomanNumeralsServiceController extends Controller
{
    private $svc;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->svc = new IntegerConversion();
    }
    /**
     * Returns json string containing an array having the number, its roman numeral conversion and the number of times.
     * the query for that number has been called
     * @param theNumber the value to convert to roman numvers
     * @return \Illuminate\Http\Response
     */
    public function integerToRoman($the_integer)
    {
        if(!is_int($the_integer)){
          return response('Non-integer request', 400)
                  ->header('Content-Type', 'text/plain');
        }
        $x=RomanNumeralsService::where('theNumber',$the_integer);
        if($x){
            $x->conversionCount++;
            $x->save(); 
            $cvt = fractal($x, new RomanNumeralsServiceTransformer())->toArray();
        }else{
            $cvt = fractal(RomanNumeralsService::create([
                'theNumber'=>$the_integer,
                'romanNumeralConversion'=>$this->svc->integerToRoman($the_integer),
                'conversionCount'=>1
            ]), new RomanNumeralsServiceTransformer())->toArray();
        }
        return response()->json($cvt);
    }
    /**
     * Returns json string containing an array having the number, its roman numeral conversion and the number of times.
     * the query for that number has been called
     * @param theNumber the value to convert to roman numvers
     * @return \Illuminate\Http\Response
     */
    public function popularConversions($the_integer=10)
    {
        if(is_int($the_integer)){
            return response()->json($this->svc->popularConversions($the_integer));
        }else{
            return response()->json($this->svc->popularConversions());
        }
    }
    /**
     * Returns json string containing an array having the number, its roman numeral conversion and the number of times.
     * the query for that number has been called
     * @param theNumber the value to convert to roman numvers
     * @return \Illuminate\Http\Response
     */
    public function recentConversions($the_integer=10)
    {
        if(is_int($the_integer)){
            return response()->json($this->svc->recentConversions($the_integer));
        }else{
            return response()->json($this->svc->recentConversions());
        }
    }

}
