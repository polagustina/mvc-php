<?php

// This class uses PHP's cURL to get the data from other servers
class Api {

    private $base_url;
    private $connection;

    public function __construct() {

        $this->base_url = "http://localhost:3000";  // Set base url 
                                                    // If you connect to multiple servers you should have a private variable for each server
        $this->connection = curl_init();

    }

    public function __destruct() {

        curl_close($this->connection);

    }

    private function request($endpoint, $method, $parameters = null) {

        // TODO

    }

}

