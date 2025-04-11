<?php

// This class implements the specific methods of the example page that require an Api connection
class ExampleModel extends Model {

    public function __construct() {

        parent::connectToApi();

    }
    
}