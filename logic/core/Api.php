<?php

// This class uses PHP's cURL to get the data of your app
class Api{

    private $base_url;
    private $connection;

    public function __construct(){

        $this->base_url = "http://localhost:8080";  // Set base url 
                                                    //If you connect to multiple servers you should have a private variable for each server
        $this->connection = curl_init();

    }

    public function __destruct(){

        curl_close($this->connection);

    }

    private function request($endpoint, $method, $parameters = null){

        // TODO

    }

}

