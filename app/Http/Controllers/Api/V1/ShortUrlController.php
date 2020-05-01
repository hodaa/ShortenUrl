<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Url;
use Exception;
use Config;

class ShortUrlController extends BaseApiController {

    public function index() {
        $url = Input::get('url');

        if (empty($url)) {
            $message = "No URL was supplied.";
            return $this->payloadError($message, 43);
        }
        if ($this->validateUrlFormat($url) == false) {
            $message = "URL does not have a valid format.";
            return $this->payloadError($message, 43);
        }
        if ($this->verifyUrlExists($url) == FALSE) {
            $message = "URL does not exist.";
            return $this->payloadError($message, 43);
        } else {
            $short_code = $this->store($url);
            return $this->payloadData($url, $short_code);
        }
    }

    /**
     * Insert long url and create short code 
     * @param string $url
     * @return type
     */
    protected function store($url) {

        $short_code = $this->createShortCode();

        $obj= new Url;
        $obj->short_code = $short_code;
        $obj->long_url = $url;
        $obj->save();

        return $short_code;
    }

     function validateUrlFormat($url) {
        return filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);
    }

    protected function verifyUrlExists($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return (!empty($response) && $response != 404);
    }

    protected function createShortCode() {
        return $rand = substr(md5(microtime()), rand(0, 26), 6);
    }

}
