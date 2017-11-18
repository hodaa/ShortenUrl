# ShortenUrl
----
Given a full URL, returns an  short URL. Currently the API only supports shortening a single URL per API call.
Current API Version: 1_>

* **URL**
 api/short_url

* **Method:**
  GET
  
*  **URL Params**

 
   `shortUrl=[string]`

   

* **Success Response:**
  
  Returns short url data on success
 {
    "data": {
        "sort_url": "http://localhost/short_url/public/1741c0",
        "long_url": "https://app.getpostman.com/app/download/win64"
    },
    "status_code": 200,
    "status_txt": "OK"
}
 
* **Error Response:**

    {
        "error": {
            "userMessage": "No URL was supplied.",
            "code": 43
        }
    }

* **Sample Call:**
    http://localhost/ShortenUrl/public/api/short_url?url=    https://app.getpostman.com/app/download/win64
