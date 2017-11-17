<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers;
use Config;

class BaseApiController {

    protected function payloadError($msg, $code) {
        return response()->json(array("error" => ['userMessage' => $msg, 'code' => $code]
        ));
    }

    protected function payloadData($url, $short_code) {

        return response()->json(["data" => ['sort_url' => Config::get('constants.url') . $short_code,
                        'long_url' => $url],
                    "status_code" => 200,
                    "status_txt" => "OK"
        ]);
    }

}
