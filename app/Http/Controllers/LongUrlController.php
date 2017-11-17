<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input;
use App\Url;

class LongUrlController extends Controller {
   
    /**
     * get long url by it's sortcode
     *               
     * @param type $code
     * @return type
     */
    protected function shortToUrl($code) {
        $url = Url::where('short_code', $code)->first();
        return redirect($url->long_url);
    }


}
