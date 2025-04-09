<?php

// This class contains the views of the test page
class TestView extends View{

    // This page has only one view so I only implemented the renderTest() method
    // If your page needs to have multiple views or widgets you have to create a method that implements the parent::render
    public function renderTest(){

        parent::render("Test", function() {

?>

            <h2>This is the test page</h2>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus eaque illo omnis iusto nobis laudantium, nulla saepe! Adipisci vel quos labore consequatur autem nobis corrupti error maxime, voluptates alias?</p>

<?php

        });

    }
    
}