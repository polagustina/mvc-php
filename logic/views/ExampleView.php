<?php

// This class contains the views of the example page
class ExampleView extends View {

    // This page has only one view so I only implemented the renderExample() method
    // If your page needs to have multiple views or widgets you have to create a method that implements the parent::render
    public function renderExample(){

        parent::render("example", function() {

?>

            <p id="example-1"></p>
            <select name="language-select" id="language-select">
                <option value="en" id="example-2" selected></option>
                <option value="es" id="example-3"></option>
            </select>

<?php

        });

    }
    
}