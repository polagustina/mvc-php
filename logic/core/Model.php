<?php

// This class can implement the Api class to get the data of each page
class Model {

    protected $api;

    public function connectToApi() {

        $this->api = new Api;

    }

}