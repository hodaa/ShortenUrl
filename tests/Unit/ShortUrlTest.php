<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Api\V1\ShortUrlController;

class ShortUrlTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample() {
        $this->assertTrue(true);
    }

    public function testUrlIsValid() {

        $short_url = new ShortUrlController();
        $this->assertFalse($short_url->validateUrlFormat("hoda"));
//         $this->assertTrue($short_url->validateUrlFormat("https://www.cantalop.com/user-login"));
    }

  

}
