<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShortenUrlTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testResposne() {

        $response = $this->get('/short_url');
        $response->assertStatus(200);
    }

}
