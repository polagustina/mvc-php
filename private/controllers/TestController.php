<?php

// This class implements the specific logic for the test page
class TestController extends Controller{

    public function __construct($model, $view){

        parent::__construct($model, $view);

        $this->view->renderTest();

    }

}