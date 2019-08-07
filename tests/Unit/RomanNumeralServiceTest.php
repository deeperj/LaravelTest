<?php

namespace Tests\Unit;

use Tests\TestCase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithoutMiddleware;

class RomanNumeralServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRomanNumeralsEndpoints()
    {
        //$response = $this->http->request('GET', 'recent-conversions');
        //$this->assertEquals(200, $response->getStatusCode());
        //$contentType = $response->getHeaders()["Content-Type"][0];
        //$this->assertEquals("application/json", $contentType);
        // $s = (string)$response->getBody();
        // $this->assertContains('conversionCount', $s);
        $response = $this->get('/api/recent-conversions');

        $response->assertStatus(200);
        $response = $this->get('/api/popular-conversions');

        $response->assertStatus(200);
        $response = $this->get('/api/integer-to-roman/200');

        $response->assertStatus(200);
        //$response->has('conversionCount') ;

    }
}
