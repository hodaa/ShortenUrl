# ShortenUrl
**Title**
----
  <_Shorten API Documentation
Current API Version: 1.1._>

* **URL**

 api/short_url
Given an ow.ly URL, returns information about the page, including the original URL, the HTML title, total clicks, and the "votes" value for the link (votes may be a positive or negative value).

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
* **Notes:**

  <_This is where all uncertainties, commentary, discussion etc. can go. I recommend timestamping and identifying oneself when leaving comments here._> 