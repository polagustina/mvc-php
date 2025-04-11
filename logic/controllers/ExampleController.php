<?php

// This class implements the specific logic for the example page
class ExampleController extends Controller {

    public function __construct($model, $view) {

        parent::__construct($model, $view);

        $this->view->renderExample();

    }

}