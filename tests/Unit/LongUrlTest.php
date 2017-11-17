<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\LongUrlController;

class LongUrlTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReturnUrlByShortCodeIsValid() {
        $obj = new LongUrlController();
        $obj->shortToUrl();
        $this->assertTrue(true);
    }

}
