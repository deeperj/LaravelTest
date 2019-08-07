<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected $http;

    public function setUp()
    {
        $this->app=$this->createApplication();
        $this->http = new \GuzzleHttp\Client(['base_uri' => 'http://localhost:8000/api/']);
    }

    public function tearDown() {
        $this->http = null;
    }
}

