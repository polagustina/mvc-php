<?php

// This class contains the views of the example page
class ExampleView extends View {

    // This page has only one view so I only implemented the renderExample() method
    // If your page needs to have multiple views or widgets you have to create a method that implements the parent::render
    public function renderExample(){

        parent::render("Example", function() {

?>

            <h2 id="i18n-1"></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus eaque illo omnis iusto nobis laudantium, nulla saepe! Adipisci vel quos labore consequatur autem nobis corrupti error maxime, voluptates alias?</p>

<?php

        });

    }
    
}