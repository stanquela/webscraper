<?php
class WebScraper
{
    public function scrape($url)
    {
        // Initialize cURL
        $ch = curl_init();
        // Set URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // Set user agent
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // Execute cURL
        $data = curl_exec($ch);
        // Close cURL
        curl_close($ch);
        // Return data
        return $data;
    }
}
?>
