<?php
/**
 * Title           Hacker News Model
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 1:00PM by Asanka
 * updated on      
 *
 * Description     This file include Hacker news models functions
 *                 (Coding Standard PSR)
 * */

namespace models;

use app\BaseModel;

class HackerNewsModel extends BaseModel
{

    public function __construct()
    {
        // Call parent construct to load the config
        parent::__construct();
    }

    /**
     * Get Hacker news 
     *
     * @return json
     * */
    public function getHackerNews($hackerApiUrl, $params)
    {
        $news = $this->curlGET($hackerApiUrl, $params);
        if ($this->validateApiResult($news)) {
            $output = $news;
        } else {
            $output = json_encode(['error' => true]);
        }

        return $output;
    }
    
    /**
     * Using CURL, call hacker api 
     *
     * @return json
     * */
    public function curlGET($url, $parameters=[]) 
    {
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL =>  $url.'?'.http_build_query($parameters)
        ));

        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        return $resp;
    }

    public function validateApiResult($result) 
    {
        // Decode and check the json result is valid or not
        $output = json_decode($result, true);
        // Check json string include 'hits' parameter
        if ($output != null && isset($output['hits'])) {

            // Check config include 'query' parameter, if include then it compare with result 'query' parameter. 
            if (isset($this->config['newsParameters']['query'])) {
                if (isset($output['query']) && $output['query'] == $this->config['newsParameters']['query']) {
                    return true;
                } else {
                    // Need to update the error log
                    return false;
                }

            } else {
                return true;
            }

        } else {
            // Need to update the error log       
            return false;
        }

    }

}