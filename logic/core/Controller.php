<?php

// This class has the common logic for each page.
class Controller {

    protected $model;
    protected $view;

    public function __construct($model, $view) {

        $this->model = $model;
        $this->view  = $view;

    }

}