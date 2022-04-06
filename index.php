<?php
    require("controllers/controller.php");
    
    if ($_GET['id']) {
        $id = $_GET['id'];
        hero($id);
    }
    else {
        teams_and_heroes();
    }

?>