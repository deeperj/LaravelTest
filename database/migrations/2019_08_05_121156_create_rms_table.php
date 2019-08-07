<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roman_numerals_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('theNumber')->unique();//roman-numeral-conversion
            $table->integer('conversionCount');//roman-numeral-conversion
            $table->string('romanNumeralConversion');//roman-numeral-conversion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roman_numerals_services');
    }
}
