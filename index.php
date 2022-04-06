<?php
    require("controllers/controller.php");
    
    // Verify if there is an $_GET in url to call hero method and display the corresponding page of the hero
    if ($_GET['id']) {
        $id = $_GET['id'];
        hero($id);
    }
    // If not, it call teams_and_heroes method and display the homepage
    else {
        teams_and_heroes();
    }

?>